FROM php:8.0-apache
WORKDIR /var/www/html
RUN apt-get update -y && apt-get install -y \
    libmariadb-dev \
    curl \
    wget \
    git \
    zip \
    unzip \
    imagemagick \
    libpq-dev \
    zlib1g-dev \
    libzip-dev \
    libpng-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libgd-dev
RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql
RUN docker-php-ext-configure gd --with-jpeg=/usr/include/ --with-freetype=/usr/include/
RUN docker-php-ext-install gd
RUN docker-php-ext-install zip

RUN docker-php-ext-install mysqli pdo pdo_mysql pdo_pgsql
# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

