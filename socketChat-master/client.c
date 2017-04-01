#include "main.h"
#include "client.h"
int initClient(int portno,
			  char*host,
				     struct sockaddr_in *serv)
{
struct sockaddr_in serv_addr;
struct hostent *server;

int socks = socket(AF_INET,SOCK_STREAM,0);
if(socks == -1) error("Sorry, i am not can create socket");
server = gethostbyname(host);

if (server == 0) error("No Such host\n");
bcopy((char *)server->h_addr, 
         (char *)&serv_addr.sin_addr.s_addr,
         server->h_length);

serv_addr.sin_family = AF_INET;
serv_addr.sin_port = htons(portno);
*serv=serv_addr;
return socks;
}
void whilerecv(int socket)
{
	while(1)
	{
	char buffer[SIZEBUFFER];
	readFromSocket(socket,buffer);
	printf("\nRecv:%s\n",buffer);
	}
}