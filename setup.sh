#!/bin/bash

composer install

# Запустите Sail
./vendor/bin/sail up -d

# Накатите миграции
./vendor/bin/sail artisan migrate
