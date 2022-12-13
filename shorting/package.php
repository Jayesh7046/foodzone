<?php

function nav_link($names, $color = "red")
{
  if (is_array($names)) {
    foreach ($names as $name) {
      echo ' <a href="#" class="hover:text-' . $color . '-500">' . $name  . '</a>';
    }
  } else {
    echo ' <a href="#" class="hover:text-' . $color . '-500">' . $names . '</a>';
  }
}

?>