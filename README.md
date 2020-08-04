git clone https://github.com/ardiandp/LTE.git

composer install

cp .envexample .env

php artisan key:generate

php artisan serve
