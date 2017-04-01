#include<string.h>
#define ZIZE 512
int 
_ToNotation(int a,int b,char * array)
{

if(
a == 1 || 
b == 1 ||
a == 0 ||
b == 0
) return -1;
long long i=0;
char buffer[ZIZE];
unsigned long long tmp=a;
while(tmp)
{
printf(">>%d\n",tmp);
if(b <= 10)
 buffer[i++]=(char)(tmp % b + 48);
else if(b <= 16)
  buffer[i++]=(char)(tmp % b + 55);
else
  return -2;
tmp/=b;
}//while
i--;
while(i >= 0)
 *array++ = buffer[i--];
}//

long long
_pow(long long a,long long b)
{
if(b == 0) return 0;
int tmp=a;
for(int i=b;i>1;i--)
 tmp=tmp*a;
return tmp;
}

int _FromNotationToDec(char*msg,long long notation)
{
int tmp=0;
int tmp1=0;
int count;
count=strlen(msg)-1;
if(notation <= 10)
 while(*msg)
 {
 tmp1 = _pow(notation, count--);
 if(tmp1 != 0)
  tmp += tmp1 * ((int)*msg-48);
 else
  tmp += ((int)*msg-48);
 *msg++;
}
/*
THIS NOT CORRECT
!!!!!!!!!!!!!!!!
*/
else
 while(*msg)
 {
 tmp1 = _pow(notation, count--);
 if(tmp1 != 0)
  tmp += tmp1 * ((int)*msg-55);
 else
  tmp += ((int)*msg-55);
 *msg++;
}
return tmp;
}
