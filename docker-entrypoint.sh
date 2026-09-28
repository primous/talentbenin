#!/bin/bash
set -e

# Configuration du port si Render définit la variable $PORT
if [ -n "$PORT" ] && [ "$PORT" != "80" ]; then
    echo "==> Adaptation du port Apache vers $PORT..."
    sed -i "s/80/$PORT/g" /etc/apache2/sites-available/*.conf /etc/apache2/ports.conf
fi

echo "==> Découverte des packages et configuration..."
php artisan package:discover --ansi || true

echo "==> Mise en cache de production..."
php artisan config:cache || true
php artisan route:cache || true
php artisan view:cache || true

echo "==> Exécution des migrations de base de données..."
php artisan migrate --force || echo "==> [INFO] Les migrations n'ont pas pu être exécutées immédiatement (base non configurée ou en attente). Lancement d'Apache..."

echo "==> Démarrage du serveur Apache..."
exec apache2-foreground
