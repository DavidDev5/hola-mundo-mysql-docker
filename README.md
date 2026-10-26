# Hola Mundo con PHP, MySQL y Docker Compose

## Descripción
Aplicación web desarrollada en PHP que muestra Hola Mundo
y comprueba la conexión con una base de datos MySQL.

## Tecnologías
- PHP 8.2
- Apache
- MySQL 8.0
- Docker
- Docker Compose

## Estructura
- src/index.php: código fuente de la aplicación.
- Dockerfile: configuración del servidor PHP.
- docker-compose.yml: configuración de los servicios.
- .gitignore: archivos excluidos del repositorio.

## Ejecución
Con Docker instalado, ejecutar:

docker compose up -d --build

Después, abrir:

http://localhost:8080

## Resultado esperado
La aplicación muestra Hola Mundo y confirma si la conexión
con la base de datos MySQL se realizó correctamente.

## Proyecto académico
Práctica de Docker Compose - ITLA
