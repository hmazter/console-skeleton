FROM php:8.0-alpine

RUN curl -o /usr/local/bin/composer https://getcomposer.org/composer.phar \
    && chmod +x /usr/local/bin/composer

COPY . /app

WORKDIR /app

RUN composer install --no-dev