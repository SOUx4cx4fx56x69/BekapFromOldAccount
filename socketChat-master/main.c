#include <stdio.h>
#include <stdlib.h>
#include <netinet/in.h>
#include <signal.h>
#include <time.h>
#include <string.h>
#include <pthread.h>
#include "main.h"
void whilerecv(int socket);
int main(int collArg,char**argv)
{
pthread_t  recv;
static struct sockaddr_in serv_addr;
char buffer[SIZEBUFFER];
char command[SIZECOMMAND];
char command_argument[SIZECOMMANDARG];
char nick[256];
if(collArg < 3) error("programm host port");
int mainSocket = initClient( atoi(argv[2]) ,argv[1], &serv_addr );
if (connect(mainSocket,(struct sockaddr *) &serv_addr,sizeof(serv_addr)) < 0) 
        error("ERROR connecting");
    writeToSocket(mainSocket,"HELLOSOCKETCHAT");
    readFromSocket(mainSocket,buffer);
    printf("%s\n",buffer);
	bzero(buffer,SIZEBUFFER);
	printf("Write you nickname: ");
	fgets(nick,SIZEBUFFER-1,stdin);
	sprintf(buffer,"NICK %s",nick);
    writeToSocket(mainSocket,buffer);
	writeToSocket(mainSocket,"PING");
	readFromSocket(mainSocket,buffer);
	getCommand(buffer, command, command_argument);
	if( strcmp(command,"PONG") ==0 )
		writeToSocket(mainSocket,command_argument);
	else
		error("This no server SocketChat");
	bzero(buffer,SIZEBUFFER);
	if ( pthread_create( &recv, 0, whilerecv, mainSocket ) )
			error("ERROR: create thread"); 
	while(1)
	{
	printf("Write you message: ");
	bzero(buffer,SIZEBUFFER);
	fgets(buffer,SIZEBUFFER-1,stdin);
	writeToSocket(mainSocket,buffer);
	printf("%s\n",buffer);
	}
	close(mainSocket);
}
