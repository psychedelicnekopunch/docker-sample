
FROM wordpress:latest

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

WORKDIR /var/www/html

COPY ./wordpress /var/www/html
