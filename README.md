# CRUD de Productos con Laravel

Este proyecto es un **CRUD (Create, Read, Update, Delete) de productos** desarrollado con **Laravel 12** y utilizando **Breeze** para autenticación y plantillas, junto con **Blueprint** como herramienta de scaffolding para generar rápidamente modelos, controladores y vistas.

---

## Características principales

- Gestión completa de productos:
  - Crear nuevos productos
  - Listar productos existentes
  - Editar productos
  - Eliminar productos
- Cada producto tiene los siguientes atributos:
  - Código (máx. 3 caracteres)
  - Nombre (máx. 30 caracteres)
  - Fabricante (máx. 30 caracteres)
  - Fecha de llegada
  - Disponible (booleano)
- Interfaz moderna y responsive usando Tailwind CSS.
- Formularios con validación y mensajes de error.
- Autenticación de usuarios con Laravel Breeze.

---

## Uso de Blueprint

Se utilizó **[Blueprint](https://blueprint.laravelshift.com/)** para generar el **scaffolding inicial** del CRUD.  
Esto permitió crear rápidamente:

- Modelo `Producto`
- Controlador `ProductoController` con métodos `index`, `create`, `store`, `edit`, `update` y `destroy`
- Migración de base de datos para `productos`
- Rutas RESTful (`Route::resource('productos', ProductoController::class)`)

