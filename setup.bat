@echo off

composer install

REM Запустите Sail
vendor\bin\sail up -d

REM Накатите миграции
vendor\bin\sail artisan migrate
