php artisan make:migration create_users_table --create=users

php artisan make:migration add_votes_to_users_table --table=users


php artisan migrate:reset

php artisan serve


php artisan storage:link