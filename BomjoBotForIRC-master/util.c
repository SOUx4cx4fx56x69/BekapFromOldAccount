#include "AntiQubick.h"
#include "util.h"
#include "time.h"
#include <stdio.h>
#include <stdarg.h>
void 
error(const char *msg)
{
    fprintf(stderr,msg);
    puts("");
    exit(-1);
}

void 
grepPing(char * buffer,char*ping)
{
memset(ping,0,SIZEPING);
while(*buffer != ':')
{
*buffer++;
}
*buffer++;
while(*buffer!='\n')
*ping++=*buffer++;
}//end

unsigned int 
CountString(FILE*file)
{
unsigned int count=0;
char ch;
if(file == NULL) error("No can find this file");
while( (ch=fgetc(file)) != EOF)
 if(ch=='\n') count++;
return count;
}

void
getRandomStringFromFie(char*file,char*buffer)
{
FILE*trollFile=fopen(file,"r");
if(trollFile == NULL) error("No can find this file troll.txt");
srand ( time(NULL) );
unsigned auto strings = CountString(trollFile);
unsigned auto randomString = rand() % strings;
unsigned auto count=0;
char ch;
rewind(trollFile);
while((ch=fgetc(trollFile)) !=EOF)
{
if(ch=='\n')count++;
if(count == randomString)
{
while((ch=fgetc(trollFile)) !='\n')*buffer++=ch;
*buffer++='\0';
break;
} 
}
close(trollFile);
}

void 
Troll(int socket)
{
if(FORFUCKOFF < NEEDFORFUCKOFF)
{
char tmp[SIZEBUFFER];
char buffer[SIZEBUFFER/2];
bzero(tmp,SIZEBUFFER);
bzero(buffer,SIZEBUFFER/2);
getRandomStringFromFie("troll.txt",buffer);
sprintf(tmp,"PRIVMSG %s %s", DEFAULT_CHANNEL,buffer );
writeTo(socket,tmp);
}
}

void
QUIT(int socket)
{
writeTo(socket, "QUIT leaving");
raise(9);
}
void
_setSetting(char*setting,char*set)
{
if(strstr(setting,"CHANNEL") != NULL)
 strcpy(DEFAULT_CHANNEL,set);
if(strstr(setting,"owner") != NULL)
 strcpy(OWNER,set);
if(strstr(setting,"OWNER_NICK") != NULL)
 strcpy(OWNER_NICK,set);
if(strstr(setting,"NEEDFORDISABLE") != NULL)
 NEEDFORFUCKOFF=(unsigned long long)atoi(set);
if(strstr(setting,"TIMETROLL") != NULL)
 TIMETROLL=(unsigned int)atoi(set);
if(strstr(setting,"TIMEDW") != NULL)
 TIMEDW=(unsigned int)atoi(set);
if(strstr(setting,"MAXPOWN") != NULL)
 MAXPOWN=(unsigned long long)atoi(set);
if(strstr(setting,"MAXNUM") != NULL)
 MAXNUM=(unsigned long long)atoi(set);
bzero(setting,SIZEBUFFER);
bzero(set,SIZEBUFFER);
}

void
InitConfig()
{
FILE*config=fopen("config.ini","r");
if(config == NULL) error("No can read config.ini");
unsigned int counter;
char setting[SIZEBUFFER];
char set[SIZEBUFFER];
char ch;
bool _thisSet=false;
while ((ch = fgetc(config)) != EOF)
{
if(ch=='='){_thisSet=true;setting[counter++]='\0';counter=0;}
if(ch=='\n'){_thisSet=false;set[counter++]='\0';counter=0;_setSetting(setting,set);}
if(_thisSet==false && ch != '\n' && ch != '=')setting[counter++]=ch;
if(_thisSet==true && ch != '\n' && ch != '=')set[counter++]=ch;
}
close(config);
}
