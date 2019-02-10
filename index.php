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

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php
  require 'classes.php';
  require 'bsClasses.php';
  
  if ($jIni = filter_input(INPUT_GET, "ini")) {
    $string = file_get_contents($jIni.".json");
  } else {
    $string = file_get_contents("main.json");
  };
  
  $datos = json_decode($string);
?>

<link rel="shortcut icon" type="image/png" href="<?php echo $datos->shortcut_icon;?>">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="container">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" id = "menus">
		  <!-- ENLACES PRINCIPALES DE LA BARRA DE NAV -->
		  <?php
		  if (count($datos->navLinks)!=0) {
    		  foreach ($datos->navLinks as $navLink) {
    		      // new navIcon($navLink->link, $navLink->img, $navLink->text);
    		      $it = new navbarItem($navLink->link, $navLink->text);
    		      $it->image = $navLink->img;
    		      $it->show();
    		  }
		  }
		  ?>
		  
		  
          <!-- MEN�S -->
          <?php
          if (count($datos->menus)!=0){
            foreach ($datos->menus as $menu) {
              // new menu($menu->name, $menu->items);
              $mn = new navbarDropdown($menu->name);
              // $mn->items = [];
              foreach ($menu->items as $item) {
                  array_push($mn->items, new navbarDropdownItem($item->link, $item->text));
              }
              $mn->show();
            }
          }
          ?>

        </ul>

        

        <!--
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        -->
    </div>
  </div>
</nav>

<div class="container">
  <div class="row" id="mainIcons">

    <!-- ICONOS PRINCIPALES -->
    <?php
    if (count($datos->mainLinks)!=0){
      foreach ($datos->mainLinks as $data) {
        new mainIcon($data->link, $data->img, $data->text);
      }
    }
    ?>
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
