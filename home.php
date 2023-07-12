<?php include 'config.php' ; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css?v=<?=$version?>" />
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css?v=<?=$version?>">

    <!-- custome css file link -->

    <link rel="stylesheet" href="css/style.css?v=<?=$version?>">


</head>


<body>
 
<!-- header section start -->


<section class="header">
    <a href="home.php" class="logo">travel</a>

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
    </nav>


    <div id="menu-btn" class="fas fa-bars"></div>

</section>


<!-- header section ends -->

<section class="home">



    <div class="swiper home-slider">


        <div class="swiper-wrapper">


            <div class="swiper-slide slide" id="bg">
                <div class="content">
                    <span>explore,discover,travel</span>
                    <h3>travel arround the world</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" id="bg1">
                <div class="content">
                    <span>explore,discover,travel</span>
                    <h3>discover the new places</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" id="bg2">
                <div class="content">
                    <span>explore,discover,travel</span>
                    <h3>make your tour worthwhile</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>


        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>


    </div>




</section>

<!-- home section starts -->







<!-- home section ends -->



<!-- services section starts -->


<section class="services">

<h1 class="heading-title"> our services </h1>


<div class="box-container">

<div class="box">
    <img src="img/icon-1.png" alt="">
    <h3>adventure</h3>
</div>

<div class="box">
    <img src="img/icon-2.png" alt="">
    <h3>tour guide</h3>
</div>

<div class="box">
    <img src="img/icon-3.png" alt="">
    <h3>trakking</h3>
</div>

<div class="box">
    <img src="img/icon-4.png" alt="">
    <h3>camp fire</h3>
</div>

<div class="box">
    <img src="img/icon-5.png" alt="">
    <h3>off road</h3>
</div>

<div class="box">
    <img src="img/icon-6.png" alt="">
    <h3>camping</h3>
</div>

</div>


</section>


<!-- services section ends -->

















<!-- footer section starts -->

<section  class="footer">

<div  class="box-container">

<div class="box">
    <h3>quick links</h3>
    <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
    <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
     <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
    <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
</div>


<div class="box">
    <h3>extra links</h3>
    <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
    <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
    <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
    <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
</div>



<div class="box">
    <h3>contact info</h3>
    <a href="#"> <i class="fas fa-phone"></i> +8801303-579271 </a>
    <a href="#"> <i class="fas fa-phone"></i> +8801750-861021 </a>
    <a href="#"> <i class="fas fa-envelope"></i> abdulwahab22400@gmail.com </a>
    <a href="https://goo.gl/maps/tRq1ZELx4uAp8Qhq8"> <i class="fas fa-map"></i> BAUET,Kadirabad Contonment,Natore</a>
</div>

<div class="box">
    <h3>follow us</h3>
    <a href="https://www.facebook.com/wahabmridul"><i class="fab fa-facebook-f"></i> facebook</a>
    <a href="https://www.instagram.com/abdul_wahab_mridul/"><i class="fab fa-instagram"></i> instagram</a>
    <a href="https://www.linkedin.com/in/md-abdul-wahab-0a88621a7/"><i class="fab fa-linkedin"></i> linkedin</a>
</div>

</div>


<div class="credit">created by <span>Mridul</span> | all rights reserved!</div>

</section>


<!-- footer section ends -->





<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="js/script.js"></script>


</body>
</html>