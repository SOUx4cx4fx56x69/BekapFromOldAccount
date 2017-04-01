#include <stdio.h>
#include <stdlib.h>
#include <ncurses.h>
#include "captain.h"
int main()
{
char key;
fflush(stdout);
fflush(stderr);
short * life = LIFE;
auto  * bullets = BULLETS;
initscr();
_cycle_("\t\t\t\tWelcome\n You captain square. You have 3 life and 30 bullets you need kill no square!\n\t\t\t enter(a) for next",'a');
_initGame_();
//printf(stdscr,"test");
refresh();
endwin();
}
