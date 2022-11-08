FROM php:apache
RUN docker-php-ext-install pdo pdo_mysql && a2enmod authn_dbd && apt-get update && apt-get install -y libaprutil1-dbd-mysql
