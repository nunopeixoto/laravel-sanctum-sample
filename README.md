## Setup
- `composer i`
- Create a database
- Fill .env with database connection 
- Add to .env:
```bash
SANCTUM_STATEFUL_DOMAINS=127.0.0.1:4200,localhost:4200
SESSION_DOMAIN=localhost
```
- Create testing database and add it's name on phpunit.xml

```bash
php artisan key:generate
php artisan test
php artisan serve
```
