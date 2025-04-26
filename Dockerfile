FROM php:8.2-apache

# Abilitare l'estensione mysqli
RUN docker-php-ext-install mysqli

# Impostare la directory di lavoro
WORKDIR /var/www/html