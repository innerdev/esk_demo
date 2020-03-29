Installation
------------
That should be enough:
```shell script
$ docker-compose build
$ docker-compose up
$ docker-compose run artisan migrate
```

Usage
---
Open the following URLs in your web-browser:
```
   http://localhost:8080/api/v1/tables
   http://localhost:8080//api/v1/galleries
```
Dashboard:
```
   http://localhost:8080/admin
```
Login: admin  
Password: password

Pay attention that root page (http://localhost:8080/) is empty.

Utils
-----
Also you can use ```adminer``` to access the database:
```shell script
http://localhost:8081/
```
______

Misc
----
Docker installation based on https://github.com/aschmelyun/docker-compose-laravel
Give him a star on github.

Task description
------
<details>
    <summary>Click me to expand this section</summary>

Тестовое задание Блог
 
Две категории: Новости, Галлерея

Здесь мы можем сделать запросы к 2 урлам и получить json:
 
Для новостей url отдаёт контент json вида:
```json
[{
   "id": <num>,
   "slug": <string>,
   "preview": <img-src>,
   "main_image": <img-src>,
   "created_at": <date>,
   "header": <string>,
   "content": <html>,
}]
```

По этому урл также доступны фильтры по дате, заголовку.
 
Для галлереи url отдаёт контент json вида:
```
[{
  "guid": <uuid>,
  "tags": [{"id": <num>, "name": "tag1"}, {"id": <num>, "name": "tag2"}],
  "img": <img-src>,
  "description": <text>
}]
```
По этому урл также доступен фильтр по тэгам.


Здесь нет никакого REST, должна быть визуальная админка с входом:

В административной части предусмотрен CRUD для обеих страниц().
Редактируемые поля:
 - новостей: контент, заголовок, изображение (может быть использован элемент галлереи), текст юрл;
 - галлереи: описание, картинка, тэги.
 
Для административной части ненужны(!) пользователи, вход только по паролю md5
 
Обязательно использовать:
PostgreSQL 9.6
PHP7
В качестве framework допустим любой из известных
</details>