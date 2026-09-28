#!/bin/bash
set -e

# Met en cache la configuration et les routes pour la production
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Exécute les migrations sur la base MySQL distante
php artisan migrate --force

# Lance Apache en avant-plan
exec apache2-foreground
