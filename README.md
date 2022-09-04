
## Условия

Проект должен быть оформлен как CLI (Command-line interface). 
У него должны быть исполняемый файл для запуска, который запрашивает путь до файла, в котором
хранится строка, которую он будет обрабатывать. По переданному пути,
исполняемый файл читает строку целиком и передаёт её в вашу бибилотеку и
выводит результат в терминал.


docker run --user 1000:1000 -ti --volume $(pwd)/:/app php-composer:2.0 composer init
docker run --user 1000:1000 -ti --volume $(pwd)/:/app php-composer:3.0 composer install

#### Команда запуска
```php
php /opt/project/src/app.php app:check-parenthesis ../example/test.txt
```