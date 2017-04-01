#include<stdio.h>
#include "bomjvkapi.h"

void
removeNewLine(char*buf)
{
while(*buf)
{
if(*buf=='\n') *buf='\0';
*buf++;
}//while
}

void
toTrash(void *ptr, size_t size, size_t nmemb, void *stream)
{
 strcpy(__BUFFERANSWER__,ptr);
}

void
_getToken(char Token [])
{
unsigned int i;
while(*Token)
 __TOKEN__[i++]=*Token++;
}
