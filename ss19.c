#include <stdio.h>
#include <stdlib.h>
int main ()
{
printf("Content-Type:text/html\n\n");
printf("<!DOCTYPE html>\n");
printf("<html><head>\n");
printf("<meta charset='UTF-8'><title>ss19.c Motta</title>\n");
printf("</head><body><a href='%s'>go back to %s </a>", getenv("HTTP_REFERER"), getenv("HTTP_REFERER"));


printf("</body></html>\n");
return 0;}

