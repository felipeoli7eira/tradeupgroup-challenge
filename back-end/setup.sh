#!/bin/bash

CONTAINER_NAME="laravel-backend-app"

docker compose up -d
docker exec -it $CONTAINER_NAME chmod -R 777 /var/www/html
docker exec -it $CONTAINER_NAME composer install
docker exec -it $CONTAINER_NAME cp .env.example .env
docker exec -it $CONTAINER_NAME php artisan key:generate
