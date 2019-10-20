Для того что бы запустить cgi скипт на сервере
необходимо выполнить следующие действия

1. Написать скрипт

2. Скомпилировать скрипт

3. Отправить на сервер скомпилированую программу

    3.1 SSH синтаксис:
                scp <source> <destination>

        To copy a file from B to A while logged into B:

                scp /path/to/file username@a:/path/to/destination

        To copy a file from B to A while logged into A:

                scp username@b:/path/to/file /path/to/destination

4. Включить CGI модуль:
        
        sudo a2enmod cgi

5. Перезагрузить сервер Apache:
        
        service apache2 restart