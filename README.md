# 🛠️ Prueba Técnica Laravel - CRUD y Consumo de API

Repositorio con la prueba técnica desarrollada en Laravel que consiste en un CRUD básico para la gestión de datos locales y el consumo de una API externa para mostrar información adicional.

---

## 🚀 Tecnologías usadas

- Laravel 10+
- Breeze
- PHP 8+
- MySQL
- Composer
- Tailwind o Bootstrap
- Blade
- Laravel Http Client

---

## ⚙️ Requisitos

- PHP 8.1+
- Composer
- Base de datos MySQL o compatible
- Servidor local: XAMPP, Valet o Laravel Sail
- Conexión a internet

---

## 📦 Instalación y configuración

```bash
git clone https://github.com/EdderVivero/pruebaLaravel.git
cd pruebaLaravel
composer install
cp .env.example .env
# Configura tu archivo .env con tus datos de conexión
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

> Abre `http://localhost:8000/register` en tu navegador, crea tu cuenta y comienza a explorar la aplicación.

---

## 🧰 Funcionalidades

- **CRUD local**: administración de registros, validaciones y controladores con vistas Blade.
- **Consumo de API externa**: integración con `PokeAPI` usando el cliente HTTP de Laravel.

---

## 📁 Estructura del proyecto

- `app/Http/Controllers`: Controladores CRUD + API.
- `app/Models`: Modelos Eloquent.
- `database/migrations`: Migraciones.
- `database/seeders`: Seeders de ejemplo.
- `resources/views`: Interfaz Blade.
- `routes/web.php`: Rutas principales.

---

## 🧮 Base de Datos

La estructura completa está en `database/SQL/pruebalaravel.sql` junto a un diagrama visual que representa su diseño relacional.

---

## ✨ ¡Gracias por revisar esta prueba!

**Edder Vivero**
