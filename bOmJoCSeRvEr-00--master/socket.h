void writeTo(int socket,char*msg);
void readFrom(int socket,char*buffer);
int 
InitServer(int portno);
void *
AcceptClient(void * arguments);
