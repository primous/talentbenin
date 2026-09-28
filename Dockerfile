FROM php:8.2-apache

# Dépendances système et extensions PHP nécessaires (incluant intl pour Filament)
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    libicu-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl bcmath gd intl \
    && a2enmod rewrite \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Pointer la racine web Apache vers le dossier public/ de Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

WORKDIR /var/www/html

# Copie des fichiers du projet
COPY . .

# Installation de Composer officielle et installation propre des dépendances sans scripts prématurés
COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer
RUN composer install --no-dev --optimize-autoloader --no-scripts --no-interaction

# Permissions pour storage, bootstrap/cache et public
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/public
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Préparer le script de démarrage
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

EXPOSE 80

ENTRYPOINT ["docker-entrypoint.sh"]
