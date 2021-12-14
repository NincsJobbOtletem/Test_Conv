FROM php:apache

RUN docker-php-ext-install pdo pdo_mysql 
#RUN apt install -y mysql
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
