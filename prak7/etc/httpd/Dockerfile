FROM php:apache
RUN a2enmod authn_dbd && apt-get update && apt-get install -y libaprutil1-dbd-mysql libpng-dev && apt-get update && docker-php-ext-install pdo pdo_mysql mysqli gd
RUN pecl install -o -f redis
RUN rm -rf /tmp/pear
RUN docker-php-ext-enable redis