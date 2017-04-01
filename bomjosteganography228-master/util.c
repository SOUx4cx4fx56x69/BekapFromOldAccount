#define SALT 63
#include "util.h"
void read_file(FILE *fp)
{
rewind(fp);
while(!feof(fp)) putchar(getc(fp));
}
size_t get_size_file(FILE *fp)
{
rewind(fp);
size_t size=NULL;
fseek(fp, 0, SEEK_END); // TO END
size = ftell(fp); // GET POSITION
rewind(fp); // START
return size;
}
void _exit(char * msg)
{
printf("%s\n",msg);
exit(1);
}
void set_his(FILE * fp,char * arrayBuffer,char * text)
{
if(strlen(text) > 256) _exit("Max size text = 256");
if(!fp)
{
printf("error: NO SUCH FILE");
exit(1);
}
unsigned long long position=(get_size_file(fp) / 2);
unsigned long long timePosition=NULL;
strcpy(arrayBuffer,text);
XOR(SALT,arrayBuffer);
rewind(fp);
time_t t;
srand((unsigned) time(&t));
//printf("%i\n",get_size_file(fp));
while(*arrayBuffer)
{
printf("\t%i -> \t",position);
printf("%c",*arrayBuffer);
timePosition=position+rand() % 7;
printf(" -> 0x%04x\n",timePosition);
fseek(fp, timePosition, SEEK_SET);
position += 5;
fwrite(arrayBuffer, 1, 1, fp); 
*arrayBuffer++;
}
memset(arrayBuffer,0,sizeof(arrayBuffer));
} 
