CC = g++ #for g++ (reusability)

CFLAGS = -c -Wall #For easy reuse of the flags.

#objects
OBJECTS = main.o isOdd.o isEven.o
all: prog

#Creating prog with objects
prog: $(OBJECTS)
	$(CC) $(OBJECTS) -o main

#creation of main object file
main.o: main.c
	$(CC) $(CFLAGS) main.c
	
#creation of isOdd object file
isOdd.o: isOdd.c isOdd.h
	$(CC) $(CFLAGS) isOdd.c

#creation of isEven object file
isEven.o: isEven.c isEven.h
	$(CC) $(CFLAGS) isEven.c

#cleaning up all of the object files if needed.
clean:
	rm -rf *.o
