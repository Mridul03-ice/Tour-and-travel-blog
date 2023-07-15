<?php include 'config.php' ; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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

<div class="heading" id="heading">
    <h1>about us</h1>
</div>



<!-- about section starts -->



<section class="about">


    <div class="image">
        <img src="img/about1.jpg" alt="">
    </div>

    <div class="content">
        <h3>why choose us?</h3>
        <p> With years of experience in the travel industry, our team possesses in-depth knowledge of Bangladesh's hidden gems, iconic landmarks,
            and off-the-beaten-path destinations. We will curate a personalized itinerary that showcases the very best of this remarkable country, ensuring you have an authentic and enriching experience.</p>
        <p>We are committed to delivering excellence in every aspect of your trip. From handpicked accommodations to reliable transportation and expert guides, 
            we only partner with trusted and reputable providers to ensure your comfort, safety, and satisfaction throughout your journey. Rest assured, we strive for nothing less than the highest quality service.</p>
        
        <div class="icons-container">
            <div class="icons">
                <i class="fas fa-map"></i>
                <span>top destinations</span>
            </div>
            <div class="icons">
                <i class="fas fa-hand-holding-usd"></i>
                <span>affordable price</span>
            </div>
            <div class="icons">
                <i class="fas fa-headset"></i>
                <span>24/7 guide service</span>
            </div>
        </div>
    </div>

</section>






<!-- about section ends -->



<!-- review section starts -->



<section class="reviews">

<h1 class="heading-title">clients review</h1>

    <div class="swiper reviews-slider">

    <div class="swiper-wrapper">

    <div class="swiper-slide slide">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Nulla, animi. Ut suscipit quidem modi deserunt ipsum hic
             accusamus, neque aperiam accusantium, itaque, unde illo fuga dolor similique aut. Quaerat, sequi?</p>
             <h3>Alice parker</h3>
             <span>traveler</span>
             <img src="img/pic1.jpg" height="150px" width="150px" alt="" >
    </div>

    <div class="swiper-slide slide">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
            Quis vero ducimus voluptas animi nihil odio, obcaecati 
            iure libero, fugit id distinctio a harum, nisi dolorum 
            excepturi repellendus perferendis omnis ipsum asperiores 
            corporis sequi ea modi? Consequatur necessitatibus magnam 
            dignissimos impedit?</p>
             <h3>john doe</h3>
             <span>traveler</span>
             <img src="img/pic2.jpg" height="150px" width="150px" alt="" >
    </div>

    <div class="swiper-slide slide">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Deleniti sapiente ipsam quos reiciendis incidunt blanditiis
            ratione! Veritatis, totam sapiente molestiae quisquam ea quae! I
            usto neque quisquam debitis labore impedit repellendus porro 
            voluptate odio sint harum?</p>
             <h3>gigi hadid</h3>
             <span>traveler</span>
             <img src="img/pic3.jpg" height="150px" width="150px" alt="" >
    </div>

    <div class="swiper-slide slide">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Deleniti sapiente ipsam quos reiciendis incidunt blanditiis
            ratione! Veritatis, totam sapiente molestiae quisquam ea quae! I
            usto neque quisquam debitis labore impedit repellendus porro 
            voluptate odio sint harum?</p>
             <h3>richard jones</h3>
             <span>traveler</span>
             <img src="img/pic4.jpg" height="150px" width="150px" alt="" >
    </div>

    <div class="swiper-slide slide">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Deleniti sapiente ipsam quos reiciendis incidunt blanditiis
            ratione! Veritatis, totam sapiente molestiae quisquam ea quae! I
            usto neque quisquam debitis labore impedit repellendus porro 
            voluptate odio sint harum?</p>
             <h3>alexa terry</h3>
             <span>traveler</span>
             <img src="img/pic5.jpg" height="150px" width="150px" alt="" >
    </div>

    <div class="swiper-slide slide">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Eaque consequuntur asperiores saepe obcaecati, eveniet
             laborum. Cumque vero quo nam, animi earum atque nisi 
             laborum ducimus?</p>
             <h3>steven gerrad</h3>
             <span>traveler</span>
             <img src="img/pic6.jpg" height="150px" width="150px" alt="" >
    </div>

    </div>

    </div>

</section>










<!-- review section endss -->














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