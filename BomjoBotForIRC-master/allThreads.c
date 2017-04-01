#include "AntiQubick.h"
void 
_botPing(int socket)
{
while(1)
{
sleep(300);
writeTo(socket,"PING");
}
}
void
_botRead(int socket)
{
char buffer[SIZEBUFFER];
//read
while(1)
{
 readFrom(socket,buffer);
 commands(socket,buffer);
}
}
void 
_botTroll(int socket)
{
while(1)
{
sleep(TIMETROLL);
Troll(socket);
}
}

void
_deleteDisableForWhile()
{

while(1)
 {
  sleep(TIMEDW);
  if(FORFUCKOFF !=0)
   FORFUCKOFF--;
 }
}
