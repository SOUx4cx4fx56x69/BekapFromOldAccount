all:
	gcc -fPIC -c libXOR/libXOR.c -o libXOR/libXOR.o
	gcc -shared libXOR/libXOR.o -o libXOR/libXOR.so 
	gcc -L./libXOR main.c util.c -lXOR -o BomjoSteganography
clean:
	rm BomjoSteganography
	rm libXOR/*.{o,so}
install:
	cp libXOR/libXOR.so /usr/lib/
	cp BomjoSteganography /usr/sbin/
