#include <sys/types.h>
#include <dirent.h>
#define SIZEBUFFER 2056
void
UserFewSecond(void);
typedef struct SERVER
{
long long MAXLISTEN;
int PORT;
char HOST[256];
unsigned int TIMEOUT;
unsigned int TIMEOUT_MS;
}SERVER;
typedef struct PATH
{
char DIRECTORY[PATH_MAX+1];
}PATH;
typedef struct INDEX
{
char INDEX[PATH_MAX+1];
}INDEX;
struct Arguments {
  int socket;
  int id;
};
SERVER * SERVERS;
PATH * PATHS;
INDEX * INDEXS;
long long collUserFewSecond;
long long collServers;
long long _collServers;
