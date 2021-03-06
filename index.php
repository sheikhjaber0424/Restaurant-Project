<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">

  <img src="img/sushi.jpg" alt="" style="width:75px; height:75px; margin:10px; border-radius:10px ">

    <a class="navbar-brand" href="#">FWA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#about">About</a>
        </li>
    
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#portfolio">Gallery</a>
        </li>

     
          
        
      
      </ul>
    </div>
  </div>
</nav>


<?php

if(isset($_GET['booking']) && !empty($_GET['booking'])) // $_GET['booking'] link theke bookin= er parameter nibe
{ 
  echo'<div class="alert alert-success" role="alert">'.$_GET['booking']. '</div>';
}

?>



<!------- Header Section ------->
<header id="header">
    <div class="intro" style="background: url('res.jpg') no-repeat center center !important;">
    
        <div class="overlay">
        <div class="container">
            <div class="row">
            
                <div class="intro-text">
                    <h1>FOOD</h1>
                    <h1>WITH</h1>
                    <h1>ATTITUDE</h1>
                    <p>Restaurant / Coffee / Breakfast</p>
                    <a href="" class="btn btn-light btn-lg page-scroll">Discover Our Sory</a>
                </div>
            </div>
        </div>
        </div>

    </div>

</header>
 


<!------- About Section ------->
<div id="about">
    <div style="margin-inline: 10%; margin-block: 100px">
        <div class="row" style="display: flex; flex-direction:row">
            <div class="col-xs-12 col-md-6">
                <div class="about-img">
                    <img src="img/about.jpg" style="width: 100%;" class="img-responsive" alt="" >
                </div>
            </div>    
            <div class="col-xs-12 col-md-6">
                <div class="about-text">
                    <h2>Our Restaurant</h2>
                    <hr>
                     <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui accusantium at quibusdam quidem dolor ut ullam tempore vitae quasi esse quia asperiores ab, aliquam, deserunt id itaque sit laborum nobis!</p>
                    <h3>Awards</h3> 
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, tempore? Quisquam architecto nam, officiis autem ex sapiente quo repudiandae ab laboriosam dolor iste illum sunt nobis accusantium atque? Eveniet, iusto.</p>
                </div>
            </div>    
            
        </div>
    </div>
</div>

<!-- Restaurant Menu Section -->
<div id="restaurant-menu">
  <div class="section-title text-center">
    <div class="overlay" style="padding: 80px 0; background: rgb(0,0,0,7);"  >
      <h2>Menu</h2>
      <hr/>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui ab eos voluptates accusamus ratione, quo aliquam, esse illum nihil id odit assumenda vitae labore eligendi fuga at, dolore velit quos?</p>

    </div>
  </div>


<?php
include('get_meals.php');
?>



<div class="container">
  <div class="row">
    
    <div class="col-xs-12 col-md-6">
      <div class="menu-section">
        <h2 class="menu-section-title">Breakfast</h2>
      <hr/>   

      <?php
    
          while($row1 = mysqli_fetch_assoc($result1))
            {
            echo '<div class="menu-item">'.
             '<div class="menu-item-name">'.$row1['meal_name'].'</div>'.
              '<div class="menu-item-price">'.$row1['meal_price'].'</div>'.
             '<div class="menu-item-description">'.$row1['meal_description'].'</div>'.
            '</div>';
            }
          
        
        ?>

      </div> 
    </div>

    <div class="col-xs-12 col-md-6">
      <div class="menu-section">
        <h2 class="menu-section-title">Main Meals</h2>
        <hr/>
        <?php
    
          while($row2 = mysqli_fetch_assoc($result2))
            {
            echo '<div class="menu-item">'.
             '<div class="menu-item-name">'.$row2['meal_name'].'</div>'.
              '<div class="menu-item-price">'.$row2['meal_price'].'</div>'.
             '<div class="menu-item-description">'.$row2['meal_description'].'</div>'.
            '</div>';
            }
          
        
        ?>

      </div>

    </div>
    <div class="col-xs-12 col-md-6">
      <div class="menu-section">
        <h2 class="menu-section-title">Dinner</h2>
        <hr/>

        <?php
    
    while($row3 = mysqli_fetch_assoc($result3))
      {
      echo '<div class="menu-item">'.
       '<div class="menu-item-name">'.$row3['meal_name'].'</div>'.
        '<div class="menu-item-price">'.$row3['meal_price'].'</div>'.
       '<div class="menu-item-description">'.$row3['meal_description'].'</div>'.
      '</div>';
      }
    
  
  ?>


        

      </div>

    </div>
    <div class="col-xs-12 col-md-6">
      <div class="menu-section">
        <h2 class="menu-section-title">Coffee/Drinks</h2>
        <hr/>

        <?php
    
    while($row4 = mysqli_fetch_assoc($result4))
      {
      echo '<div class="menu-item">'.
       '<div class="menu-item-name">'.$row4['meal_name'].'</div>'.
        '<div class="menu-item-price">'.$row4['meal_price'].'</div>'.
       '<div class="menu-item-description">'.$row4['meal_description'].'</div>'.
      '</div>';
      }
    
  
  ?>

      </div>

    </div>
  </div>
</div>
</div>




