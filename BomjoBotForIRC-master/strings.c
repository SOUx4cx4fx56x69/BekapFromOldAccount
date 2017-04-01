#include <stdarg.h>
#include <stdio.h>
int
_divideWords(char src[],char*dest,...)
{
va_list list;
va_start (list, NULL);
char * ptr;
while(*src)
{
 if(*src==' '){*src++;*dest++='\0';break;}
   *dest++=*src++;
}
while(ptr)
{
ptr = va_arg(list,char*);
while(*src && ptr != NULL)
 {
 if(*src==' '){*src++;*ptr++='\0';break;}
   *ptr++=*src++;
 }
}
va_end(list);
}
