# Sample Multi Tenant Laravel App

## Installation
1. Clone
1. Copy .env.example to .env
1. Run `composer install`
1. Run `php artisan laravolt:link-assets`
1. Run `php artisan migrate --seed`
1. Run `php artisan migrate --path=/database/migrations_tenant`
1. Run `php artisan db:seed --class=TenantPostSeeder    `
