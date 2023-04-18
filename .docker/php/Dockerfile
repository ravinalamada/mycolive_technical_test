FROM php:8.1

RUN apt-get update && apt-get install -y zip

RUN docker-php-ext-install pdo pdo_mysql sockets

RUN curl -sS https://getcomposer.org/installer​ | php -- \
     --install-dir=/usr/local/bin --filename=composer

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . .

EXPOSE 8000