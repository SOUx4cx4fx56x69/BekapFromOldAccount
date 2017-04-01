#include "main.h"
#include"http.h"
#include"socket.h"
#include <unistd.h>
#include <string.h>
#include <sys/types.h>
#ifdef WIN32
   #include <winsock.h>
   #include <winsock2.h>
   #include <ws2tcpip.h>
   #define MSG_NOSIGNAL 0
#else
 #include <sys/socket.h>
 #include <netinet/in.h>
 #include <netdb.h>
#endif

//int ** Clients; 

/*
void
CheckConnections()
{
//code code code in future
// deleted
}//void
*/
void
UserFewSecond(void)
{
sleep(5);
collUserFewSecond=0;
}
int 
DialogWithClient(void * arguments)
{
/*
if(CONNECTEDUSERS >= MAXLISTEN)
{
 writeTo(*socket,"SERVER BUSY!");
 close(*socket);
 return -1;
}
*/
struct Arguments *args = arguments;
char buffer[SIZEBUFFER];
readFrom(args->socket,buffer);
HTTPQuery(args->socket,buffer,args->id);
close(args->socket);
bzero(buffer,SIZEBUFFER);
return 1;
}



int 
InitServer(int id)
{
    #ifdef WIN32
     WSADATA wsaData;
     DWORD dwError;
    // Initialize Winsock
    if ( (WSAStartup(MAKEWORD(2, 2), &wsaData) != 0) )
        error("WSAStartup failed\n");
    #endif
     int sockfd;
    struct sockaddr_in serv_addr;
     if ( (sockfd = socket(AF_INET, SOCK_STREAM, 0))  < 0)
        error("ERROR opening socket");
     bzero((char *) &serv_addr, sizeof(serv_addr));
     serv_addr.sin_family = AF_INET;
     serv_addr.sin_addr.s_addr = inet_addr(SERVERS[id].HOST);
     serv_addr.sin_port = htons(SERVERS[id].PORT);
     if (bind(sockfd, (struct sockaddr *) &serv_addr,
              sizeof(serv_addr)) < 0) 
              error("ERROR on binding");
     listen( sockfd, SERVERS[id].MAXLISTEN );
//....
     struct timeval timeout;
     timeout.tv_sec = SERVERS[id].TIMEOUT;
     timeout.tv_usec = SERVERS[id].TIMEOUT_MS;
//...
///
    if (setsockopt (sockfd, SOL_SOCKET, SO_RCVTIMEO, (char *)&timeout,
                sizeof(timeout)) < 0)
        error("setsockopt failed timeout");
    if (setsockopt (sockfd, SOL_SOCKET, SO_SNDTIMEO, (char *)&timeout,
                sizeof(timeout)) < 0)
        error("setsockopt failed timeout");
    if (setsockopt(sockfd, SOL_SOCKET, SO_REUSEADDR, &(int){ 1 }, sizeof(int)) < 0)
     error("setsockopt(SO_REUSEADDR) failed");
///
   //int _Clients[MAXLISTEN];
   //Clients = &_Clients; 
   return sockfd;
}

void 
writeTo(int socket,char*msg)
{
if(send(socket,msg,strlen(msg),MSG_NOSIGNAL) == -1) error_WithOutExit("No can write to socket");
}

void readFrom(int socket,char*buffer)
{
memset(buffer,0,SIZEBUFFER);
#ifdef WIN32
if((recv(socket, buffer, SIZEBUFFER-1, 0)) <=0 )error_WithOutExit("No can read from socket");
#else
if(read(socket,buffer,SIZEBUFFER-1) == -1)error_WithOutExit("No can read from socket");
#endif
}

void 
stopClient(int * socket)
{
close(*socket);
}

void *
AcceptClient(void * arguments)
{
//
collUserFewSecond++;
struct Arguments *args = arguments;

//printf("ID FROM FUNCTION:%d\nSOCKET FROM FUNCTION:%d\n",(*args).id,args->socket);
pthread_t client;
struct sockaddr_in cli_addr;
int clientlen,newsockfd;
while(1)
{
clientlen = sizeof(cli_addr);
////
newsockfd = accept(args->socket,
				  (struct sockaddr *) &cli_addr, 
								 &clientlen);
////
if (newsockfd < 0) 
  close(newsockfd);
else
{
printf("Opened new connection with %d.%d.%d.%d\n",
  (int)(cli_addr.sin_addr.s_addr&0xFF),
  (int)((cli_addr.sin_addr.s_addr&0xFF00)>>8),
  (int)((cli_addr.sin_addr.s_addr&0xFF0000)>>16),
  (int)((cli_addr.sin_addr.s_addr&0xFF000000)>>24));
/////
//Clients[CONNECTEDUSERS++] = &newsockfd;
struct Arguments * newargum = malloc(sizeof (struct Arguments));
newargum->id=args->id;
newargum->socket=newsockfd;
pthread_create(&client,NULL,DialogWithClient, newargum );
pthread_join(client,NULL);
close(newsockfd);
free(newargum);
}//ELSE
}
free(arguments);
}

