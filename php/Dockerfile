FROM php:fpm
RUN apt-get update && apt-get install -y zlib1g-dev git \
        && docker-php-ext-install zip \
        && docker-php-ext-install pdo pdo_mysql
RUN pecl install redis-3.1.5 \
        && docker-php-ext-enable redis
RUN curl -sS https://getcomposer.org/installer | php \
        && mv composer.phar /usr/local/bin/ \
        && ln -s /usr/local/bin/composer.phar /usr/local/bin/composer
EXPOSE 9000
WORKDIR /var/www/html
RUN composer install --prefer-source --no-interaction
