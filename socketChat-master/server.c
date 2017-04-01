#include <signal.h>
#include <unistd.h>
#include <sys/socket.h>
#include <sys/types.h>
#include <netinet/in.h>
#include <netdb.h> 
#include "main.h"
#include "server.h"
typedef struct User
{
char * nick;
unsigned int IPv4_adress;
int socket;
}User;
unsigned int long collUsers;
unsigned int long max_collUsers;
User * ArrayWithUsers; //!
int initServer(int portno,
			  struct sockaddr_in *serv,int ListUser)
{
struct sockaddr_in serv_addr;
int socks = socket(AF_INET,SOCK_STREAM,0);
if(socks == -1) error("Sorry, i am not can create socket");
     serv_addr.sin_family = AF_INET;
     serv_addr.sin_addr.s_addr = INADDR_ANY;
     serv_addr.sin_port = htons(portno);
     if (bind(socks, (struct sockaddr *) &serv_addr,
              sizeof(serv_addr)) < 0) 
              error("ERROR on binding");
    	 listen(socks,ListUser);
*serv=serv_addr;
max_collUsers=ListUser;
User Array[ListUser];
ArrayWithUsers=&Array;//!
return socks;
}
int acceptClient(int socket)
{//
struct sockaddr_in cli_addr;
size_t clilen = sizeof(cli_addr);
int socket_user = accept(socket, 
                 (struct sockaddr *) &cli_addr, 
                 &clilen);
if (socket_user == -1) return -1;
printf("%d.%d.%d.%d -> connect to server",
  (int)(cli_addr.sin_addr.s_addr&0xFF),
  (int)((cli_addr.sin_addr.s_addr&0xFF00)>>8),
  (int)((cli_addr.sin_addr.s_addr&0xFF0000)>>16),
  (int)((cli_addr.sin_addr.s_addr&0xFF000000)>>24));
//(int)cli_addr.sin_addr.s_addr;
printf("\nI am have users:%i\nMAXUSERS:%i\n",collUsers,max_collUsers);
/*
for(unsigned int long i=0;i <= (unsigned int long)max_collUsers;i++ )
{
if(ArrayWithUsers[i].IPv4_adress==(int)cli_addr.sin_addr.s_addr) 
{
		//removeDieUser(i);
		return -1;
}
}
 * */
collUsers++;
return socket_user;
}//NEED FIX
int getIDFromSocket(int socket)
{
	for(int i=0;i <= collUsers;i++)
	{
	if(ArrayWithUsers[i].socket == socket)
	{
			printf("%i %i\n",socket,ArrayWithUsers[i].socket);
			return i;
	}
	}
	return -1;
}
char *getNICKFromID(int id_user)
{
	return ArrayWithUsers[id_user].nick;
}
void writeToAll(int socket,char * msg,int id_user,char*nick)
{
	int dest_sock;
	char tmp[256];
	for(int i=0;i <= collUsers;i++)
	{
	if(dest_sock != -1)
	{//ERROR_NOTIFY: No can write to socket. 
	dest_sock=ArrayWithUsers[i].socket;
	sprintf(tmp ,"%s(%d): %s",nick,id_user,msg);
	writeToSocket(dest_sock,tmp);
	}
	}
}
int chatting(int socket)
{
	char buffer[SIZEBUFFER];
	char command[SIZECOMMAND];
	char arg_command[SIZECOMMANDARG];
	int id_user=getIDFromSocket(socket);
	char * nick = getNICKFromID(id_user);
	if(id_user == -1)
	{
		collUsers--;
		close(socket);
		printf("user exit\n");
		return 0;
	}
	while(readFromSocket(socket,buffer))
	{
	writeToAll(socket,buffer,id_user,nick);
	}
	//removeDieUser((unsigned int)id_user);
	collUsers--;
	close(socket);
	printf("User exit");
	return 0;
}
void removeNewLine(char*txt)
{
	while(*txt)
	{
		if(*txt=='\n')
			*txt='\0';
		*txt++;
	}
}
int serverCommand(int socket,char * command, char * argument, int clientSocket,unsigned int long * collUser)
{
		if(strcmp(command, "NICK") ==0 ) 
		{
			//code 
			//code
			printf("DEBUG: REGISTER USER\n");
		if((unsigned int long)collUsers >(unsigned int long)max_collUsers) 
		{
			 deleteUser(socket,1);
			 return -1;
		}
		removeNewLine(argument);
		if(registerUser(socket,*collUser,argument))
					return 1;
				return -1;
		}
		else 
			return -1;
		
}
void startDialogWithClient(int clientSocket)
{
	pthread_t  chating;
	printf("\nStart dialog with user\n");
		char buffer[SIZEBUFFER];
		char command[SIZECOMMAND];
		char arg_command[SIZECOMMANDARG];
		time_t tmpTime=(int)time(NULL);
		char tmp[SIZECOMMAND];
		memset(buffer,'\0',SIZEBUFFER);
		readFromSocket(clientSocket,buffer); 
		getCommand(buffer,command,arg_command);
		//printf("%s %s\n",buffer,arg_command);
		if(serverCommand(clientSocket,command,arg_command,clientSocket,&collUsers) != -1)
		{
		//printf("%s %s\n",command,arg_command);
		readFromSocket(clientSocket,buffer); 
		sprintf(buffer,"PONG %d",(int)tmpTime);
		//realize pingpong
		writeToSocket(clientSocket,buffer);
		readFromSocket(clientSocket,buffer); 
		sprintf(tmp, "%d", (int)tmpTime);
		if(strcmp(buffer, tmp) ==0)
			if ( pthread_create( &chating, 0, chatting, clientSocket ) )
				error("ERROR: create thread"); 
		//code
		//ArrayWithUsers[((unsigned int long)collUsers)].IPv4_adress=0;
		}//end
		else
			{writeToSocket(clientSocket,"No. I am drop you\n");
			close(clientSocket);}
}
void ContactWithClient(int clientSocket)
{
pthread_t ThreadForClient;
//	if (signal(SIGALRM, TimeOut) == SIG_ERR)error("ERROR: No can set signal");
	printf("\nInit dialog\n");
		char buffer[SIZEBUFFER];
		memset(buffer,'\0',SIZEBUFFER);
		readFromSocket(clientSocket,buffer); 
		if(buffer[0] == '\0') 
			deleteUser(clientSocket,2);
		else
		{
		if(strcmp(buffer, "HELLOSOCKETCHAT") ==0 ) 
	   {
         writeToSocket(clientSocket,"\t\n\tSOCKET CHAT V0.0 PROTOCOL\n\n\t \tWELCOME\n");
		 writeToSocket(clientSocket,"\t...\t...\t...\t...\t...\n");
		 writeToSocket(clientSocket,"\t...\t...\t...\t...\t...\n");
		 writeToSocket(clientSocket,"\t...\t...\t...\t...\t...\n");
		 writeToSocket(clientSocket,"\t...\t...\t...\t...\t...\n");
		 writeToSocket(clientSocket,"\t...\t...\t...\t...\t...\n");
		 pthread_create( &ThreadForClient, 0, startDialogWithClient, clientSocket );
	  }//if buffer...
	   else  //else buffer...
		close(clientSocket);
		printf("%s\n",buffer);
		}// if not timeout
}//end function
		
