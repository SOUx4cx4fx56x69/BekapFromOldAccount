#include<stdio.h>
#include<stdlib.h>
#include<pthread.h>
#include <signal.h>
void useConf(FILE*config);
void final();
FILE*conf;
int main(int collArg,char**arg)
{
pthread_t daemon;
if(collArg==1)
{
char dev[256];
printf("You can use config -> ./program full/path/to/config\n");
sleep(1);
char buffer[256];
char length[3];
fullDevices();
printf("Can device you like use?: ");
fgets(buffer,256,stdin);
removeNewLine(buffer);
FILE * device=fopen(buffer,"wb");
strcpy(dev,buffer);
bzero(buffer,256);
if(device == NULL)
 return 0;
printf("write you like date(max 256)?: ");
fgets(length,4,stdin);
if(atoi(length)>256)
 error("Max size date 256");
getRandString(buffer,atoi(length));
InstallRandString(device,buffer);
fclose(device);
fwrite(dev, strlen(dev), 1, conf);
fclose(conf);
}//end
else
{
FILE*config=fopen(arg[1],"r");
if ( pthread_create( &daemon, 0, &useConf, config ) )
 error("ERROR: create thread");
alarm(600);
signal(SIGINT, final);
signal(SIGTERM, final);
signal(SIGHUP, final);
signal(SIGALRM, final); 
pthread_join(daemon, 0);
}
}
