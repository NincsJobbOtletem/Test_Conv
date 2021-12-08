FROM php:apache

RUN docker-php-ext-install pdo pdo_mysql 
#RUN apt install -y mysql