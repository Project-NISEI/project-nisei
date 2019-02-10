FROM php:7.0.5-fpm

RUN apt-get update && apt-get install -y libmcrypt-dev mysql-client curl libmagickwand-dev --no-install-recommends && pecl install imagick && docker-php-ext-enable imagick && docker-php-ext-install mcrypt pdo_mysql
RUN curl --silent --location https://deb.nodesource.com/setup_8.x | bash -
RUN apt-get install --yes nodejs
RUN apt-get install --yes build-essential
