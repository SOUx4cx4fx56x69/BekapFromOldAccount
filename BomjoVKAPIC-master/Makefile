all:
	gcc -c -fPIC http.c util.c
	gcc -shared http.o util.o -lcurl -o libbvk.so
