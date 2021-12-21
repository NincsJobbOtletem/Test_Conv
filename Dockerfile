FROM php:apache

RUN a2enmod rewrite 

COPY build/000-default.conf /etc/apache2/sites-enabled/000-default.conf

RUN docker-php-ext-install pdo pdo_mysql 
RUN service apache2 restart
#RUN apt install -y mysql

RUN apt-get -y update
RUN apt-get -y install git

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
