FROM composer:latest AS composer
FROM php:8.1-cli
COPY --from=composer /usr/bin/composer /usr/bin/composer
# чтобы работал гит нужны доп библиотеки zip
RUN apt-get update \
    && apt-get install -y git zip unzip libzip-dev \
    && apt-get -y autoremove \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN docker-php-ext-install zip \
    && docker-php-ext-install pcntl \
    && docker-php-ext-install bcmath

WORKDIR /app