#include<stdio.h>
#include "bomjvkapi.h"
#include <string.h>
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
toTrash(void *ptr, size_t size, size_t nmemb, void *stream,char*__BUFFERANSWER__)
{
 strcpy(__BUFFERANSWER__,ptr);
}
