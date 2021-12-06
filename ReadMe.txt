****************************************
## Necessary Dependencies (With Test Machine or VM)
****************************************

- PHP 8.x.x or 7.4.x
- Composer 2.x.x
- Git 2.33.x

### Execute following commands to test & confirm
```
git clone git@github.com:TareqMahbub/sample-solution.git
cd sample-solution
php artisan test
php artisan artisan make:upper "hello world"
php artisan artisan make:alternate-case "hello world"
php artisan artisan make:csv "hello world"
```

****************************************
## Necessary Dependencies (With Docker)
****************************************

- Docker Desktop
- Git 2.33.x

### Execute following commands to test & confirm
```
git clone git@github.com:TareqMahbub/sample-solution.git
cd sample-solution
docker-compose up
docker-compose run --rm artisan test
docker-compose run --rm artisan make:upper "hello world"
docker-compose run --rm artisan make:alternate-case "hello world"
docker-compose run --rm artisan make:csv "hello world"
```
