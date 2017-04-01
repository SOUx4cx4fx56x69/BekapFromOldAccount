#define SIZEMETHODBUF 5012
#define SIZETOKEN 512
#define SIZEBUF 512
#define BUFANSWER 5012
char __TOKEN__[SIZETOKEN];
char __BUFFERANSWER__[BUFANSWER];

void removeNewLine(char*buf);

void
_getToken(char Token []);

void
_method(char*method,char*fields);

void
toTrash(void *ptr, 
		  size_t size, size_t nmemb,
					     void *stream);
