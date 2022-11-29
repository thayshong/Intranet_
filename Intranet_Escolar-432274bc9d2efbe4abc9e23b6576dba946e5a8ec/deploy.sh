#!/bin/bash
set -e

echo "Iniciado deploy"

(php artisan down) || true

git pull origin main

composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

php artisan clear-compiled

php artisan optimize

npm run prod

php artisan migrate --force

php artisan up

echo "Finalizado deploy"
