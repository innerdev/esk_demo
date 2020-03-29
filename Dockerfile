# Laravel requires php >= 7.2
FROM php:7.2-fpm-alpine

WORKDIR /var/www/html

#Needed to build php extension for postgres
RUN apk add build-base libpng-dev python-dev py-pip postgresql-dev

RUN docker-php-ext-install pdo pdo_pgsql pgsql