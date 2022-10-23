INTERMEDIO ENTRE PORTAL Y PASSPORT

//iniciar la carpeta public 
php -S localhost:8080 -t ./public

//crear posts
php artisan make:migration create_posts_table --create=posts

//crear modelos
php artisan make:model Post

php artisan make:model Post --controller --resource --requests --seed
php artisan make:model Post -crRs

//ejecutar un seed
php artisan migrate:refresh --seed# passport

//personal access token solo funciona con el formulario
