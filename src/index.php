<?php 
require_once 'core/init.php';

$instance = DB::getInstance();

$instance->query("SELECT * FROM headphone");

$rows = $instance->results();
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Headphone Shop">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Dusty Headphones</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="shortcut icon" href="images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
   
    <?php include 'components/nav.php'; ?>

    <section>

        <div class="main" id="Home">
            <div class="main_content">
                <div class="main_text">
                    <h1>Headphone<br><span>Collection</span></h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                        id est laborum.
                    </p>
                    <div class="button">
                        <a href="index.php#Products">VIEW NOW</a>
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </div>
                <div class="main_image">
                    <img src="images/main.webp">
                </div>
            </div>
        </div>
    </section>

    <!--Products-->

    <div class="products" id="Products">
        <h1>Products</h1>
        <div class="box">
    <?php 
        foreach($rows as $headphone) {
        
    ?>
            <div class="card">
                <div class="image">
                    <img src=<?php echo "images/h" . $headphone->id . ".jpg"?>>
                </div>

                <div class="products_text">
                    <h2><?php echo $headphone->manufacturer ?></h2>
                    <p>
                        <?php echo $headphone->name?>
                    </p>
                    <h3><?php echo $headphone->price ?>$</h3>
                </div>
            </div>
    <?php
        }
    ?>
        </div>
    </div>
    <?php include 'components/footer.php'; ?>
</body>

</html>