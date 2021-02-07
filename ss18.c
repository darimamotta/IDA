#include <stdio.h>
#include <stdlib.h>
int main ()
{
printf("Content-Type:text/html\n\n");
printf("<!DOCTYPE html>\n");
printf("<html><head>\n");
printf("<meta charset='UTF-8'><title>ss18cgi.c Motta</title>\n");
printf("</head><body>\n");
printf("<p>Date and Time \n");


fflush(stdout);
system("date");


printf("</p></body></html>\n");
return 0;}
