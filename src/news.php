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
    </div>
    <?php include 'components/footer.php' ?>
    <script src="js/slider.js"></script>
</body>
</html>