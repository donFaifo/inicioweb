<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Inicio mGuerrero</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="css/personal.css">
<link rel="icon" type="image/png" href="img/atomo-ico.png">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php
  require 'classes.php';
  require 'bsClasses.php';
  
  $string = file_get_contents("data.json");
  $datos = json_decode($string);
?>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="container">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" id = "menus">
      		<?php 
      		$item1 = new navbarItem("http://mguerrero.es/inicioweb", "Inicio");
      		$item1->show();
      		
      		$mn1 = new navbarDropdown("Iconos principales");
      		$mn1->items = [
      		    new navbarDropdownItem("#", "A&ntilde;adir nuevo"),
      		    new navbarDropdownItem("#", "Eliminar uno"),
      		    new navbarDropdownItem("#", "Reordenar"),
      		    $mn1->div,
      		    new navbarDropdownItem("#", "Eliminar todos")
      		];
      		$mn1->show();
      		
      		$menu2 = new navbarDropdown("Barra de navegaci&oacute;n");
      		$menu2->items = [
      		    new navbarDropdownItem("#", "A&ntilde;adir nuevo enlace"),
      		    new navbarDropdownItem("#", "A&ntilde;adir nuevo men&uacute;"),
      		    new navbarDropdownItem("#", "Eliminar elemento"),
      		    new navbarDropdownItem("#", "Reordenar elementos"),
      		    $menu2->div,
      		    new navbarDropdownItem("#", "Eliminar todos")
      		    ];
      		$menu2->show();
      		
      		?>
		  
        </ul>

    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
	<div class="col-12 mt-5">
        <div class="card">
        	<div class="card-header">
        		<b>Iconos principales</b>
        	</div>
            <ul class="list-group list-group-flush">
            	<?php 
            	if (count($datos->mainLinks)!=0) {
            	    foreach ($datos->mainLinks as $mainlink){
            	        new admLink($mainlink->link, $mainlink->img, $mainlink->text);
            	    }
            	}
            	?>
      		</ul>
    	</div>
	</div>
	<div class="col-6 mt-5">
        <div class="card">
        	<div class="card-header">
        		<b>Iconos barra de navegaci&oacute;n</b>
        	</div>
            <ul class="list-group list-group-flush">
            	<?php 
            	if (count($datos->navLinks)!=0) {
            	    foreach ($datos->navLinks as $navlink){
            	        new admLink($navlink->link, $navlink->img, $navlink->text);
            	    }
            	}
            	?>
      		</ul>
    	</div>
	</div>
	<div class="col-6 mt-5">
        <div class="card">
        	<div class="card-header">
        		<b>Men&uacute;s barra de navegaci&oacute;n</b>
        	</div>
            <ul class="list-group list-group-flush">
            	<?php 
            	if (count($datos->menus)!=0) {
            	    foreach ($datos->menus as $menu) {
            	        new admMenu($menu->name);
            	    }
            	}
            	?>
      		</ul>
    	</div>
	</div>
  </div>
</div>

<footer class="mt-5">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <p>Copyright © mGuerrero</p>
      </div>
    </div>
  </div>
</footer>
<!-- / FOOTER --> 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
