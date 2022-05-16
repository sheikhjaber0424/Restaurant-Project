<?php

include_once('config.php');

$result1 = mysqli_query($conn,"SELECT * FROM meals where meal_type='breakfast'");
$result2 = mysqli_query($conn,"SELECT * FROM meals where meal_type='lunch'");
$result3 = mysqli_query($conn,"SELECT * FROM meals where meal_type='dinner'");
$result4 = mysqli_query($conn,"SELECT * FROM meals where meal_type='Drink'");

?>