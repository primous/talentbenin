#!/bin/bash
set -e

echo "==> Initialisation des packages et de Filament..."
php artisan package:discover --ansi
php artisan filament:upgrade -n || true

echo "==> Mise en cache de la configuration et des routes..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "==> Exécution des migrations de base de données..."
php artisan migrate --force

echo "==> Lancement du serveur Apache en avant-plan..."
exec apache2-foreground
