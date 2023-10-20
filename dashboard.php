<?php
require 'includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/95a2002ecf.js" crossorigin="anonymous"></script>
    <!-- External CSS -->
    <link href="css/style.css" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body>
    <!-- Navbar Starts -->
    <?php include './includes/header.php' ?>
    <!-- Navbar Ends -->
    <!-- Hero Section Start-->
    <section class="home" id="home">
        <div class="content">
            <h2>Shop With<br /><span>Easy Buy Nest</span></h2>
            <p>We can help you to <span class="typing-text"> </span><br />and Comfortable Way to Shop</p>
            <p style="margin:0; padding:0;">Hello<span> <?php echo $_SESSION['name'] ?> </span></p>
            <div class="socials">
                <ul class="social-icons">
                    <li><a class="linkedin" aria-label="LinkedIn" href="https://www.linkedin.com/in/imps1001/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                    <li><a class="github" aria-label="GitHub" href="https://github.com/imps1001" target="_blank"><i class="fab fa-github"></i></a></li>
                    <li><a class="telegram" aria-label="Telegram" href="https://t.me/imps1001" target="_blank"><i class="fab fa-telegram-plane"></i></a></li>
                    <li><a class="instagram" aria-label="Instagram" href="https://www.instagram.com/govind_sakhi_007/"><i class="fab fa-instagram" target="_blank"></i></a></li>
                    <li><a class="dev" aria-label="Dev" href="https://www.youtube.com/@codeatrandom" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="image">
            <img draggable="false" class="tilt" src="./images/image1.png" />
        </div>
    </section>
    <!-- Hero Section End  -->
    <!-- About us section starts here -->
    <section class="about" id="about">
        <h2 class="heading"><i class="fa-solid fa-users"></i> About <span>Us</span></h2>
        <div class="row">
            <div class="image">
                <img src="./images/Hero.png" draggable="false" class="tilt" alt="Hero" />
            </div>
            <div class="content">
            <h3>Hello,users</h3>
                <p>Our mission is to provide you with high-quality, stylish, 
                    and affordable home furnishing solutions. We believe in making your 
                    shopping experience as convenient as possible. At Easy Buy Nest, 
                    we understand the importance of creating a comfortable and 
                    stylish living space that reflects your unique taste.</p>
                <p>
                Our dedicated team of professionals works tirelessly to curate a diverse range
                 of furniture and décor items that cater to different styles and budgets. 
                 We take pride in offering an extensive catalog of products to make your 
                 home furnishing journey simple and enjoyable.
                </p>
                <p>At Easy Buy Nest, you'll find everything you need to transform your living space,
                     from trendy furniture to decorative accents. We're here to assist you in creating a
                      home that you'll love. </p>
                

                <div class="profilebtn" style="margin-bottom:0px;">
                    <a href="#products" target="_blank" class="btn"><span>View Our Products</span>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
    </section>
    <!-- particle.js links -->
    <script src="./js/particles.min.js"></script>
    <script src="./js/app.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>