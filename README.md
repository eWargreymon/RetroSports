# RetroSports - Desarrollo de Aplicaciones Web 2
Portal web desarrollado en Wordpress que incluye tienda electrónica WooCommerce

## Descripción general
Se trata de un portal web, estilo blog, orientado a hechos históricos del deporte. De esta forma, un grupo de redactores puede publicar artículos mensualmente en relación a una serie de secciones habilitadas: baloncesto, fórmula 1, fútbol y deportistas en general.
Adicionalmente, se añade una tienda con artículos 'retro' o de la época, siempre relacionados con las historias que se publican.

## Aspectos técnicos del proyecto

### Proyecto general 🔧

```
Se ha hecho uso del entorno XAMPP v3.2.4 con la herramienta de gestión de bases de datos phpMyAdmin v5.0.4
Se ha instalado la versión de Wordpress más reciente: 5.7.2
El plugin más destacado, WooCommerce, se encuentra en su versión más reciente: 5.3.0
```

### Tema y plantilla :art:

Se ha instalado el tema Astra v3.4.8, seleccionado una de las plantillas disponibles gratuitas que proporciona, que tiene un estilo adecuado para el contenido del portal.

![image](https://user-images.githubusercontent.com/31969136/121019088-04d52a00-c797-11eb-9fd8-8012d192a9e8.png)


### Plugins instalados destacados :electric_plug:

* WooCommerce, para la gestión de la tienda electrónica
* Elementor, para facilitar el diseño de algunas páginas y entradas
* WpForms, para añadir formularios de contacto
* Duplicate Page, para duplicar entradas y páginas, agilizando el desarrollo del portal
* Content Views, para mostrar una cuadrícula con determinados artículos en función de la fecha de publicación
* User Role Editor, para añadir y gestionar los permisos atribuidos a los roles del portal

### Jerarquía de usuarios 👤

Se han definido una serie de roles de usuario dentro del portal

* Administradores: pueden hacer cualquier acción relacionada tanto con el servicio como con la tienda electrónica.
* Editor: puede modificar aspectos visuales del servicio, las páginas y las entradas. No puede modificar nada relacionado con la tienda electrónica.
* Autor: puede modificar y crear nuevas entradas. No puede modificar nada relacionado con la tienda electrónica. Se han creado roles derivados de este, orientados a la publicación de entradas de una categoría concreta, como son:
  * Autor de F1
  * Autor de Baloncesto
  * Autor de Fútbol
* Gestor de la tienda: puede hacer cualquier acción relativa a la tienda electrónica. No puede hacer acciones relacionadas con el resto de páginas, entradas o del sitio en general.
* Usuario registrado o Cliente: puede hacer pedidos en la tienda electrónica y comentar en las publicaciones.
* Visitante: puede visualizar el portal y los productos, pero no puede hacer pedidos, ya que necesita registrarse para ello. Para publicar comentarios en los artículos debe indicar su nombre y dirección de correo electrónico.
