# Rest Api en Laravel
Este repo contiene una aplicación REST creada en Laravel

![Screenshot from 2024-06-28 09-35-52](https://github.com/reizoor/prueba-tecnica/assets/51760115/f7294b43-cbeb-49ea-817d-56759decb729)


## Instalacion
Para la instalación se necesitara de composer 
```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

Luego estaremos instalando Laravel
```
composer global require "laravel/installer=~1.1"
```

## Inicializar servidor
Ya teniendo composer e instalado laravel estaremos levantando el servicio Rest
```
php artisan serve
```
