# inicioweb

Página de inicio para usar en un servidor y que funcione como portal con accesos directos a los sitios que se desee.

Los enlaces se dividen en:
Enlaces principales (_mainLinks_)
Enlaces de la barra de navegación (_navLinks_)
Menús con enlaces de la barra de navegación (_menus_)

Se generan todos los enlaces a través de un archivo **.json** con la siguiente estructura:
```javascript
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
```

Inicioweb usará el archivo main.json pero, adicionalmente se pueden usar archivos extra enviando
una petición get a la página _?ini=nombre_archivo_json

