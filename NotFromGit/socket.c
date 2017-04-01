#include <unistd.h>
#include <string.h>
#include<stdio.h>
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
#define SIZEBUFFER 2056
#include <math.h>
void 
writeTo(int socket,char*msg)
{
if(send(socket,msg,strlen(msg),MSG_NOSIGNAL) == -1) error_WithOutExit("No can write to socket");
}
void
error_WithOutExit(char*msg)
{
fprintf(stderr,msg);
puts("");
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
int 
InitServer(char*host,int portno)
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
     serv_addr.sin_addr.s_addr = inet_addr(host);
     serv_addr.sin_port = htons(portno);
     if (bind(sockfd, (struct sockaddr *) &serv_addr,
              sizeof(serv_addr)) < 0) 
              error("ERROR on binding");
     listen( sockfd, 1 );
//....
     struct timeval timeout;
     timeout.tv_sec = 500;
     timeout.tv_usec = 5;
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
   printf("Init\n");
   return sockfd;
}

int
DialogWithClient(int socket)
{
srand ( time(NULL) );
char buffer[SIZEBUFFER];
writeTo(socket,"Welcome!\n");
readFrom(socket,buffer);
if(strstr(buffer,"crypto") == NULL)
 return close(socket);
readFrom(socket,buffer);
int g = atoi(buffer);
printf("g=%d\n",g);
writeTo(socket,"OK\n");
readFrom(socket,buffer);
int p = atoi(buffer);
printf("p=%d\n",p);
writeTo(socket,"OK\n");
int A = rand() % 10;
if(A==0) A=3;
printf("A=%d\n",A);
int MYRESULT = (int)pow(g,A) % p;
printf("RESULT=%d\n",MYRESULT);
writeTo(socket,"give you result!\n");
readFrom(socket,buffer);
int HIMRESULT = atoi(buffer);
printf("HIMRESULT=%d\n",HIMRESULT);
bzero(buffer,SIZEBUFFER);
//vsscanf(buffer,"%d",HIMRESULT);
sprintf(buffer, "%d\n", MYRESULT);
writeTo(socket,buffer);
int MYKEY=(int)pow(HIMRESULT,A)%p;
printf("my key: %d\n",MYKEY);
close(socket);
}

int
AcceptClient(int socket)
{
//
//printf("ID FROM FUNCTION:%d\nSOCKET FROM FUNCTION:%d\n",(*args).id,args->socket);
pthread_t client;
struct sockaddr_in cli_addr;
while(1)
{
int clientlen = sizeof(cli_addr);
////
int newsockfd = accept(socket,
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
pthread_create(&client,NULL,DialogWithClient, newsockfd );
pthread_join(client,NULL);
close(newsockfd);
}//ELSE
}

}
