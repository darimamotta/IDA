#include <stdio.h>
#include <stdlib.h>
int main ()
{
printf("Content-Type:text/html\n\n");
printf("<!DOCTYPE html>\n");
printf("<html><head>\n");
printf("<meta charset='UTF-8'><title>ws1920.c Motta</title>\n");


printf("<body><a href='http://info.mi.hs-offenburg.de/~ida/cgi-bin/darima/ws1920.c?Tick%s'>Tick%s</a>", getenv("QUERY_STRING"), getenv("QUERY_STRING"));


printf("</body></html>\n");
return 0;}


