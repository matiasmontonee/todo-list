# Laravel To-Do List

Un sencillo gestor de tareas pendientes (To-Do List) desarrollado con Laravel.  
Permite crear, listar, completar y eliminar tareas tanto desde una interfaz web (Blade) como mediante una API RESTful.

---

## Requisitos

- PHP >= 8.1  
- Composer  
- MySQL o MariaDB  
- Git (para clonar el repositorio)

---

## Instalación y primer uso
```bash

### 1. Clona el repositorio

git clone https://github.com/matiasmontonee/todo-list.git
cd todo-list

### 2. Instala las dependencias de PHP
composer install

### 3. Crea el archivo de entorno
cp .env.example .env

### 4. Configura la base de datos
Abrí el archivo .env con tu editor favorito.

Buscá la sección:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=todolist  # <-- Cambia esto por el nombre de tu base de datos
DB_USERNAME=root          # <-- Cambia esto por tu usuario de MySQL
DB_PASSWORD=              # <-- Poné tu contraseña si tenés

Crea la base de datos vacía desde phpMyAdmin, Workbench o consola antes de continuar.

### 5. Genera la clave de la aplicación
php artisan key:generate

### 6. Ejecuta las migraciones y los seeders
php artisan migrate --seed

### 7. Levanta el servidor de desarrollo
php artisan serve



Uso
Frontend web
Accedé a http://localhost:8000/tasks
Desde allí podés:

Ver todas las tareas

Crear una nueva tarea

Marcar una tarea como completada

Eliminar tareas

API RESTful
Los endpoints principales de la API son:

GET /api/tasks — Lista todas las tareas

POST /api/tasks — Crea una tarea
(body JSON: { "title": "Tarea", "description": "Detalle", "due_date": "YYYY-MM-DD" })

PUT /api/tasks/{id} — Marca una tarea como completada

Podés probarlos con Postman, Insomnia o curl.