void startServer(int mainSocket)
{
	while(1)
	{
	pthread_t  ServerTwoThread;
	int clientSocket = acceptClient(mainSocket);
	if(clientSocket != -1) {
		if ( pthread_create( &ServerTwoThread, 0, ContactWithClient, clientSocket ) )
        error("ERROR: create thread"); 
	}
		else
			deleteUser(clientSocket,3);

	}
}
void deleteUser(int socket,int reason)
{
	switch (reason)
	{
		case 0: // maximal connection for user
			ArrayWithUsers[((unsigned int long)collUsers)].nick=0;
			ArrayWithUsers[((unsigned int long)collUsers)].IPv4_adress=1;
			writeToSocket(socket,"\tBYE, YOU HAVE CONNECTION\n");
			close(socket);
			collUsers--;
			break;
		case 1: // not slot for people
			ArrayWithUsers[((unsigned int long)collUsers)].nick=0;
			ArrayWithUsers[((unsigned int long)collUsers)].IPv4_adress=1;
			writeToSocket(socket,"\tBYE, I AM HAVE MORE PEOPLES\n");
			collUsers-=2;
			break;
		case 2: //timeout
			close(socket);// // // //
			error_withoutExit("likely timeout");
			collUsers--;
			break;
		case 3:
					close(socket);
					collUsers--;
					break;
	}
}
removeDieUser(unsigned int long i)
{
			ArrayWithUsers[i].socket=0;
			ArrayWithUsers[i].nick=0;
			ArrayWithUsers[i].IPv4_adress=1;
}
int registerUser(int socket,int id,char*nick)
{
	if(ArrayWithUsers[id].nick != NULL && ArrayWithUsers[id].socket != NULL)
	{
	for(int i=0;i < collUsers;i++)
	{
		if(ArrayWithUsers[i].nick == nick || ArrayWithUsers[i].socket ==socket)
		{
			writeToSocket(socket,"\tBYE, You are registred already(nick/socket)\n");
			return 0;
		}
	}
	printf("Register user with id %i\t socket:%i\t nick:%s\n",id,socket,nick);
	ArrayWithUsers[id].nick=nick;
	ArrayWithUsers[id].socket=socket;
	//ArrayWithUsers[((unsigned int long)collUsers)].IPv4_adress=ipv4;
	return 1;
	}
	printf("DEBUG: .");
	return 0;
}