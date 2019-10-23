#include <time.h>
#include <stdio.h>
#include <stdlib.h>

int main(void) {
    time_t ti = time(NULL);
    struct tm tm = *localtime(&ti);

    int num;
    time_t t;
    srand(time(&t));

    num = rand() % 10;

    //Send headers
    printf("Content-type: text/html\n");
    printf("Pragma: no-cache\n");
    printf("\n");

    //Send html document
    printf("<!DOCTYPE html>");
    printf("<html-lang='ru'>");
    printf("<head>");
    printf("<title> Случайное число и дата </title>");
    printf("<style>");
    printf("h1, h2, p { text-align: center; }");
    printf("footer { text-align: center;");
    printf("position: absolute;");
    printf("bottom: 0;");
    printf("width: 100%%;");
    printf("height: 2.5rem;");
    printf("</style>");
    printf("<meta charset='utf-8'>");
    printf("</head>");
    printf("<body>");
    printf("<h1> Привет Юзер </h1>");
    printf("<h2> Эта программа написана на C, и запущена как cgi сценарий </h2>");
    printf("<p>Сегодня: %d-%d-%d %d:%d:%d </p>", tm.tm_year + 1900, tm.tm_mon + 1,tm.tm_mday, tm.tm_hour, tm.tm_min, tm.tm_sec);
    printf("<p>Случайное число: %d </p>", num);
    printf("<footer>Все права защищены &#169;alexverkhola 2019</footer>");
    printf("</body>");
    printf("</html>");

}