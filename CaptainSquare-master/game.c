#include "game.h"
#include "captain.h"
#include <pthread.h>
#define true 1
int CAPITAN_X,CAPITAN_Y;
typedef enum shot 
{
SHOT_RIGHT=1,SHOT_LEFT,SHOT_UP,SHOT_BOTTOM
}shot;
_cycle_(char*text,char key)
{
char _key;
while(_key != key)
{
clear();
printw(text);
_key = getch();
refresh();
}//
}
_shot(unsigned const short SHOT)
{
switch(SHOT)
{
case SHOT_RIGHT:
 for(int i = CAPITAN_X;i<CAPITAN_X+3;i++)
{
 _square_(CAPITAN_X,CAPITAN_Y);
 mvaddch(CAPITAN_X,i+1,'.');
 refresh();
}
 break;
}

}
_field_()
{
int row;
int col;
getmaxyx(stdscr,row,col); 
for(int i=0;i<col;i++)
  mvaddch(0,i,'@');
for(int a=0;a<row;a++)
 mvaddch(a,0,'@');
for(int i=0;i<col;i++)
  mvaddch(row-1,i,'@');
for(int i=0;i<row;i++)
  mvaddch(i,col-1,'@');
//mvinch(int,int)
}
void keying(char ch,int*x,int*y,unsigned short * shot)
{
*shot=0;
switch(ch)
{
case 'd':
 *y = *y + 1;
 break;
case 'a':
 *y = *y - 1;
 break;
case 's':
 *x = *x + 1;
 break;
case 'w':
 *x = *x - 1;
 break;
case 0x20:
*shot=SHOT_RIGHT;
break;
}
}
_square_(int x,int y)
{
mvaddch(x,y,SQUARE);
}
_initGame_()
{
pthread_t thread_shotting;
char key;
void (*tst)(int,int);
tst=&mvinch;
unsigned short shot;
CAPITAN_X=CAPITAN_Y=5;
while(1)
{
//int mvaddch(int y, int x, const chtype ch);
clear();
_field_();
_square_(CAPITAN_X,CAPITAN_Y);
_shot(shot);
key = getch();
keying(key,&CAPITAN_X,&CAPITAN_Y,&shot);
}//
}