<!--------- Gallery --------->
<div id="portfolio">
  <div class="section-text text-center">
    <div class="overlay" style="padding: 80px 0; background: rgb(0,0,0,7)">
      <h2 style="color :white ">Gallery</h2>
      <hr>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit!</p>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="categories">
        <ul class="cat">
            <li>
              <ol class="type">
              <li ><a href="index.php" class="active">All</a></li>
              <li ><a href="index.php?meal_type=breakfast" >Breakfast</a></li>
              <li ><a href="index.php?meal_type=dinner" >Dinner</a></li>
              <li ><a href="index.php?meal_type=drink" >Drinks/Coffee</a></li>
               
              </ol>
            </li>
        </ul>
        <fiv class="clearfix"></fiv>
      </div>
    </div>


    <div class="row">
      <div class="portfolio-items row ">
  
      <?php 
      include('get_images.php');
      ?>

      <?php 

      if(!isset($_GET['meal_type'])){

      while($row = mysqli_fetch_assoc($meals_images)){
        ?>

      


        <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
          <div class="portfolio-item">
            <div class="hover-bg">
              <div class="hover-text">
                <h4>Meal Name</h4>
              </div>
              <img src="<?php echo 'img/'.$row['meal_image']; ?>" class="img-responsive"  style="height:300px; width:100%"alt="">
            </div>
          </div>
        </div>

    <?php
      }
   
    ?>

<?php
 }
else
{ 
  if($_GET['meal_type']=='breakfast')
  { 
    while($row = mysqli_fetch_assoc($meals_images)){ 
        if($row['meal_type']=='breakfast')
        {
          echo 
          '  <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
          <div class="portfolio-item">
            <div class="hover-bg">
              <div class="hover-text">
                <h4>Meal Name</h4>
              </div>
              <img src="img/'.$row['meal_image'].'" class="img-responsive"  style="height:300px; width:100%"alt="">
            </div>
          </div>
        </div>';
        }
    }
  }
  else  if($_GET['meal_type']=='dinner')
  {
    while($row = mysqli_fetch_assoc($meals_images)){ 
    if($row['meal_type']=='dinner'){

      echo 
      '  <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
      <div class="portfolio-item">
        <div class="hover-bg">
          <div class="hover-text">
            <h4>Meal Name</h4>
          </div>
          <img src="img/'.$row['meal_image'].'" class="img-responsive"  style="height:300px; width:100%"alt="">
        </div>
      </div>
    </div>';

    }
 }
}

else if($_GET['meal_type']=='drink')
  {
    while($row = mysqli_fetch_assoc($meals_images)){ 
    if($row['meal_type']=='drink'){

      echo 
      '  <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
      <div class="portfolio-item">
        <div class="hover-bg">
          <div class="hover-text">
            <h4>Meal Name</h4>
          </div>
          <img src="img/'.$row['meal_image'].'" class="img-responsive"  style="height:300px; width:100%"alt="">
        </div>
      </div>
    </div>';

    }
 }
}

else{

}


?>

<?php
}
?>
     
    

      </div>
    </div>


  </div>
</div>

<!------Book Table ----->
<div class="container book-table" style="background-color:rgb(216, 212, 212) ;margin:0  auto ;">
  <h2 class="text-center btn-lg" style="background-color: #8eb640; margin:30px; font-size: 25px; color:#fff">Book Table</h2>
  <hr/>
  <div class="row">

  <div class="col-sm-12 col-md-7">
    <img src="img/main.jpg" style="width:100%; margin-top: 20px; " class="img-responsive">
  </div>

    <div class="col-sm-12 col-md-5">

      <form method="POST" action="book_table.php">
        <div class="form-group book-element" style="margin-bottom: 20px">
          <label >Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="name" required>
        </div>

        <div class="form-group book-element" style="margin-bottom: 20px">
          <label >Number of Seats</label>
          <input type="text" class="form-control" id="seats" name="seats" placeholder="4" min="1" max="9" required>
        </div>

        <div class="form-group book-element" style="margin-bottom: 20px">
          <label >Day</label>
          <select class="form-select" name="day" id="day">
            <option value="monday">Monday</option>
            <option value="tuesday">Tuesday</option>
            <option value="wednesday">Wednesday</option>
            <option value="thrusday">Thrusday</option>
            <option value="friday">Friday</option>
          </select>
        </div>

        <div class="form-group book-element" style="margin-bottom: 20px">
          <label >Meal</label>
          <select class="form-select" name="meal" id="meal">
            <option value="breakfast">Breakfast</option>
            <option value="dinner">Dinner</option>
            <option value="coffee">Coffee</option>
            <option value="snack">Snack</option>
            
          </select>
        </div>

        <div class="form-group book-element" style="margin-bottom: 20px">
        
          <input type="submit" class="btn btn-success" id="submitBtn" value="Book now" />
        </div>


      </form>
    </div>
  </div>
</div>


<div style=" background-color:rgb(58,58,58); color: #fff;padding: 50px; margin-top:30px">
  <div class="row">
      <div class="col-md-4 col-sm-12 text-center">
        <p class="footer-title"  style="text-transform: uppercase;  color: #8eb640;font-weight: 600;">Address</p>
        <p>Uttara Azampur</p> 
        <p>Dhaka</p>
      </div>

      <div class="col-md-4 col-sm-12 text-center">
         <p class="footer-title" style="text-transform: uppercase;  color: #8eb640;font-weight: 600;">Opening Hours</p> 
         <p>Mon-Thrus 9:00AM - 11:00PM</p> 
         <p>Fri-Sun 10:00AM - 11:30PM</p>
      </div>

      <div class="col-md-4 col-sm-12 text-center">
        <p class="footer-title"  style="text-transform: uppercase;  color: #8eb640;font-weight: 600;">Contact Info</p>
        <p>Phone +880-1521764892</p>
        <p>Email: sheikhjaber666@gmail.com</p>
      </div>
  </div>
  

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>