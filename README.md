# LMS - Tu Guía Digital

Plataforma de Gestión de Aprendizaje (LMS) desarrollada a medida en PHP, diseñada para la venta y gestión de cursos en línea de "Tu Guía Digital".

## 📋 Descripción del Proyecto

Este proyecto es una aplicación web completa que gestiona tanto la parte pública (venta de cursos, blog, contacto) como el área privada de estudiantes (Aula Virtual) y el área de administración. Está construido siguiendo el patrón de arquitectura **MVC (Modelo-Vista-Controlador)** sin depender de frameworks pesados, garantizando un rendimiento óptimo y facilidad de personalización.

## � Características Principales

### 🌐 Web Pública
- **Catálogo de Cursos:** Listado de cursos con filtros y detalles.
- **Carrito de Compras:** Flujo de compra completo (Carrito -> Checkout).
- **Blog:** Sección de noticias y artículos.
- **Páginas Informativas:** Nosotros, Contacto, Instructores, FAQ.

### 🎓 Aula Virtual (Área del Estudiante)
- **Dashboard Personal:** Resumen de progreso, racha semanal y estadísticas.
- **Reproductor de Clases:** Interfaz inmersiva para ver lecciones de video (YouTube/Vimeo) con navegación entre módulos.
- **Sistema de Comentarios:** Hilo de preguntas y respuestas en tiempo real (estilo chat) en cada clase.
- **Gestión de Perfil:** Edición de datos personales, redes sociales y preferencias.
- **Certificados:** Generación y descarga de certificados al completar cursos.
- **Lista de Deseos:** Guardado de cursos de interés.
- **Historial de Pagos:** Registro de transacciones y facturas.

### 👩‍💼 Área de Administración
- **Dashboard:** Resumen de estadísticas y gestión general.
- **Gestión de Usuarios:** CRUD de estudiantes y administradores.
- **Gestión de Cursos:** CRUD de cursos y módulos.
- **Comentarios y Respuestas:** Moderación y gestión de interacciones en el foro.
- **Reportes y Analytics:** Análisis de ventas, progreso de estudiantes y más.

## 🛠️ Estructura Técnica

El proyecto está organizado modularmente para facilitar el mantenimiento:

### 📂 Directorios
- **`app/`**: Lógica del negocio.
  - **`Controllers/`**: Controladores divididos en `Web` (Público), `Classroom` (Alumno) y `Admin` (Gestión).
  - **`Models/`**: Capa de acceso a datos.
- **`views/`**: Plantillas HTML/PHP.
  - **`web/`**: Vistas de la página comercial.
  - **`classroom/`**: Vistas del panel de estudiantes (Diseño Dashboard).
  - **`layouts/`**: Componentes reutilizables (Headers, Footers, Sidebars).
- **`assets/`**: Recursos estáticos (CSS, JS, Imágenes, Fuentes).
- **`index.php`**: Enrutador principal (Router) que despacha las peticiones.

### 💻 Tecnologías
- **Backend:** PHP 7.4 / 8.x (Nativo, POO).
- **Frontend:** HTML5, CSS3 (Modular), JavaScript (Vanilla + jQuery).
- **Framework CSS:** Bootstrap 5 (Personalizado).
- **Base de Datos:** MySQL.
- **Servidor:** Apache (XAMPP).

## ⚙️ Instalación y Configuración

1. **Requisitos:** Servidor web con PHP (ej. XAMPP, Laragon) y MySQL.
2. **Despliegue:**
   - Clonar el repositorio en `htdocs`.
   - Asegurarse de que la carpeta raíz sea `lms`.
3. **Base de Datos:**
   - Importar el script SQL (si está disponible) en phpMyAdmin.
   - Configurar credenciales en `app/Models/connection.php`.
4. **Ejecución:**
   - Acceder a `http://localhost/lms` para la web pública.
   - Acceder a `http://localhost/lms/aula-virtual` para el login de estudiantes.
   - Acceder a `http://localhost/lms/admin` para el login de administradores.

## 📝 Estado Actual
- **UI/UX:** Diseño responsive implementado en Aula Virtual y Web Pública.
- **Navegación:** Rutas amigables configuradas en `index.php`.
- **Internacionalización:** Comentarios de código en Español para facilitar el desarrollo.
