# flat101_pluginsphp
Se realizan dos plugins:

Introducte meta og:image en el con link a la featured image en las paginas de post.
Añade al final del titulo de todas las paginas " - Flat101".
Para ello se utilizan hooks add_action y add_filter. En plugin og:image se usa un condicional is_single() para que sólo afecte a páginas de post. Se podría utilizar también is_main_query() (para asegurarse que es consulta principal y no es busqueda) y in_the_loop() (para asegurarse por ejemplo que no es un artículo o segmento del artículo en widget).
Aconsejable comprimir a zip para su instalación desde panel Wordpress.
