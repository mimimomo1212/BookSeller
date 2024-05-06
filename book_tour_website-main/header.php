<?php
if (isset($message)) {
    foreach ($message as $message) {
        echo '
      <div class="message">
         <span>' . $message . ' <i class="fa fa-exclamation-triangle" aria-hidden="true"></i></span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
    }
}
?>

<header class="header">
    <div class="header-2">
        <div class="flex">
            <a href="home.php" class="logo">Watermelon Store</a>

            <nav class="navbar">
                <a href="home.php">Home</a>
                <a href="about.php">Detail</a>
                <a href="shop.php">Shop</a>
                <a href="contact.php">Message</a>
                <a href="orders.php">Orders</a>
            </nav>

            <div class="icons">
                <div id="menu-btn" class="fas fa-bars"></div>
                <a href="search_page.php" class="fas fa-search"></a>
                <?php

                if (isset($user_id)) {
                    $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or
                        die('query failed');
                    $cart_rows_number = mysqli_num_rows($select_cart_number);
                ?>
                <?php } ?>
                <div id="user-btn" class="fas fa-user"></div>
                <?php if (isset($user_id)) { ?>
                    <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?= $cart_rows_number; ?>)</span>
                    </a>
                <?php } ?>
            </div>

            <div class="user-box">
                <?php if (!isset($user_id)) { ?>
                    <p><a class="delete-btn" href="login.php">login</a> <br /> or <br /> <a class="delete-btn" href="register.php">register</a></p>
                <?php } ?>
                <?php if (isset($user_id)) { ?>
                    <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
                    <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
                    <a href="logout.php" class="delete-btn">logout</a>
                <?php } ?>
            </div>
        </div>
    </div>

</header>