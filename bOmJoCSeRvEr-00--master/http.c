#include<stdio.h>
#include<stdlib.h>
#include <pthread.h>
#include<string.h>
#include "main.h"
#include"socket.h"
char *HTTP200 =  "HTTP/1.1 200 OK\n"
	       "Content-type: text/html\n"
               "\r\n";
char *HTTP404 =  "HTTP/1.1 404 Not Found\n"
	         "<center><h1>Not Found</h1></center>"
	       "Content-type: text/html\n"
               "\r\n";

void
GetDirectoryFromAtribute(char*src,char*dest)
{
while(*src)
{
if(*src==' ') break;
*dest++=*src++;
}
*dest++='\0';
}

void
Catenation(char*one,char*two,char*dest)
{
while(*one)
*dest++=*one++;
//*two++;
while(*two)
*dest++=*two++;
*dest++='\0';
}
void
notFound(int*socket)
{
writeTo(*socket,HTTP404);
close(*socket);
}
void
GetCommand(char*buffer,char*command,char*atribute)
{
while(*buffer)
{
if(*buffer == ' ') break;
*command++=*buffer++;
}
*buffer++;
while(*buffer)
{
*atribute++=*buffer++;
}
*atribute++='\0';
*command++='\0';
}
///
int
HTTPQuery(int socket,char*buffer,int id)
{
//printf("ID SERVER: %d\n",id);
//
FILE*file;
char atribute[SIZEBUFFER];
char command[SIZEBUFFER];
char tmp[PATH_MAX+1];
char tmp1[PATH_MAX+1];
char * line = NULL;
size_t len = 0;
ssize_t read;
//
collUserFewSecond++;
if(collUserFewSecond > SERVERS[id].MAXLISTEN){ close(socket);return -1;}
GetCommand(buffer,command,atribute);
printf("%s %s\n",command,atribute);
printf("%s\n%s\n",PATHS[id].DIRECTORY,INDEXS[id].INDEX);
if(strstr(command,"GET") != NULL)
{
GetDirectoryFromAtribute(atribute,tmp);
if(strlen(tmp) != 1)
 Catenation(PATHS[id].DIRECTORY,tmp,tmp1);
else
  Catenation(PATHS[id].DIRECTORY,INDEXS[id].INDEX,tmp1);
file=fopen(tmp1,"r+");
printf("%s...\n",tmp1);
if(file == NULL) notFound(&socket);
else
{
 printf("%s opened\n",tmp1);
 writeTo(socket,HTTP200);
 while ((read = getline(&line, &len, file)) != -1) 
 {
  writeTo(socket,line);
 }

}

}///IF GET END

close(socket);
bzero(command,SIZEBUFFER);
bzero(atribute,SIZEBUFFER);
bzero(tmp,PATH_MAX+1);
bzero(tmp1,PATH_MAX+1);
}
