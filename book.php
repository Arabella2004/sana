<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>about</title>

        <!-- swiper css link -->
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">

        <!-- font awesome cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!-- custom css file link -->
        <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section starts -->

<section class="header">

    <a href="home.php" class="logo">TI᙭EᖇY</a>

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="pack.php">shows</a>
        <a href="book.php">Login/Register</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
</section>


<!--header secton ends-->

<div class="heading" style="background:url(header-bg-30.jpeg) no-repeat">
    <h1>GET YOUR TICKETS NOW!</h1>
</div>

<!--bookiing secton starts-->

<section class="booking">

    <h1 class="heading-title"></h1>

    <form action="book_form.php" method="post" class="book-form">

    <div class="flex">
        <div class="inputBox">
            <span>name : </span>
            <input type="text" placeholder="enter your name" name="name">
        </div>
        <div class="inputBox">
            <span>email : </span>
            <input type="email" placeholder="enter your email" name="email">
        </div>
        <div class="inputBox">
            <span>phone : </span>
            <input type="number" placeholder="enter your number" name="phone">
        </div>
        <div class="inputBox">
            <span>address : </span>
            <input type="text" placeholder="enter your address" name="address">
        </div>
        <div class="inputBox">
            <span>what concert : </span>
            <input type="dropdown"  name="select a concert">
        </div>
        <div class="inputBox">
            <span>how many : </span>
            <input type="number" placeholder="number of ticket" name="guests">
        </div>
        <div class="inputBox">
            <span>birthday: </span>
            <input type="date" name="bday">
        </div>
        <div class="inputBox">
            <span>date today: </span>
            <input type="date" name="date">
        </div>
    </div>

    <input type="submit" value="submit" class="btn" name="send">

    </form>

</section>






<!--booking secton ends-->




<!-- footer section starts -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i>home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i>about</a>
            <a href="package.php"> <i class="fas fa-angle-right"></i>shows</a>
            <a href="book.php"> <i class="fas fa-angle-right"></i>Login/Register</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i>ask questions</a>
            <a href="#"> <i class="fas fa-angle-right"></i>about us</a>
            <a href="#"> <i class="fas fa-angle-right"></i>privacy policy</a>
            <a href="#"> <i class="fas fa-angle-right"></i>terms of use</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i> +123 456 7890</a>
            <a href="#"><i class="fas fa-phone"></i> +123 456 7890</a>
            <a href="#"><i class="fas fa-envelope"></i> lopez - brady</a>
            <a href="#"><i class="fas fa-map"></i> antipolo, rizal</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fas fa-facebook-f"></i>facebook</a>
            <a href="#"><i class="fas fa-twitter"></i> twitter</a>
            <a href="#"><i class="fas fa-instagram"></i> instagram</a>
            <a href="#"><i class="fas fa-linkedin"></i> linkedin</a>
        </div>
    
    </div>

    <div class="credit"> created by <span>lopez - brady</span> │ all rights reserved! </div>

</section>



<!-- swiper js link -->
<script src="https://unkpg.com/swiper@7/swiper-bundle.min.js"></script>
<!-- custom js file link -->
<script src="js/script.js"></script>

</body>
</html>