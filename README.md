## Форма отправки данных в базу данных

Это простое приложение на PHP, которое представляет собой форму для отправки данных в базу данных.
![image](https://github.com/user-attachments/assets/e9e2f73a-861d-4b5e-a462-70cd86313a40)

### Функциональность:

Форма с полями для ввода данных.
Обработка формы на сервере (PHP).
Вставка данных в базу данных.


### Установка:

1. Создайте базу данных.
3. Измените файл `config_db.php`с конфигурацией подключения к базе данных (имя хоста, имя пользователя, пароль, название базы данных).
4. Загрузите файлы проектана свой веб-сервер.

### Использование:

1. Откройте форму в браузере.
2. Заполните форму необходимыми данными.
3. Нажмите кнопку "Submit".
4. Данные будут отправлены в базу данных.

### Дополнительные сведения:

Файл index.php содержит форму.
Файл insert.php обрабатывает отправку данных.
Файл db.php содержит конфигурацию подключения к базе данных.

