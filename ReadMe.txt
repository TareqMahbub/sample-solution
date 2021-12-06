
****************************************
## Necessary Dependencies (With Windows Test Machine or VM)
****************************************

- PHP 8.x.x or 7.4.x
- Composer 2.x.x
- Git 2.x.x

### Execute following commands to test & confirm
```
git clone git@github.com:TareqMahbub/sample-solution.git
cd sample-solution
composer install
mv .env.example .env
php artisan key:generate
php artisan test
php artisan make:upper "hello world"
php artisan make:alternate-case "hello world"
php artisan make:csv "hello world" (on linux machine please execute sudo chmod -R 775 . ./storage ./bootstrap)
```

****************************************
## Necessary Dependencies (With Docker)
****************************************

- Docker Desktop
- Git 2.x.x

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

****************************************
## Necessary Dependencies (With Linux Test Machine or VM)
****************************************

- PHP 8.x.x or 7.4.x
- Composer 2.x.x
- Git 2.x.x

### Execute following commands to test & confirm
(the machine must have a public key, if not generate it with following command: sudo ssh-keygen -t rsa -b 4096)
```
sudo git clone git@github.com:TareqMahbub/sample-solution.git (sometimes public key of the machine needs to be added on GitHub as Deploy keys, let me know, I'll add it for you)
cd sample-solution
sudo composer install
sudo mv .env.example .env
sudo php artisan key:generate
sudo php artisan test
php artisan make:upper "hello world"
php artisan make:alternate-case "hello world"
sudo php artisan make:csv "hello world"
```
