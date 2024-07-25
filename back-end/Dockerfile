FROM php:8.1-apache

RUN a2enmod rewrite

COPY apache-config/laravel.conf /etc/apache2/sites-enabled/

RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libzip-dev

RUN apt install nodejs -y
RUN apt install npm -y

RUN docker-php-ext-install pdo pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN chown -R www-data:www-data /var/www

WORKDIR /var/www/html

EXPOSE 80
