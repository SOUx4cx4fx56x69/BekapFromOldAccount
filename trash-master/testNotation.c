#include<stdio.h>
#include<stdlib.h>

int main()
{
char buffer[256];
char A[256];
char B[256];
bzero(buffer,256);

printf("A = ");

fgets(A,255,stdin);

printf("B = ");

fgets(B,255,stdin);

_ToNotation(atoi(A),atoi(B),buffer);
printf("%s\n",buffer);
int  answer = _FromNotationToDec(buffer,atoi(B));
printf("%i\n",answer);
puts("jumpto&main");
main();
}
