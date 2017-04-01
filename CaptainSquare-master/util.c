typedef FILE;
extern FILE *stderr;
extern FILE *stdout;
void fprintf(FILE std,char*msg,...);
void endwin();
void error(char*msg)
{
endwin();
fflush(stdout);
fflush(stderr);
fprintf(stderr,msg);
exit(1);
}
