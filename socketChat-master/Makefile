all: main.o client.o socket.o util.o server/main.o
	gcc -c client.c main.c socket.c util.c
	gcc -c server/main.c -o server/main.o
	gcc -c socket.c server.c util.c -lpthread
	gcc -Xlinker client.o main.o socket.o util.o -lpthread -o client
	gcc -Xlinker server/main.o server.o socket.o util.o -lpthread -o serv 
clean:
	rm *.o server/*.o
	rm client serv
