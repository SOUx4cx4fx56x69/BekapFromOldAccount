#include <stdio.h>
#include <pthread.h>
#define BLOCKSIZE 1024
typedef FILE;
void createCONF(char buffer,unsigned long long position,FILE*config)
{
char text[256];
sprintf(text, "[0x%04x]:%c\n", position, buffer);
fwrite(text, strlen(text), 1, config); 
}
char getch(char*buf)
{
if(*buf != '[')return 0;
while(*buf !=':')*buf++;
*buf++;
return *buf;
}
FILE * getDeviceFromConfig(char*buf)
{
FILE*dev;
if(*buf != '['){
int tmp=0;
char buffer[256];
while(*buf!=EOF)
 buffer[tmp++]=*buf++;
dev=fopen(buffer,"r");
return dev;
}
return -1;
}
void CheckDevice(FILE*dev,unsigned long long pos,char ch)
{
char tmp;
fseek(dev,pos,SEEK_SET);
tmp=getc(dev);
if(tmp != ch)
 error("This no true device\n%i \t %i\n",(int)ch,(int)tmp); 
}
void final()
{
    fprintf(stderr,"STOP\n");
    fflush(stdout);
    fflush(stderr);
    killPIDS();
    system("free && sync && echo 3 > /proc/sys/vm/drop_caches && free");
    system("shutdown -h now");
}
void killmemory()
{
pid_t pid_1;
pid_1= fork();
if(!pid_1)
{
char * ptr;
unsigned char buffers[27][BLOCKSIZE+2];
char ch;
while ( (ptr = calloc(128, 8)) != NULL) // 128*8 // set all memory to 0
for(int i=27;i>0;i--)
//for(int i1=27;i>0;i--)
//memcpy(ptr, buffers[i][i1]=getRandChar(), BLOCKSIZE);
memcpy(ptr, buffers[i],BLOCKSIZE);
final();
}
else
{
char * ptr;
unsigned char buffers[27][BLOCKSIZE+2];
char ch;
while ( (ptr = calloc(128, 8)) != NULL) // 128*8 // set all memory to 0
for(int i=27;i>0;i--)
memcpy(ptr, buffers[i],BLOCKSIZE);
}
waitpid(pid_1,NULL,NULL);
}
void _main(FILE*dev)
{
while(1)
{
char c = fgetc(dev);
if( ferror(dev) )
{
break;
}
}//
killmemory();
}
unsigned long long getposition(char*buf)
{
unsigned int count=0;
unsigned long long tmp_position=0;
if(*buf != '[')return -1;
else
{
while(*buf != 'x')*buf++;
while(*buf != ']')
{
count++;
*buf++;
}
buf-=(int)count-1;
char hex[256];
for(unsigned int i=count-1;i>0;i--)
hex[tmp_position++]=*buf++;
sscanf(hex, "%x", &tmp_position);
return tmp_position;
}
}
void useConf(FILE*config)
{
pthread_t daemon_c;
FILE*dev;
char buffer[256];
char ch;
unsigned long long position;
char tmp;
while (fgets(buffer,256,config)!= NULL) 
 dev=getDeviceFromConfig(buffer);
if(dev == -1 || dev == NULL)
 printf("this no device\n");
rewind(config);
while (fgets(buffer,256,config)!= NULL) 
{
ch = getch(buffer);
position = getposition(buffer);
if(position != -1 && ch != 0)
 CheckDevice(dev,position,ch);
}
if ( pthread_create( &daemon_c, 0, &_main, dev ) )
 error("ERROR: create thread"); 
pthread_join(daemon_c, 0);
}
