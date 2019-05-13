# Sample Multi Tenant Laravel App

## Installation
1. Prepare 3 database: `multi_tenant_core`, `multi_tenant_1`, `multi_tenant_2`
1. Clone this repository
1. Copy .env.example to .env, adjust the values
1. Run `composer install`
1. Run `php artisan laravolt:link-assets`
1. Run `php artisan migrate --seed`
1. Run `php artisan migrate --path=/database/migrations_tenant`
1. Run `php artisan db:seed --class=TenantPostSeeder`
1. Run `php artisan server`
