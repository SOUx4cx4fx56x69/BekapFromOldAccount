#include <stdio.h>
#include <stdlib.h>
#include <signal.h>
#include <string.h>
#define SIZE 256
int main(int argCount, char**argList)
{
if(argCount < 3) _exit("EXAMPLE: PROGRAM FILE \"TEXT\"");
char buff[SIZE];
memset(buff,0,SIZE); // set all to zero in array
FILE * dst = fopen(argList[1],"r+b");
if(!dst)
{
printf("error: NO SUCH FILE -> %s\n",argList[1]);
exit(1);
}
printf("\n..successfully..\n");

read_file(dst);

printf("\n.WRITE.: %s\n",argList[2]);

printf("\t TEXT: %s \t SIZE_TEXT: %i\n\n\n",argList[2], strlen(argList[2]) );

set_his(dst,buff,argList[2]);

printf("Succefully\n");

fclose(dst);
}
