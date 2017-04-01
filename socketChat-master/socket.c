#include "main.h"
#include "client.h"
void 
writeToSocket(int s_descriptor,
				char * msg)
{
if(send(s_descriptor,msg,strlen(msg),MSG_NOSIGNAL) == -1)error_withoutExit("ERROR_NOTIFY: No can write to socket. ");
}
void
readFromSocket(int s_descriptor,char * charArray)
{
memset(charArray,0,SIZEBUFFER);
if(read(s_descriptor,charArray,SIZEBUFFER-1) == -1)error_withoutExit("ERROR_NOTIFY: No can read from socket. ");
}
