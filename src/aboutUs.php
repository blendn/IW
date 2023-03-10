<?php
require_once 'core/init.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>About Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" type="text/css" href="styles/about.css">

</head>

<body>
    
    <?php include 'components/nav.php'; ?>

    <div class="section">
        <div class="container">
            <div class="title">
                <h1>About Us</h1>
            </div>
            <div class="content">
                <div class="article">
                    <h3>
                        We work tirelessly to source the world's best audio products. We evaluate products for
                        performance,
                        quality and long-term customer satisfaction. Our goal is that you love your purchase from
                        headphones.com for years, not just weeks. In a world bursting with product choices it's more
                        important than ever to apply a ruthless filter to product selection. Everything in our store has
                        met
                        an extremely high bar of quality and long-term customer satisfaction.
                    </h3>
                    <p>We want to give back to the audio community we love. That meant building and supporting The
                        HEADPHONE
                        Community forum and publishing reviews and educational content that people can trust. It also
                        meant
                        handling the inherent conflict of interest that comes with owning a store. We are serious about
                        providing honest information - even if it's negative information about products we sell.
                    </p>
                    <div class="button">
                        <a href="https://forum.headphones.com/">Read More</a>
                    </div>
                </div>
            </div>
            <div class="image-section">
                <img src="images/hp img.webp">
            </div>
            <div class="social">
                <a href="https://www.facebook.com/signup"><i class="fab fa-facebook-f"></i></a></i>
                <a href="https://twitter.com/i/flow/signup"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/accounts/login/"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <?php include 'components/footer.php'; ?>

</body>

</html>
