<!DOCTYPE html>
<nav>
    <div class="logo">
        <h1>Dusty Headphone<span>s</span></h1>
    </div>

    <ul>
        <li><a href="index.php#Home">Home</a></li>
        <li><a href="index.php#Products">Products</a></li>
        <li><a href="aboutUs.php">About Us</a></li>
        <li><a href="reviews.php">Reviews</a></li>
        <li><a href="news.php#News">News</a></li>
        <?php
            $user = new User();
            if (!$user->isLoggedIn())
            echo '<li><a href="login.php">Log In</a></li>';
        ?>
    </ul>

    <div class="icons">  
        <?php
            if ($user->isLoggedIn()) {
                echo '<a href="userDetails.php" style="color: black"><i class="fa-solid fa-user"></i></a>';
                echo '<a href="logout.php" style="color: black"><i class="fa fa-sign-out" aria-hidden="true"></i></a>';
            }
        ?>
    </div>
</nav>