# Raymi LLacta CMS

## Acerca del proyecto

Raymi LLacta CMS es un sistema de gestión de contenido (CMS) desarrollado con **Laravel**, un framework de aplicaciones web con una sintaxis expresiva y elegante. Laravel facilita el desarrollo de aplicaciones web al simplificar tareas comunes utilizadas en muchos proyectos web, tales como:

- **Enrutamiento rápido y sencillo**: [Documentación sobre Routing](https://laravel.com/docs/routing).
- **Contenedor de inyección de dependencias**: [Documentación sobre el contenedor](https://laravel.com/docs/container).
- **Soporte para múltiples backends de almacenamiento**: [Sesiones](https://laravel.com/docs/session) y [caché](https://laravel.com/docs/cache).
- **ORM intuitivo y expresivo** para bases de datos: [Documentación sobre Eloquent](https://laravel.com/docs/eloquent).
- **Migraciones de base de datos agnósticas**: [Documentación sobre migraciones](https://laravel.com/docs/migrations).
- **Procesamiento robusto de trabajos en segundo plano**: [Documentación sobre colas](https://laravel.com/docs/queues).
- **Broadcasting en tiempo real**: [Documentación sobre broadcasting](https://laravel.com/docs/broadcasting).

Laravel es accesible, poderoso y proporciona todas las herramientas necesarias para aplicaciones grandes y robustas.

## Requisitos

- **Laravel 12** (preferiblemente la última versión estable)
- **Composer**
- **Node.js**
- **PHP** (recomendado la versión más reciente compatible)
- **MySQL Workbench**

## Pasos para clonar este repositorio

1. Clona este repositorio en tu máquina local.
2. Navega hasta la ruta del proyecto en tu terminal y ejecuta los siguientes comandos:

   - Instalar dependencias de PHP:  
     ```bash
     composer install
     ```

   - Instalar dependencias de JavaScript:  
     ```bash
     npm install
     ```

   - Generar clave de aplicación:  
     ```bash
     php artisan key:generate
     ```

   - Crear enlace simbólico para almacenamiento de archivos:  
     ```bash
     php artisan storage:link
     ```

## Notas adicionales

- Configura las variables de entorno en tu archivo `.env`. Si no tienes una base de datos configurada, créala y ajusta el nombre en las variables de entorno correspondientes. Luego, ejecuta el siguiente comando para crear las tablas en la base de datos:

  ```bash
  php artisan migrate
