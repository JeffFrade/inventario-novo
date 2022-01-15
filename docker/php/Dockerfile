FROM composer:1 AS composer
FROM php:7.4-fpm

USER root
COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN apt-get update \
    && apt-get install -y \
        autoconf \
        git \
        zip \
        unzip \
        libpq-dev \
        libzip-dev \
        zlib1g-dev \
        libssl-dev \
    && useradd -m inventario

RUN rm /etc/ssl/openssl.cnf

RUN docker-php-ext-install \
        pdo \
        pdo_pgsql \
        zip

WORKDIR /inventario

RUN chown -R inventario:inventario /inventario
USER inventario
