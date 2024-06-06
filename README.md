
# 🌐 Aplicación Web al Estilo StackOverflow

## 📄 Descripción General
Desarrollé una plataforma de preguntas y respuestas similar a StackOverflow, orientada a desarrolladores y programadores. La aplicación permite a los usuarios registrados publicar preguntas, proporcionar respuestas e intercambiar conocimientos sobre diversos lenguajes de programación y frameworks.

## ✨ Características
- **🔐 Autenticación de Usuarios:** Sistema de inicio de sesión seguro para publicar y responder preguntas.
- **❓ Publicación de Preguntas:** Los usuarios pueden publicar preguntas que se muestran en la página principal.
- **💬 Respuestas y Votación:** Los usuarios registrados pueden responder preguntas, y el propietario de la pregunta puede marcar una respuesta como correcta, resaltándola en verde.
- **🔍 Filtrado por Categoría:** Las preguntas pueden categorizarse por lenguajes de programación o frameworks, permitiendo a los usuarios filtrar y ver preguntas en categorías específicas.
- **🛠️ Panel de Administrador:** Incluye operaciones CRUD para la gestión de categorías. Los administradores pueden crear, leer, actualizar y eliminar categorías.
- **📱 Diseño Responsivo:** Optimizado para diversos dispositivos y tamaños de pantalla.

## 🛠️ Pila Tecnológica
- **💻 Frontend:** HTML, CSS, JavaScript (con librerías como Vue.js o React.js según sea necesario)
- **🔧 Backend:** PHP, Laravel
- **💾 Base de Datos:** MySQL
- **🔀 Control de Versiones:** Git

## 🚀 Primeros Pasos

### 🛠️ Prerrequisitos
- PHP 7.4 o superior
- MySQL
- Composer
- NPM

### 📝 Instalación
1. **📂 Clona el repositorio:**
   [https://github.com/dannytamayo/proyectoStackOverflow](https://github.com/dannytamayo/proyectoStackOverflow)
2. **🔎 Instala las dependencias de PHP:**
```bash
composer install
```
4. **⚙️ Configura el archivo de entorno:**
- Copia el archivo `.env.example` a `.env`
- Configura los ajustes de tu base de datos en el archivo `.env`
4. **✔ Ejecuta las migraciones:**
```bash
php artisan migrate
```
