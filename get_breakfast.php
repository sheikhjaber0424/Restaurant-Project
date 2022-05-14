<?php

include_once('config.php');

$result = mysqli_query($conn,"SELECT * FROM meals WHERE meal_type='breakfast'");

?>