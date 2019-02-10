<?php

// -----------------------------------------------------------------------------------------------
//
// NAVBAR DROPDOWN MENU
//
// -----------------------------------------------------------------------------------------------

// -----------------------------------------------------------------------------------------------
// CREACIÓN DEL MENÚ
// TITLE = Título del menú
// ITEMS = Array con los objetos navbarDropdownItem que aparecerán en el menú
// se debe inicializar el objeto añadiendo los items en el array
// DIV = Se empleará como elemento del array de items para crear una línea divisoria
// -----------------------------------------------------------------------------------------------
class navbarDropdown {
    public $title, $items, $div;
    function __construct($title) {
        $this->title = $title;
        $this->div = new navbarDropdownItem("#", "divider");
        $this->items = [];
    }
    function show() {
        echo "<li class='nav-item dropdown'>\n";
        echo "<a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>\n";
        echo $this->title."\n";
        echo "</a>\n";
        echo "<div class='dropdown-menu' aria-labelledby='navbarDropdown'>\n";
        // ITEMS
        foreach ($this->items as $it) {
            $it->show();
        }
        // ITEMS;
        echo "</div>\n</li>\n";
    }
}

// -----------------------------------------------------------------------------------------------
// ELEMENTO DEL MENÚ DESPLEGABLE
// LINK -> ENLACE
// TEXT -> TEXTO QUE APARECERÁ
// -----------------------------------------------------------------------------------------------
class navbarDropdownItem {
    
    public $link;
    public $text;
    function __construct($link, $text) {
        $this->link = $link;
        $this->text = $text;
    }
    function show() {
        if ($this->link == "#" && $this->text == "divider") {
            echo "<div class='dropdown-divider'></div>";
        } else {
            echo "<a class='dropdown-item' href='".$this->link."'>".$this->text."</a>\n";
        }
    }
}

// -----------------------------------------------------------------------------------------------
// ELEMENTO DE LA BARRA DE NAVEGACIÓN
// Si se le añade una propiedad $image, se añadirá la imagen de la ruta especificada al 
// elemento de menú
// -----------------------------------------------------------------------------------------------
class navbarItem {
    public $link;
    public $text;
    public $image;
    
    function __construct($link, $text) {
        $this->link = $link;
        $this->text = $text;
        $this->image = "";
    }
    
    function show() {
        if ($this->image == "") {
            echo "<li class='nav-item'><a class='nav-link' href='".$this->link."'>".$this->text."</a></li>";
        } else {
            echo "<li class='nav-item'><a class='nav-link' href='".$this->link."'><img src='".$this->image."' style='height:15px; margin-right:5px'>".$this->text."</a></li>";
        }
    }
}
