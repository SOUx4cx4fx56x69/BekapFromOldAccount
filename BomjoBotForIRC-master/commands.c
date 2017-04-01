#include<string.h>
#include<signal.h>
#include<stdio.h>
#include<unistd.h>
#include<pthread.h>
#define MAXPS 5012
#include "AntiQubick.h"
unsigned long long FORFUCKOFF=0;
unsigned long long NEEDFORFUCKOFF;
unsigned int TIMETROLL;//Timer for troll function
unsigned int TIMEDW;// timer for disable disable bot(turn troll)
void
_disableForWhile(int socket);
void deleteNewLine(char*array)
{
while(*array)
{
if(*array =='\n') *array='\0';
*array++;
}
}
void getProccess(int socket)//SHITCODE
{
char ps[MAXPS];
char tmp[MAXPS*2];
system("ps aux > /tmp/bot.txt");
FILE*tmpFile=fopen("/tmp/bot.txt","r");
//dup2(0,tmp);
char ch;
unsigned long long count=0;
while((ch=fgetc(tmpFile)) !=EOF)
{//SHITCODE
ps[count]=ch;
count++;
if(count > MAXPS) break;
if(ch=='\n')
{
sleep(5);
deleteNewLine(ps);
sprintf(tmp,"PRIVMSG %s %s",OWNER_NICK,ps);
//printf("%s\n",tmp);
writeTo(socket, tmp);
count = 0;
bzero(ps,MAXPS);
}//IF
}//WHILE
close(tmpFile);
}//END

void getUser(char*buffer,char*user)
{
while(*buffer!=' ')
 *user++=*buffer++;
}

//shit code 80 lvl
void getMessageAndChannel(char*buffer,char*message,char*channel)
{
if(strstr(buffer, "PRIVMSG") != NULL )
{
while(*buffer !='#')*buffer++;
while(*buffer!=' ' && *buffer)
 *channel++=*buffer++;
while(*buffer!=':' && *buffer)*buffer++;
while(*buffer!='\n' && *buffer)
*message++=*buffer++;
}///
}
void 
_Message(char*buffer,char*dest)
{
while(*buffer && *buffer!=' ')
 *buffer++;
while(*buffer)
 *dest++=*buffer++;
}
void
_Channel(char*src,char*dest)
{//shitcode
while(*src !='#' && *src)*src++;
while(*src!=' ' && *src)
 *dest++=*src++;
 *dest++='\0';
}
void
_DeleteChannelFromMsg(char *dest,char*src)
{
/*
printf("->->-> %s\n",src);// <-for debug
in simple normalMsg have channel!
and space in start
*/
while(*src && *src!='#') *src++;
while(*src && *src!=' ') *src++;
while(*src)*dest++=*src++;
}
/*
void
answer(char * channel, char * c, char * s) //channel command string
{
printf("Owner write in channel %s  this command %s with atribute %s\n",channel,c,s);
}
THIS DEBUG FUNCTION
*/
long long 
ToMeasures(long long number, measures what)
{
switch(what)
{
case qubinoid:
number=number*number*number;
break;
case square:
number=number*number*number*number;
break;
case penta:
number=number*number*number*number*number;
break;
default:
break;
}
return number;
}
long long _pow(long long a,long long b)
{
int tmp=a;
for(int i=b;i>1;i--)
 tmp=tmp*a;
return tmp;
}
int 
BotFunction(char * msg, char*channel,int socket)
{
///
pthread_t _forCommands;
///
if(strstr(msg, "FUCKOFF") != NULL )
  if(pthread_create(&_forCommands,NULL,&_disableForWhile,socket) ==-1)error("No can create thread:(");
///
if(strstr(msg, "INQUBINOID") != NULL 
|| strstr(msg, "INSQUARE") != NULL 
||  strstr(msg, "INPENTA") != NULL 
||  strstr(msg, "*") != NULL 
||  strstr(msg, "/") != NULL 
||  strstr(msg, "+") != NULL 
||  strstr(msg, "-") != NULL
||  strstr(msg, "%") != NULL 
||  strstr(msg, "^") != NULL 
&&  !strstr(msg,"HTTP")
)
{
unsigned long long a,b = 0;
unsigned long long answer=0;
char c;
char tmp[SIZEBUFFER];
char normalMsg[SIZEBUFFER];
///...
bzero(tmp,SIZEBUFFER);
bzero(normalMsg,SIZEBUFFER);
///...
_Message(msg,normalMsg);
if(atoi(normalMsg) > MAXPOWN) return -1;
else if(strstr(msg, "INQUBINOID") != NULL)
 answer = ToMeasures(atoi(normalMsg),qubinoid);
else if(strstr(msg, "INSQUARE") != NULL)
 answer = ToMeasures(atoi(normalMsg),square);
else if(strstr(msg, "INPENTA") != NULL)
 answer = ToMeasures(atoi(normalMsg),penta);
/*
SHIT CODE one love
..................
*/
else if(strstr(msg,"+") != NULL)
{
sscanf(msg,":%d+%d",&a,&b);
if(a > MAXNUM || b > MAXNUM || a <=0 || b<=0 ) return -1;
 answer=a+b;
}

else if(strstr(msg,"-") != NULL)
{
sscanf(msg,":%d-%d",&a,&b);
if(a > MAXNUM || b > MAXNUM || a <=0 || b<=0 ) return -1;
 answer=a-b;
}

else if(strstr(msg,"/") != NULL)
{
sscanf(msg,":%d/%d",&a,&b);
if(a > MAXNUM || b > MAXNUM || a <=0 || b<=0 ) return -1;
 answer=a/b;
}

else if(strstr(msg,"*") != NULL)
{
sscanf(msg,":%d*%d",&a,&b);
if(a > MAXNUM || b > MAXNUM || a <=0 || b<=0 ) return -1;
 answer=a*b;
}

else if(strstr(msg,"^") != NULL)
{
sscanf(msg,":%d^%d",&a,&b);
if(a > MAXPOWN || b > MAXPOWN || a <=0 || b<=0 ) return -1;
 answer=_pow(a,b);
}

else if(strstr(msg,"%") != NULL)
{
sscanf(msg,":%d%%%d",&a,&b);
if(a > MAXNUM || b > MAXNUM || a <=0 || b<=0 ) return -1;
 answer=a%b;
}
/*
^^^^^^^^^^^^^^^^^^
SHIT CODE one love
*/
if(answer != 0)
 {
  sprintf(tmp,"PRIVMSG %s %s %d",channel,"I know the answer",answer);  
  writeTo(socket, tmp);
 }
}//MATH
///
}

