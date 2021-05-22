#/bin/env bash

# npm install
npm run dev
# composer install
# php artisan key:generate
php artisan migrate
php artisan serve
