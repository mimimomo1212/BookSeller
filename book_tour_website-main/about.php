<?php

include 'config.php';

session_start();



if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/Aboutus.css">

</head>

<body>

    <?php include 'header.php'; ?>

    <div class="heading">
        <h3>about us</h3>
        <p> <a href="home.php">home</a> / about </p>
    </div>

    <section class="about">

        <div class="flex">

            <div class="image">
                <img src="images/about-img.jpg" alt="">
            </div>

            <div class="content">
                <h3>why choose us?</h3>
                <p>The world's most sophisticated print-on-demand technology prints books professionally. All our books
                    have full-color covers. Black-and-white and color inner page printing are available. Self-published
                    paperback/hardcover books are top-notch!</p>
                <a href="contact.php" class="btn">contact us</a>
            </div>

        </div>

    </section>


    <div id="container">

        <div class="product-details">

            <h1>
                <!-- Tên nhóm  -->
            </h1>


            <p class="information">"A problem-solver who is passionate about learning, wanting to join a group of
                like-minded programmers. Looking for a suitable position at the company with projects with test."</p>

            <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            </ul>



        </div>

        <div class="product-image">

            <img src="images\profile.jpg" alt="">


            <div class="info">
                <h2>
                    <!-- Tên nhóm -->
                </h2>
                <ul class="ia">
                    <!-- thông tin nhóm -->
                    <!-- <li></li>
                    <li></li>
                    <li></li> -->
                </ul>
            </div>
        </div>
    </div>

    </div>









    <?php include 'footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>