void
_disableForWhile(int socket)
{
char tmp[SIZEBUFFER];
FORFUCKOFF++;
if(FORFUCKOFF < NEEDFORFUCKOFF)
 sprintf(tmp,"PRIVMSG %s %s %d",DEFAULT_CHANNEL,"For fuck off you have off points",FORFUCKOFF);
else
 sprintf(tmp,"PRIVMSG %s OK",DEFAULT_CHANNEL);
writeTo(socket, tmp);
}

void 
_command(char * msg, char*channel,int socket)
{
pthread_t _forCommands;
//shit code
if(strstr(msg, "SAYTHIS") != NULL )
{
char tmp[SIZEBUFFER];
char normalMsg[SIZEBUFFER];
char normalChannel[SIZEPING*2];
///...
bzero(tmp,SIZEBUFFER);
bzero(normalMsg,SIZEBUFFER);
bzero(normalChannel,SIZEPING*2);
///...
_Message(msg,normalMsg);
if(strstr(normalMsg, "#") != NULL )
{
 _Channel(normalMsg,normalChannel);
 _DeleteChannelFromMsg(tmp,normalMsg);
 ///
 bzero(normalMsg,SIZEBUFFER);//delete
 ///
 strcpy (normalMsg, tmp);
 printf("CHANNEL (%s)\n",normalChannel);
 sprintf(tmp,"PRIVMSG %s %s",normalChannel,normalMsg);
}
else //if not channel
 sprintf(tmp,"PRIVMSG %s %s",channel,normalMsg);
writeTo(socket, tmp);
}//SAYTHIS

if(strstr(msg, "JOINTO") != NULL )
{
char tmp[SIZEBUFFER];
char normalMsg[SIZEBUFFER];
char normalChannel[SIZEPING*2];
///...
bzero(tmp,SIZEBUFFER);
bzero(normalMsg,SIZEBUFFER);
bzero(normalChannel,SIZEPING*2);
///...
_Message(msg,normalMsg);
if(strstr(normalMsg, "#") != NULL )
{
 _Channel(normalMsg,normalChannel);
 sprintf(tmp,"JOIN %s %s",normalChannel,normalMsg);
 printf("%s\n",tmp);
 writeTo(socket, tmp);
}//IF NOT CHANNEL
else
{
 sprintf(tmp,"PRIVMSG %s WHERE THIS CHANNEL?!",channel);
 writeTo(socket, tmp);
}//ELSE
}//END if(strstr(msg, "JOINTO") != NULL )
///

if(strstr(msg, "NICKSET") != NULL ) 
{
char tmp[SIZEBUFFER];
char normalMsg[SIZEBUFFER];
char nick[30];
///...
bzero(nick,30);
bzero(tmp,SIZEBUFFER);
bzero(normalMsg,SIZEBUFFER);
///...
_Message(msg,normalMsg);
 sprintf(tmp,"NICK %s",normalMsg);
 writeTo(socket, tmp);
}

if(strstr(msg, "HTTP") != NULL ) 
{
char tmp[SIZEBUFFER];
char normalMsg[SIZEBUFFER];
//...
char url[SIZEBUFFER];
char cookie[SIZEBUFFER];
char postfield[SIZEBUFFER];
///...
bzero(tmp,SIZEBUFFER);
bzero(normalMsg,SIZEBUFFER);
bzero(url,SIZEBUFFER);
bzero(cookie,SIZEBUFFER);
bzero(postfield,SIZEBUFFER);
///...
_Message(msg,normalMsg);
sscanf(normalMsg,"%s %s %s",url,cookie,postfield);
printf("URL=%s COOKIE=%s POSTFIELD=%s\n",url,cookie,postfield);
SendHTTPPOST(url,cookie,postfield,socket,channel);
}

if(strstr(msg, "WRITETOSERVER") != NULL ) 
{
char tmp[SIZEBUFFER];
char normalMsg[SIZEBUFFER];
///...
bzero(tmp,SIZEBUFFER);
bzero(normalMsg,SIZEBUFFER);
///...
_Message(msg,normalMsg);
 sprintf(tmp,"%s",normalMsg);
 writeTo(socket, tmp);
}
///

if(strstr(msg, "SETTOPIC") != NULL )
{
char tmp[SIZEBUFFER];
char normalMsg[SIZEBUFFER];
char normalChannel[SIZEPING*2];
///...
bzero(tmp,SIZEBUFFER);
bzero(normalMsg,SIZEBUFFER);
bzero(normalChannel,SIZEPING*2);
///...
_Message(msg,normalMsg);
if(strstr(normalMsg, "#") != NULL )
{
 _Channel(normalMsg,normalChannel);
 _DeleteChannelFromMsg(tmp,normalMsg);
 ///
 bzero(normalMsg,SIZEBUFFER/2);//delete
 ///
 strcpy (normalMsg, tmp);
 sprintf(tmp,"TOPIC %s %s",normalChannel,normalMsg);
}
else //if not channel
 sprintf(tmp,"TOPIC %s %s",channel,normalMsg);
writeTo(socket, tmp);
}//SETTOPIC
///

if(strstr(msg, "LEAVE") != NULL )
{
char tmp[SIZEBUFFER];
char normalMsg[SIZEBUFFER];
char normalChannel[SIZEPING*2];
///...
bzero(tmp,SIZEBUFFER);
bzero(normalMsg,SIZEBUFFER);
bzero(normalChannel,SIZEPING*2);
///...
_Message(msg,normalMsg);
if(strstr(normalMsg, "#") != NULL )
{
 _Channel(normalMsg,normalChannel);
 sprintf(tmp,"PART %s %s",normalChannel,normalMsg);
 printf("%s\n",tmp);
 writeTo(socket, tmp);
}//IF NOT CHANNEL
else
{
 sprintf(tmp,"PRIVMSG %s if you want that i am die, write QUIT, or if you want that i am quit from channel write this channel",channel);
 writeTo(socket, tmp);
}//ELSE
}//END if(strstr(msg, "JOINTO") != NULL )
///
if(strstr(msg, "HELP") != NULL )
{
 char tmp[SIZEBUFFER];
 sprintf(tmp,"PRIVMSG %s SAYTHIS (#channel optional) message;LEAVE #channel;JOINTO #channel;SETTOPIC topic;PSAUX;QUIT;WRITETOSERVER message;NICKSET nick;HTTP url cookie postfield;It seems everything, the boss",channel);
 writeTo(socket, tmp);
}

///
if(strstr(msg, "PSAUX") != NULL ) 
 if(pthread_create(&_forCommands,NULL,&getProccess,socket) ==-1)error("No can create thread:(");
if(strstr(msg, "QUIT") != NULL )
 QUIT(socket);
}

void
commands(int socket,char*buffer)
{
char user[SMALLBUFFER];
char channel[SMALLBUFFER];
char message[SIZEBUFFER];
bzero(user,SMALLBUFFER);
bzero(channel,SMALLBUFFER);
bzero(message,SIZEBUFFER);
getUser(buffer,user);
getMessageAndChannel(buffer,message,channel);
printf("HUMAN WITH MONIKER %s WRITE IN CHANNEL %s -> %s\n",user,channel,message );
if(strcmp(user,OWNER) == 0)
 _command(message,channel,socket);
if(strlen(user) >= 1 && strlen(message) >=4)
 BotFunction(message,channel,socket);
}

