FROM php:8.2-fpm-alpine

RUN apk add --no-cache openssl bash git mysql-client libzip-dev libpng-dev jpeg-dev linux-headers
RUN docker-php-ext-configure gd --with-jpeg
RUN docker-php-ext-install pdo pdo_mysql bcmath gd

RUN apk add --no-cache pcre-dev $PHPIZE_DEPS \
    && pecl install redis \
    && docker-php-ext-enable redis.so

WORKDIR /var/www

RUN rm -rf /var/www/html
RUN ln -s public html

RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer \
    && chmod a+x /usr/local/bin/composer

ENV XDEBUG_CONFIG="idekey=PHPSTORM"

EXPOSE 8000

ENTRYPOINT ["php-fpm"]