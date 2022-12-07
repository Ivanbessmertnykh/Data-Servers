FROM php:apache
RUN docker-php-ext-install pdo pdo_mysql mysqli && a2enmod authn_dbd && apt-get update && apt-get install -y libaprutil1-dbd-mysql
RUN pecl install -o -f redis
RUN rm -rf /tmp/pear
RUN docker-php-ext-enable redis