FROM php:8.1.1-apache

RUN apt-get update \
    &&  apt-get install -y --no-install-recommends \
        locales apt-utils git libicu-dev g++ libpng-dev libxml2-dev libzip-dev libonig-dev libxslt-dev unzip libpq-dev nodejs npm wget \
        apt-transport-https lsb-release ca-certificates

RUN echo "en_US.UTF-8 UTF-8" > /etc/locale.gen  \
    &&  echo "fr_FR.UTF-8 UTF-8" >> /etc/locale.gen \
    &&  locale-gen

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-configure \
            intl \
    &&  docker-php-ext-install mysqli \
            pdo pdo_mysql pdo_pgsql opcache intl zip calendar dom mbstring gd xsl
     

RUN docker-php-ext-install exif
RUN docker-php-ext-configure exif \
            --enable-exif    

RUN pecl install apcu && docker-php-ext-enable apcu


WORKDIR /var/www/
