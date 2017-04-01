#include<stdlib.h>
#include<stdio.h>
#include<string.h>
#include <ctype.h>
#include <sys/types.h>
#include <dirent.h>
#include"main.h"
typedef enum bool
{
false,true
}bool;

void
error(char*msg)
{
printf("%s\n",msg);
exit(1);
}

void
error_WithOutExit(char*msg)
{
printf("%s\n",msg);
}
void
_setSetting(char*setting,char*set)
{
if(strstr(setting,"PORT") != NULL)
 SERVERS[_collServers].PORT=atoi(set);
if(strstr(setting,"MAXLISTEN") != NULL)
 SERVERS[_collServers].MAXLISTEN=atoi(set);
if(strstr(setting,"HOST") != NULL)
 strcpy(SERVERS[_collServers].HOST,set);
if(strstr(setting,"TIMEOUT") != NULL)
 SERVERS[_collServers].TIMEOUT=(unsigned int)atoi(set);
if(strstr(setting,"IN_MS") != NULL)
 SERVERS[_collServers].TIMEOUT_MS=(unsigned int)atoi(set);
if(strstr(setting,"DIRECTORY") != NULL)
 strcpy(PATHS[_collServers].DIRECTORY,set);
if(strstr(setting,"INDEX") != NULL)
 strcpy(INDEXS[_collServers].INDEX,set);
if(strstr(setting,":ENDSERVER:") != NULL)
 _collServers++;
}

void
initConfig(char*config)
{
printf("Init config: %s\n",config);
FILE * configFile = fopen(config,"r+");
if(config == NULL) error("No can read config");
unsigned int counter;
char setting[SIZEBUFFER];
char set[SIZEBUFFER];
char ch;
bool _thisSet=false;
char tmp[256];
while ((ch = fgetc(configFile)) != EOF)
{
tmp[counter++]=ch;
if(ch=='\n') if(strstr(tmp,":SERVER:")){collServers++;counter=0;bzero(tmp,256);}
}
counter=0;
rewind(configFile);
SERVER * _SERVERS[collServers];
PATH * _PATHS[collServers];
INDEX * _INDEXS[collServers];
INDEXS=&_INDEXS;
PATHS=&_PATHS;
SERVERS=&_SERVERS;
while ((ch = fgetc(configFile)) != EOF)
{
if(ch=='='){_thisSet=true;setting[counter++]='\0';counter=0;}
if(ch=='\n'){_thisSet=false;set[counter++]='\0';counter=0;_setSetting(setting,set);}
if(_thisSet==false && ch != '\n' && ch != '=')setting[counter++]=ch;
if(_thisSet==true && ch != '\n' && ch != '=')set[counter++]=ch;
}
close(configFile);
}
