#include<stdio.h>
#include<stdlib.h>
int main(int countArg,char**arguments)
{
int mainsocket = InitServer(arguments[1],atoi(arguments[2]));
AcceptClient(mainsocket);
close(mainsocket);
}
