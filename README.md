# lms-platform

Sistema LMS desarrollado en PHP para cursos en línea, enfocado en la plataforma Tu Guía Digital.

## Estructura del Proyecto

El proyecto sigue una arquitectura **MVC (Modelo-Vista-Controlador)** modular, organizada para separar la lógica del sitio web público, el aula virtual y la administración.

### 📂 Directorios Principales

- **`app/`**: Contiene toda la lógica de negocio y controladores.
  - **`Controllers/`**: Controladores organizados por módulo (`Web`, `Classroom`, `Admin`).
  - **`Models/`**: Modelos de datos para interactuar con la base de datos.
  - **`Services/`**: Capa de servicios para lógica de negocio compleja.
  - **`DTOs/`**: Objetos de Transferencia de Datos.
  - **`Validators/`**: Lógica de validación de datos.
  - **`Helpers/`**: Funciones de utilidad y auxiliares.
  - **`Core/`**: Componentes del núcleo del framework (si aplica).

- **`views/`**: Vistas y plantillas HTML, separadas por contexto.
  - **`web/`**: Vistas públicas (Home, Blog, Cursos, Contacto, Tienda).
  - **`classroom/`**: Vistas del área de estudiantes (Mis Cursos, Perfil, Login).
  - **`admin/`**: Vistas del panel de administración.
  - **`layouts/`**: Elementos compartidos (Headers, Footers, Sidebars) para cada módulo.

- **`assets/`**: Recursos estáticos públicos.
  - **`css/`**: Hojas de estilo (incluye `app.css`).
  - **`js/`**: Scripts JavaScript.
  - **`images/`**: Imágenes del sitio.
  - **`fonts/`**: Fuentes e iconos (IcoMoon, RemixIcon).

- **`template/`**: Plantillas HTML originales de referencia (EduBlink).

- **`index.php`**: Punto de entrada único de la aplicación. Maneja el enrutamiento dinámico basado en la variable `route`.

## Instalación

1. Clona el repositorio.
2. Configura el servidor web (XAMPP/Apache).
3. Importa la base de datos (pendiente).
4. Configura las credenciales de base de datos en `app/Models/connection.php` (o similar).

## Tecnologías

- **Lenguaje**: PHP 7.4+ / 8.x
- **Base de Datos**: MySQL
- **Frontend**: HTML5, CSS3, JavaScript (Plantilla EduBlink)
- **Servidor**: Apache (XAMPP recomendado para local)
