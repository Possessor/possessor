FROM php:7.2-fpm-alpine
WORKDIR "/app"

RUN apk add --no-cache $PHPIZE_DEPS \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug
    