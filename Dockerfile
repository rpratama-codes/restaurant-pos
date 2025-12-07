FROM php:7.4.33-apache
RUN docker-php-ext-install mysqli
RUN a2enmod rewrite
COPY . /var/www/html
USER www-data
EXPOSE 80