#include <stdio.h>
#include <stdlib.h>
#include <netinet/in.h>
#include <signal.h>
#include <time.h>
#include <string.h>
#include <pthread.h>
#include "../main.h"
#include "main.h"
void main(int collArg,char**argv)
{
struct timeval tv;
tv.tv_sec = 45;
tv.tv_usec = 0; 
pthread_t ServerThread;
static struct sockaddr_in serv_addr;
if(collArg < 3) error("programm port colluser");
int mainSocket = initServer( atoi(argv[1]) , &serv_addr , atoi(argv[2]) );
setsockopt(mainSocket, SOL_SOCKET, SO_RCVTIMEO, (const char*)&tv,sizeof(struct timeval));
if ( pthread_create( &ServerThread, NULL, &startServer, mainSocket ) )
        error("ERROR: create thread");
if ( pthread_join( ServerThread, NULL ) )
        error("ERROR: thread join");
}
