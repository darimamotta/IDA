#include <stdio.h>
#include <stdlib.h>
int main (){
printf ("Content-Type:text/html \n\n");
printf ("<!DOCTYPE html><html><head><meta charset='UTF-8'><title></title></head>\n");
printf ("<body><a href='ss16.c%s'> <form action='%s'><input type='submit' value='go back'></form></a>\n",getenv ("HTTP_REFERER"), getenv ("HTTP_REFERER"));

printf ("</body></html>");
return 0;}

#include <stdio.h>
#include <stdlib.h>

