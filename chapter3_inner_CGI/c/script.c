#include <time.h>
#include <stdio.h>
#include <stdlib.h>

int main(void) {
    int num;
    time_t t;
    srand(time(&t));

    num = rand() % 10;

    //Вывод заголовков ответа
    printf("Content-type: text/html\n");

    //Запрет кеширования браузером
    printf("Pragma: no-cache\n");

    //Пустой заголовок
    printf("\n");

    //Вывод текста документа в браузер
    printf("<!DOCTYPE html>");
    printf("<html lang='ru'>");
    printf("<head>");
    printf("<title>Случайное число</title>");
    printf("<meta charset='utf-8'");
    printf("</head>");
    printf("<body>");
    printf("<h1> Привет юзер </h1>");
    printf("<p> Случайное число сгененрированое скриптом : </p>");
    printf("<h1><b> %d </b></h1>");
    printf("<p id='footer'><small>Все права защищены</small></p>");
    printf("</body>");
    printf("</html>");

}