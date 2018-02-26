## Prueba para Pago PSE para PlaceToPay

desarrollada por: Juan Sebastian Salgado Bastidas
email: salgadosb1986@gmail.com

## Nota

Este proyecto fue realizado en laravel 5.6 y php 7.2.2

## Utilización

Una vez se descarga o clona el proyecto, en el mismo por medio de consola(cmd o simbolo del sistema windows), se activa el servidor por medio de: php artisan serve, se va directo al navegador web, en la direccion localhost:8000 se antepone Prueba(localhost:8000/Prueba) y se despliega la lista de entidades bancarias para la compra.

## Observación

1. El complemento utilizado para llevar a cabo la aplicación esta en la carpeta vendor/theluguiant/pse-composer y adentro de la misma estan los archivos de autenticación y los datos suministrados por PlaceToPlay(PseAuth.php), transacción y vista de entidades bancarias(ServicePseBank).

2. Se utiliza para el desarrollo del controlador PruebaController(app\http\controllers) metodologia de repositorios(app\Repositories\PruebaRepository) para traer los datos del punto 1 mencionado en esta nota de observación(en este caso, el modelo Pse) y la ruta(routes/web) para hacer visible la lista de bancos de la aplicación  en el navegador.
