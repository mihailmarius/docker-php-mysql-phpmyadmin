FROM php:7.4-apache
RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli 
RUN docker-php-ext-install pdo pdo_mysql 
RUN docker-php-ext-enable pdo_mysql
COPY ./configuration/php.ini /usr/local/etc/php/php.ini