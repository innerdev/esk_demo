Installation
------------

*Docker, Docker Compose and GIT are required to run this application.*

First step is to clone this repository:

```
mkdir ~/esk_demo
cd ~/esk_demo
git clone https://github.com/innerdev/esk_demo.git
```

Now we need to install all required software (PHP, PostgreSQL, nginx and so on) with Docker. Execute the following from project root directory:
```
$ docker-compose build
$ docker-compose up
```

If something goes wrong, you can clean up all images, containers and volumes by executing ```docker system prune -a``` command if needed and try again.  
**Warning! It removes EVERYTHING (stopped containers also)!**

When containers are installed and run, execute following the commands to set up the application:
```
$ docker-compose run --rm composer update
$ docker-compose run --rm artisan migrate
$ docker-compose run --rm artisan db:seed
$ docker-compose run --rm artisan storage:link (TODO: проверить под виндой)
$ docker-compose run --rm npm install
$ docker-compose run --rm npm run prod
```

Why NPM? We need it to add Bootstrap from node_modules and build SCSS into CSS. Also we need bundle JS into app.js.

Usage
---
Open the following URLs in your web-browser:
```
   http://localhost:8080/api/v1/news
    http://localhost:8080/api/v1/news?date=10.10.2020
http://localhost:8080/api/v1/news?date=10.10.2020
   http://localhost:8080/api/v1/galleries
```
What about dashboard? Open root page:
```
   http://localhost:8080/
```
And sign in with following credentials:
```
admin@admin.admin  
AdminPassword
```
Press "Login".

Notice
---------

I made auth because it's just simple with Laravel. 

Utils
-----
Also you can use ```adminer``` to access the database:
```shell script
http://localhost:8081/
```
Host: postgres  
Database name: dbname  
Database user: dbuser  
Database password: dbpassword  
Port (if needed): 5432  


______

Misc
----
Docker installation based on https://github.com/aschmelyun/docker-compose-laravel
Give him a star on github.

Task description
------
<details>
    <summary>Click me to expand this section</summary>

Тестовое задание: Блог
 
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