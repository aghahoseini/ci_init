FROM php:8.1-fpm-alpine

RUN mkdir -p /app
#ha moon jayi ke adrese root dadi to container nginx
COPY ./app  /app/
RUN  docker-php-ext-install pdo pdo_mysql
