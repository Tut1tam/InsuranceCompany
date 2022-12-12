FROM php:8.0-apache
WORKDIR /var/www/html/
RUN docker-php-ext-install pdo pdo_mysql && \
a2enmod authn_dbd && \
apt-get update && \
apt-get install -y libaprutil1-dbd-mysql && \
a2enmod rewrite && \
service apache2 restart