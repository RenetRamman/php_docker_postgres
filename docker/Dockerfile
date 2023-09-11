FROM php:8.0.2-apache

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions pgsql

EXPOSE 9000


# COPY ./my-httpd.conf /usr/local/apache2/conf/httpd.conf

# COPY ./src/ /usr/local/apache2/htdocs

WORKDIR /var/www/html
