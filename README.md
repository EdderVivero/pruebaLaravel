<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Prueba Técnica Laravel - CRUD + API</title>
  <style>
    body {
      font-family: 'Segoe UI', Roboto, sans-serif;
      background-color: #f7f9fc;
      color: #333;
      line-height: 1.6;
      padding: 2rem;
      max-width: 1000px;
      margin: auto;
    }

    h1, h2 {
      color: #2d5be3;
      border-bottom: 2px solid #2d5be3;
      padding-bottom: 0.3rem;
    }

    h1 {
      font-size: 2.5rem;
      margin-top: 0;
    }

    h2 {
      font-size: 1.75rem;
      margin-top: 2rem;
    }

    ul {
      background-color: #fff;
      padding: 1rem;
      border-left: 4px solid #2d5be3;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    code {
      background-color: #eef;
      padding: 0.2rem 0.4rem;
      border-radius: 4px;
      font-family: monospace;
    }

    pre {
      background-color: #272c34;
      color: #eee;
      padding: 1rem;
      border-radius: 8px;
      overflow-x: auto;
    }

    blockquote {
      background-color: #eaf4fc;
      padding: 1rem;
      font-style: italic;
      border-left: 4px solid #2d5be3;
    }

    .footer {
      margin-top: 2rem;
      font-weight: bold;
      font-size: 1.2rem;
      color: #1a8;
      text-align: center;
    }
  </style>
</head>
<body>

  <h1>🛠️ Prueba Técnica Laravel - CRUD y Consumo de API</h1>
  <p>Repositorio con la prueba técnica desarrollada en Laravel que consiste en un CRUD básico para la gestión de datos locales y el consumo de una API externa para mostrar información adicional.</p>

  <h2>🚀 Tecnologías usadas</h2>
  <ul>
    <li>Laravel 10+</li>
    <li>Breeze</li>
    <li>PHP 8+</li>
    <li>MySQL</li>
    <li>Composer</li>
    <li>Tailwind o Bootstrap</li>
    <li>Blade</li>
    <li>Laravel Http Client</li>
  </ul>

  <h2>⚙️ Requisitos</h2>
  <ul>
    <li>PHP 8.1+</li>
    <li>Composer</li>
    <li>Base de datos MySQL o compatible</li>
    <li>Servidor local: XAMPP, Valet o Laravel Sail</li>
    <li>Conexión a internet</li>
  </ul>

  <h2>📦 Instalación y configuración</h2>
  <pre><code>
git clone https://github.com/EdderVivero/pruebaLaravel.git
cd pruebaLaravel
composer install
cp .env.example .env
# Configura tu archivo .env con tus datos de conexión
php artisan key:generate
php artisan migrate --seed
php artisan serve
  </code></pre>
  <blockquote>
    Abre <code>http://localhost:8000/register</code> en tu navegador, crea tu cuenta y comienza a explorar la aplicación.
  </blockquote>

  <h2>🧰 Funcionalidades</h2>
  <ul>
    <li><strong>CRUD local:</strong> administración de registros, validaciones y controladores con vistas Blade.</li>
    <li><strong>Consumo de API externa:</strong> integración con <code>PokeAPI</code> usando el cliente HTTP de Laravel.</li>
  </ul>

  <h2>📁 Estructura del proyecto</h2>
  <ul>
    <li><code>app/Http/Controllers</code>: Controladores CRUD + API.</li>
    <li><code>app/Models</code>: Modelos Eloquent.</li>
    <li><code>database/migrations</code>: Migraciones.</li>
    <li><code>database/seeders</code>: Seeders de ejemplo.</li>
    <li><code>resources/views</code>: Interfaz Blade.</li>
    <li><code>routes/web.php</code>: Rutas principales.</li>
  </ul>

  <h2>🧮 Base de Datos</h2>
  <p>La estructura completa está en <code>database/SQL/pruebalaravel.sql</code> junto a un diagrama visual que representa su diseño relacional.</p>

  <div class="footer">
    ✨ ¡Gracias por revisar esta prueba! ✨<br>
    <strong>Edder Vivero</strong>
  </div>

</body>
</html>
