### Installation
1. Clone the project <br>
2. Go to the project root directory <br>
3. Run `composer install` <br>
4. .env setup
5. Accordingly create a database and its name blog <br>
If DB_USERNAME and DB_PASSWORD necessary it is good enough. Otherwise root name remove <br>
6. Run `php artisan migrate:fresh --seed` <br>
7. After that run `php artisan serve`
