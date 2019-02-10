<?php
class mainIcon {
    function __construct($link, $image, $text) {
      echo "<a class='col-6 col-md-3 col-lg-2 mt-3 mb-3 link' href='".$link."'>";
      echo "<div class='mt-3'><p class='text-center'><img class='img-circle' alt='140x140' style='width: 100px; height: 100px;' src='".$image."' data-holder-rendered='true'></p>";
      echo "<p class='text-center'>".$text."</p></div></a>";
    }
  }
  
class admLink {
  function __construct($link, $image, $text) {
      echo '<li class="list-group-item">';
      // echo '<div class="card-body">';
      echo '<h5 class="card-title">'.$text.'</h5>';
      echo '<p class="card-text"><small><b>Enlace: </b>'.$link.'<br>';
      echo '<b>Im&aacute;gen: </b>'.$image.'</small></p>';
      //echo '</div>';
      echo '</li>';
  }
}

class admMenu {
  function __construct($name) {
      echo '<li class="list-group-item">';
      echo '<div class="card-body">';
      echo '<h5 class="card-title">'.$name.'</h5>';
      echo '</div></li>';
  }
}