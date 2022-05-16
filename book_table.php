<?php

    include_once('config.php');

    if(isset($_POST['name']) &&  isset($_POST['seats']) && isset($_POST['day']) && isset($_POST['meal']))
    {

        
        $name = $_POST['name'];
        $seats = $_POST['seats'];
        $day = $_POST['day'];
        $meal = $_POST['meal'];


        $result = mysqli_query($conn,"INSERT INTO bookings (booking_name,booking_seats,booking_day,booking_meal)
        VALUES('$name','$seats','$day','$meal')");

        if($result)
        {
            //success
            header('location: index.php?booking=You have successfully booked a table');

        }
        else
        {//failure
            header('location: index.php?booking=Something went wrong tey again.');
        }
    }
    else 
    {
        header('location: index.php?booking=Please fill out the form');
    }
?>