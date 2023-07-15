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
    <a href="home.php" class="logo">ToiToi</a>

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



<!-- home about section starts -->




<section class="home-about">
    
<div class="image">
    <img src="img/about1.jpg" alt="" />
</div>

<div class="content">
    <h3>about us</h3>
    <p>Welcome, your premier destination for unforgettable travel experiences in Bangladesh. 
        We are a dedicated team of travel enthusiasts, committed to providing you with exceptional service, personalized 
        itineraries, and a seamless journey throughout this beautiful country.As a full-service travel agency, 
        we handle all aspects of your trip, from transportation and accommodation to guided tours and immersive activities. 
        Rest assured that we collaborate with trusted partners, including reputable hotels, reliable transportation providers,
        and knowledgeable local guides, to guarantee your comfort, safety, and enjoyment.</p>
        <a href="about.php" class="btn">read more</a>
</div>


</section>





<!-- home about section ends -->









<!-- home package section starts -->




<section class="home-packages">

 <h1 class="heading-title">our packages</h1>

 <div class="box-container">

     <div class="box">
        <div class="image">
            <img src="img/image1.jpg" alt="">
        </div>
        <div class="content">
            <h3>Dhaka package-1</h3>
            <p>Dhaka, the capital city of Bangladesh, is a 
                vibrant metropolis that seamlessly blends rich 
                history, bustling streets, and a lively urban 
                atmosphere. It is a city of contrasts, where 
                traditional heritage coexists with modern 
                developments, offering a unique experience
                 to visitors.</p>
                <a href="book.php" class="btn">book now</a>
        </div>
     </div>

     <div class="box">
        <div class="image">
            <img src="img/img2.jpg" alt="">
        </div>
        <div class="content">
            <h3>Dhaka package-2</h3>
            <p>Old Dhaka, the historic heart of Bangladesh's capital, 
                offers a captivating experience with its architectural
                 wonders, diverse culture, bustling streets, 
                 religious sites, vibrant festivals, and tantalizing 
                 street food.</p>
                <a href="book.php" class="btn">book now</a>
        </div>
     </div>

     <div class="box">
        <div class="image">
            <img src="img/img3.jpg" alt="">
        </div>
        <div class="content">
            <h3>Old dhaka package</h3>
            <p>Old Dhaka, the historic heart of Bangladesh's capital, 
                offers a captivating experience with its architectural
                 wonders, diverse culture, bustling streets, religious 
                 sites, vibrant festivals, and tantalizing street food.
                </p>
                <a href="book.php" class="btn">book now</a>
        </div>
     </div>

 </div>

 <div class="load-more"><a href="package.php" class="btn">load more</a></div>

</section>




<!-- home package section ends -->



<!-- home offer section strats -->



<section class="home-offer">


     <div class="content">
        <h3>upto 50% off</h3>
        <p>Attention all travel enthusiasts and adventurers! We are thrilled to announce a limited-time offer 
            that will make your dream trip to Bangladesh even more irresistible. Prepare yourself for an 
            unforgettable journey as we present a remarkable 50% discount on our exclusive travel packages.</p>
            <a href="book.php" class="btn"> book now</a>
     </div>


</section>




<!-- home offer section ends -->


















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