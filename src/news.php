<?php
require_once 'core/init.php';
$instance = DB::getInstance();

$instance->query("SELECT * FROM articles");

$results = $instance->results();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <title>News</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
</head>
<body>
    <?php include 'components/nav.php' ?>
    <div class="news" id="News">
        <h1>News</h1>
        <div class="carousel-container">
            <i class="fas fa-arrow-left" id="prevBtn"></i>
            <i class="fas fa-arrow-right" id="nextBtn"></i>
            <div class="carousel-slide">
                <img src="images/slider/s3.jpg" id="lastClone" alt="">
                <img src="images/slider/s1.jpg" alt="">
                <img src="images/slider/s2.jpg" alt="">
                <img src="images/slider/s3.jpg" alt="">
                <img src="images/slider/s1.jpg" id="firstClone" alt="">
            </div>
        </div>
        <div class="article_1">
            <h2><?php echo $results[0]->article_name; ?></h2>
            <p><?php echo $results[0]->article_content; ?></p>
        </div>
        <div class="article_2">
            <h2><?php echo $results[1]->article_name; ?></h2>
            <p><?php echo $results[1]->article_content; ?></p>
        </div>
        <div class="article_3">
            <h2><?php echo $results[2]->article_name; ?></h2>
            <p><?php echo $results[2]->article_content; ?></p>
        </div>
    </div>
    <?php include 'components/footer.php' ?>
    <script src="js/slider.js"></script>
</body>
</html>