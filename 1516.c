#include <stdio.h>
#include <stdlib.h>
int main (){
printf ("Content-Type:text/html \n\n");
printf ("<!DOCTYPE html><html><head><meta charset='UTF-8'><title></title></head>\n");
printf ("<body><div style='color:green'><pre>");
fflush (stdout);
system("ls -l");

printf ("</pre></div></body></html>");
return 0;}

#include <stdio.h>
#include <stdlib.h>