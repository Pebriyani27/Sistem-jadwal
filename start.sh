#!/bin/bash

php artisan config:clear
php artisan config:cache
php artisan view:cache
php artisan serve --host=0.0.0.0 --port=${PORT}
