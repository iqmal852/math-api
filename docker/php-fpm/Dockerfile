FROM php:7.4-fpm

RUN apt-get update
RUN apt-get install libicu-dev -y
RUN apt-get install libmpdec-dev -y
RUN docker-php-ext-install pdo_mysql
#RUN docker-php-ext-install intl mbstring xml
#
#RUN install-php-extensions decimal

RUN apt-get update; \
    apt-get install -y php-pear; \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

RUN pecl install decimal

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

CMD composer install ; php-fpm

EXPOSE 9000
