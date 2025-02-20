## Correrlo Local we
git clone <url-del-proyecto>
entras a la carpeta we del proyecto

composer update

cp .env.example .env 
(o nada más modificar el archivo .env.exampe a solo .env)

php artisan key:generate

php artisan Storage:link

php artisan migrate

php artisan serve


te registras y ya te vas en la nav a pokemones


## CSS
public\css\pokemon.css

## Vistas y Vistas de Modales
resources\views\pokemon\index.blade.php
resources\views\pokemon\modals\
