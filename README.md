"# inicioweb" 

Pequeña página de inicio para usar con cualquier navegador.

Los enlaces se dividen en:
Enlaces principales (mainLinks)
Enlaces de la barra de navegación (navLinks)
Menús con enlaces de la barra de navegación (menus)

Se generan todos los enlaces a través de un archivo .json con la siguiente estructura:
{
  "mainLinks": [
    {
      "link":"enlace del icono",
      "img":"ruta de la imagen",
      "text":"texto del icono"
    }
  ],
  "navLinks": [
    {
      "link":"enlace del icono",
      "img":"ruta de la imagen",
      "text":"texto del icono"
    }
  ],
  "menus":[
    {
      "name":"nombre del menu",
      "items":[
        {
          "link":"enlace del icono",
          "img":"ruta de la imagen",
          "text":"texto del icono"
        }
      ]
    }
  ],
  "shortcut_icon":"icono para favicon"
}

En los menus, como item se puede usar el siguiente objeto para generar una línea divisoria:
{
  "link":"#",
  "img":"",
  "text":"divider"
}
