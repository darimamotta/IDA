#include <stdio.h>
#include <stdlib.h>
int main ()
{

printf("Content-Type:text/html\n\n");
printf("<!DOCTYPE html>\n");
printf("<html><head>\n");
printf("<meta charset='UTF-8'><title>ss17cgi.c Motta</title>\n");
printf("</head><body><div style='color:green'>\n");



fflush(stdout);
system("cal");

printf("</div><a href='%s'> <input type='button' value='show month'></a>\n", getenv("QUERY_STRING"));
printf("</body></html>\n");

return 0;}

