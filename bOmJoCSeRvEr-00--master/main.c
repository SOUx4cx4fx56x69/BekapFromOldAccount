#include<stdio.h>
#include<stdlib.h>
#include <pthread.h>

#ifdef WIN32
   #include <winsock.h>
   #include <winsock2.h>
   #include <ws2tcpip.h>
   #pragma comment(lib, "ws2_32.lib")
#else
 #include <sys/socket.h>
 #include <netinet/in.h>
 #include <netdb.h>
#endif

#include "main.h"
#include "util.h"
#include "socket.h"
SERVER * SERVERS;
PATH * PATHS;
INDEX * INDEXS;
long long collUserFewSecond;
long long collServers; // for array
long long _collServers; // real
//long long CONNECTEDUSERS;
//unsigned long long DELETETIME;
int main(int argcount,char**arguments)
{
initConfig(arguments[1]);
pthread_t Server[collServers];
pthread_t UserFewSecond_;
int sockets[(int)collServers];
//pthread_t Check[collServers];
long long i;

for(i = 0;i != collServers;i++)
{
struct Arguments * argum = malloc(sizeof (struct Arguments));
sockets[i] = InitServer(i);
argum->socket=sockets[i];
argum->id=i;
printf("ID: %d\n",i);
pthread_create(&Server[i],NULL, &AcceptClient, argum );
printf("Init server\n");
}
pthread_create(&UserFewSecond_,NULL, &UserFewSecond, NULL );
while(i)
{
pthread_join(Server[i--],NULL);
}
//pthread_join(Check,NULL);

}
