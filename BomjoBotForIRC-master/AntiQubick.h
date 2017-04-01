#define SIZEBUFFER 1024
#define SMALLBUFFER 256
#define SIZEPING 12
#ifdef WIN32
#define bzero(b,len) (memset((b), '\0', (len)), (void) 0)  
#define bcopy(b1,b2,len) (memmove((b2), (b1), (len)), (void) 0)
#endif
typedef enum bool
{
false,true
}bool;
typedef enum measures
{
qubinoid,square,penta
}measures;
void _botRead(int socket);
void _botTroll(int socket);
void _botPing(int socket);
void _deleteDisableForWhile();
char OWNER[256];// = ":WEREWOLF!WEREWOLF@lfshvsjjph2aqemhdrvaccgxc5ss54kodbn3vjftxosqje6ak6kq.b32.i2p";
char OWNER_NICK[256];// = "WEREWOLF";
char DEFAULT_CHANNEL[256];// = "#ru";
unsigned long long FORFUCKOFF;
unsigned long long NEEDFORFUCKOFF;
unsigned int TIMETROLL;//Timer for troll function
unsigned int TIMEDW;// timer for disable disable bot(turn troll)
unsigned long long MAXPOWN; // Max to power/qub/square etc
unsigned long long MAXNUM; // MAX NUM for simply math
