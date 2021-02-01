web: vendor/bin/heroku-php-nginx public/
heroku run mv .env.example .env
heroku run php artisan migrate:fresh --seed
