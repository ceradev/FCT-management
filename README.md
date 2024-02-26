# FCT Management

Aplicación para la Gestión de Empresas y Elecciones para la Formación en Centros de Trabajo (FCT).

## Descripción de la Aplicación

### 1. Listado de Empresas:
- Implementación para mostrar el listado de empresas.
- Al hacer clic en el nombre de una empresa, redirige a su página web.
- Usuarios logueados tienen un enlace en el menú para ver todas las empresas.
- Usuarios no logueados no ven el enlace y no pueden acceder al listado.

### 2. Enlaces Relativos:
- Todos los enlaces, incluido el mencionado en el punto 1, son relativos según la ruta.

### 3. Búsqueda de Empresa:
- El campo de búsqueda en la cabecera es visible solo para usuarios.
- Al ingresar una palabra, se realiza una búsqueda en la descripción y se muestran las empresas coincidentes.

### 4. Funcionalidades para Profesores:
#### - Agregar Nueva Empresa:
   - Los profesores pueden dar de alta una nueva empresa.
   - Campos de la empresa disponibles: nombre, url, modo (online, presencial, semipresencial), descripción.
#### - Eliminar y Editar Empresa:
   - Los profesores pueden eliminar y editar empresas existentes.
#### - Listado de Elecciones de Alumnos:
   - Visualización de todas las elecciones de los alumnos.
   - Ordenación por empresas o alumnos, mostrando el nombre de la empresa y el nombre del alumno.

### 5. Funcionalidades para Alumnos:
- **Ver Empresas:**
   - Visualización del listado de empresas.
- **Elegir Empresas:**
   - Elección de hasta 3 empresas para la FCT.
   - Indicación cuando el límite de elecciones ha sido alcanzado.
- **Ver Empresas Elegidas:**
   - Visualización de las empresas que el alumno ha elegido.
- **Borrar Elección:**
   - Posibilidad de borrar una elección y volver a elegir otra empresa.
- **Manejo de Eliminación por Profesor:**
   - Si un profesor elimina una empresa, la elección del alumno para esa empresa se elimina automáticamente, permitiéndole elegir otra empresa.

## Interacción con la Base de Datos:
- La información de empresas y elecciones se almacena en la tabla "companies".
- Campos relevantes: name, url, mode, description.
