#include <stdio.h>
#include <stdlib.h>
#include <pthread.h>
#include <string.h>
#include "AntiQubick.h"
char OWNER[256];// = ":WEREWOLF!WEREWOLF@lfshvsjjph2aqemhdrvaccgxc5ss54kodbn3vjftxosqje6ak6kq.b32.i2p";
char OWNER_NICK[256];// = "WEREWOLF";
char DEFAULT_CHANNEL[256];// = "#ru";
unsigned long long MAXPOWN;
unsigned long long MAXNUM;
int main(int argcount, char *arguments[])
{
   if(argcount < 6)
    error("./programm host port nick UserName RealName");
   InitConfig();
   //printf("\n%s %s %s\n",OWNER,OWNER_NICK,DEFAULT_CHANNEL); //debug
////////////////////////////////////////////////////////////
    pthread_t ForBot;
    pthread_t ForTroll;
    pthread_t ForPing;
    pthread_t ForAntiDisable;//shit name
    char buffer[SIZEBUFFER];
    char ping[SIZEPING];
////////////////////////////////////////////////////////////
    int mainsocket=InitClient(arguments[1],atoi(arguments[2]));
    sprintf(buffer,"NICK %s",arguments[3]);
    writeTo(mainsocket, buffer);
    while(strstr(buffer,"PING") == NULL)
    {
    readFrom(mainsocket,buffer);
    }
    grepPing(buffer,ping);
    ///
    sprintf(buffer,"PONG %s",ping);
    writeTo(mainsocket,buffer);
    ///
    sprintf(buffer,"PING %s",ping);//SPOOF
    writeTo(mainsocket,buffer);
    ///
    sprintf(buffer,"USER %s 8 * : %s",arguments[4],arguments[5]);
    writeTo(mainsocket, buffer);
//////////////////////////////////////////////////////////////
    readFrom(mainsocket,buffer);
    printf("%s\n",buffer);
    sprintf(buffer,"JOIN %s",DEFAULT_CHANNEL);
    writeTo(mainsocket,buffer);
    printf("INFO: Join to channel\n");
    readFrom(mainsocket,buffer);
    printf("%s\n",buffer);
    bzero(buffer,SIZEBUFFER);
    bzero(ping,SIZEPING);
    if(pthread_create(&ForBot,NULL,&_botRead,mainsocket) ==-1)error("No can create thread:(");
    if(pthread_create(&ForTroll,NULL,&_botTroll,mainsocket) ==-1)error("No can create thread:(");
    if(pthread_create(&ForPing,NULL,&_botPing,mainsocket) ==-1)error("No can create thread:(");
    if(pthread_create(&ForAntiDisable,NULL,&_deleteDisableForWhile,NULL) ==-1)error("No can create thread:(");
    pthread_join(ForBot,NULL);
    pthread_join(ForTroll,NULL);
    pthread_join(ForPing,NULL);
    stopClient(&mainsocket);
    return 0;
}

