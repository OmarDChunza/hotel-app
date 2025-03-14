# Documentación del Requerimiento Hotel.

Se agregaron las siguientes rutas para el uso de las APIs que permiten, el registro de Hoteles y su acomodacion respectiva.

app\Models\Hotel.php
app\Models\Room.php
app\Http\Controllers\HotelController.php
app\Http\Controllers\RoomController.php
database\migrations\2025_03_13_204518_create_hotels_table.php
database\migrations\2025_03_13_204604_create_rooms_table.php
routes\api.php


# Implementacion

Para empezar es necesario instalar HERD de Laravel, con esto nos ayudara a implementar el proyecto en la platafomra Windows, Linux o MacOS, en la que ejecutaremos el proyecto, luego de esto clonamos el proyecto desde con git, ya con esto, se debe tener instalado postgresql, con una DB creada llamada hotel, los datos de conexion estan en el archivo el archivo .env, posterior a esto debemos ejecutar desde la linea de comandos php artisan migrate, esto creara las tablas en la DB, ya con esto podemos empezar a realizar pruebas de las APIs.

Por es momento esto es lo que llevo, y continuo realizando las mejoras necesarias.

