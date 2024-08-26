# Proyecto Laravel - Clima en Tiempo Real -Ricardo Cerna cB100420

Este proyecto muestra las condiciones del clima en tiempo real utilizando la Weatherstack API y se actualiza constantemente. Incluye una vista con imágenes para representar diferentes condiciones meteorológicas.

## Requisitos

!!!!IMPORTANTE ESTOS PASOS SON PARA UBUNTU YA QUE AHI DESARROLLE LA APP
Antes de comenzar, asegúrate de tener instalados los siguientes programas en tu sistema Ubuntu

-   [apache o nginx ]
-   [PHP 8.0 o superior](https://www.php.net/)
    sudo apt-get install php8.3 php8.3-cli php8.3-common php8.3-curl php8.3-mbstring php8.3-xml php8.3-zip php8.3-intl php8.3-bcmath php8.3-gd php8.3-mysql php8.3-sqlite3 php8.3-opcache php8.3-xdebug
-   [Composer](https://getcomposer.org/)
    sudo apt-get install composer
-   [Node.js y npm](https://nodejs.org/)
    sudo apt-get install node
    sudo apt-get install npm
-   [MySQL](https://www.mysql.com/) o [MariaDB](https://mariadb.org/)
    sudo apt-get install mysql
-   [Git](https://git-scm.com/)
    git ya lo trae por defecto solo debemos configurar nuestras credenciales

## Instalación

### 1. Clonar el Repositorio

Primero, clona el repositorio del proyecto desde GitHub:

```bash
git clone git@github.com:Xerna/projecto-parical-1-cb100420.git
cd repositorio-donde-lo-clono
```

### 2. Instalar Dependencias de PHP

composer install
cp .env.example .env

### 3. Generar una nueva clave de aplicacion

php artisan key:generate

### 4. Generar clave API EN ESTA PAGINA

https://weatherstack.com

### 5. Instalar dependencias del Front

npm install
npm run dev

### 6. Iniciar el proyecto

php artisan serve
