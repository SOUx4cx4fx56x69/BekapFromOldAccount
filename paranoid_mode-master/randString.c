#include <time.h>
void getRandString(char * array,int size)
{
static char * alphabet="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMOPQRSTUVWXYZ";
srand(time(NULL));
for(int i =0;i<size;i++)
{
*array=(*alphabet+(rand()%51));
*array++;
}
*array='\0';
}
char getRandChar()
{
static char * alphabet="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMOPQRSTUVWXYZ";
srand(time(NULL));
return (*alphabet+(rand()%51));
}
