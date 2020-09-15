## Instrucciones

- Antes de iniciar el proyecto se debe tener Instalado xampp, lamp u otro similar.
- Tener agregado a PHP como variable de entorno para ser usando mediando consola.
- Una vez cumplidos los 2 requerimientos anteriores de debe tener instalado el administrador de paquetes de composer, disponible en https://getcomposer.org/
- Clonar el repositorio en la carpeta htdocs de Xampp e iniciar los servicios (Apache y Mysql).
- Una vez en el proyecto, mediante terminal ejecutar el comando `composer install`.
- Crear una base de datos con el nombre de Laravel.
- Cambiar el nombre del archivo .env.example a .env y cambiar las variables en caso de que sea necesario.
- En el proyecto ejecutar el comando `php artisan migrate` para realizar las migraciones a la base de datos.