# Documentación del Requerimiento Hotel.

Se agregaron las siguientes rutas para el uso de las APIs y para la apliacion WEB, con esto permite realizar el registro de Hoteles y su acomodacion respectiva.

- app\Models\Hotel.php    
- app\Models\Room.php 
- app\Http\Controllers\HotelController.php    
- app\Http\Controllers\RoomController.php 
- database\migrations\2025_03_13_204518_create_hotels_table.php   
- database\migrations\2025_03_13_204604_create_rooms_table.php    
- routes\api.php  
- resources\views\hotels\create.blade.php 
- resources\views\hotels\edit.blade.php
- resources\views\hotels\index.blade.php
- resources\views\rooms\create.blade.php
- resources\views\rooms\index.blade.php



# Implementacion

A continuación realizare una lista de los pasos a realizar para implementar la solucion para el registro de un hotel y sus habitaciones:

1. Descargar e instalar HERD de Laravel, esto permetira realizar arrancar el servidor local en donde realizara las pruebas.
2. Para el caso de implementacion en produccion debe estar instalado PHP 8.4.
3. Descargar Postgresql, instalarlo y crear una base de datos llamada hotel.
4. Descargar o clonar este proyecto de git en la ubicacion que see, tenga encuenta que desde esa ruta se debe ejecutar la apliacion.
5. En el archivo .env de este proyecto, si en la instalacion de postgresql ingreso un usuario diferentes al que encuentra en .env, debe cambiar solo el usuario y contraseña para accedes a la DB (DB_USERNAME, DB_PASSWORD).
6. Si esta en un entorno local, bastara con abrir una terminal o consola y ejecutar php artisan serve.
7. En caso de despliegue en producción, la puesta en marcha dependra de la plataforma en que lo ejecute.

Este proyecto cumple con las caracteristicas solicitadas para crear una apliacion que permita ingresar los hoteles y los tipos de habitaciones con los que cuenta.


OMAR CHUNZA
DEV.

