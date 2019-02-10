<?php

// -----------------------------------------------------------------------------------------------
//
// NAVBAR DROPDOWN MENU
//
// -----------------------------------------------------------------------------------------------

// -----------------------------------------------------------------------------------------------
// CREACI�N DEL MEN�
// TITLE = T�tulo del men�
// ITEMS = Array con los objetos navbarDropdownItem que aparecer�n en el men�
// se debe inicializar el objeto a�adiendo los items en el array
// DIV = Se emplear� como elemento del array de items para crear una l�nea divisoria
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
// ELEMENTO DEL MEN� DESPLEGABLE
// LINK -> ENLACE
// TEXT -> TEXTO QUE APARECER�
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
// ELEMENTO DE LA BARRA DE NAVEGACI�N
// Si se le a�ade una propiedad $image, se a�adir� la imagen de la ruta especificada al 
// elemento de men�
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
