#include "util.h"
#include "main.h"
void error(char * msg)
{
fprintf(stderr,"%s\n",msg);
exit(0);
}
void error_withoutExit(char *msg)
{
	fprintf(stderr,"%s\n",msg);
}
getCommand(char * buffer, char * command, char * arg)
{
	memset(command,0,SIZECOMMAND);
	memset(arg,0,SIZECOMMANDARG);
	bool ThisStringTwo; 
	while(*buffer)
	{
		if(*buffer == ' ') { ThisStringTwo =1;*buffer++;};
		if(ThisStringTwo == 1)
		{
		  *arg=*buffer;
		  *arg++;
		}
		else
		{
		*command = *buffer;
		*command++;
		}
		*buffer++;
	}
}
