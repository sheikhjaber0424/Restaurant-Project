<?php

include_once('config.php');

  $meals_images =  mysqli_query($conn,"SELECT meal_image,meal_name,meal_type FROM meals");

?>