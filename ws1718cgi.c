#include <stdio.h>
#include <stdlib.h>
int main ()
{
printf("Content-Type:text/html\n\n");
printf("<!DOCTYPE html>\n");

printf("<meta charset='UTF-8'><title>ws1718cgi.c Motta</title>\n");
printf("</head><body>\n");
printf("<p style='%s'>%s</p>", getenv("QUERY_STRING"), getenv("QUERY_STRING"));




printf("</body></html>\n");
return 0;}


