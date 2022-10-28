<?php 
if (key_exists('lang', $_GET)) {
    if ($_GET['lang'] === 'fr') {
        require_once './local/fr.php';
    } elseif ($_GET['lang'] === 'en') {
        require_once './local/en.php';
    } else {
        require_once './local/fr.php';
    }
} else {
    require_once './local/en.php';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="./img/logo.svg" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- swiper-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- styles -->
    <link rel="stylesheet" href="./scss/main.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Flix Go Movie</title>
</head>

<body>
    <!-- header-->
    <aside>
        <ul class="header_nav"><?php
            foreach ($haed['head'] as $link => $value) {
                echo "<li><a href='$link'>$value</a></li>";
            }
            echo "<li><a href='./signin.php'>Sign in</a></li>";
?>
        </ul>
    </aside>
    <header>
        <div class="container">
            <div class="row align-item_center">
                <div class="logo">
                    <a href="#">
                        <img src="./img/logo.svg" alt="Logo image">
                    </a>
                </div>

                <div class="menu">
                    <ul>
                        <?php
                        foreach ($head['head'] as $link => $value) {
                            echo "<li><a href='$link'>$value</a></li>";
                        }
                        ?>
                    </ul>
                </div>
                <div class="btn-header">
                    <button class="search">
                        <i class="fas fa-search"></i>
                    </button>
                   <a href="<?= $head['lang']['href'] ?>" class="language"><?= $head['lang']['flag'] ?></a>
                    <a href="./signin.php" class="login"><?= $head['sign in'] ?></a>
                    <button class="nav-toggle">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="search-box hidden">
            <div class="container">
                <form action="#">
                    <input type="text" placeholder="Im looking for ...">
                    <button class="btn">search</button>
                </form>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <section class="new-item_season">
                <div class="new-item_season_head">
                    <h1><?php echo $items['item']['new items'] ?></h1>
                </div>
                <div class="new-item_season_btn">
                    <button class="arrow-left-slideShow">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>
                    <button class="arrow-right-slideShow">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </section>
            <section class="slideshow">
                <!-- Slider main container -->
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <?php foreach ($movies as $value) { ?>
                            <div class="swiper-slide">
                                <article class="card">
                                    <div class="card_cover">
                                        <a href="">
                                        <img src=<?php echo $value[0] ?> alt="movie 1">
                                        </a>
                                    </div>
                                    <div class="card_content">
                                        <a href=""><h2 class="card_title"> <?php echo $value[1] ?></h2></a>
                                        <a href="#" class="card_category"> <?php echo $value[2] ?></a>
                                        <p class="card_rate"><i class="fa-solid fa-star"></i><?php echo $value[3] ?></p>
                                    </div>
                                </article>
                            </div>
                        <?php } ?>
                    </div>

                </div>
            </section>

            <section class="new_releases">
                <div class="new_releases_head">
                    <h2><?php echo $items['item']['new releases']?></h2>
                </div>
                <div class="new_releases_list">
                    <?php foreach ($movies as $movie) { ?>
                        <article class="new_releases_list_elem">
                            <a href="#">
                                <img src=<?php echo $movie[0] ?> alt="">
                            </a>
                            <div class="card_content">
                                <h3 class="card_title">
                                    <a href="#"><?php echo $movie[1] ?></a>
                                </h3>
                                <span class="card_category">
                                    <a href="#"><?php echo $movie[2] ?></a>
                                </span>
                                <div class="card_description">
                                    <p>it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed t</p>
                                </div>
                            </div>
                        </article>
                    <?php } ?>
                </div>
            </section>
        </div>
    </main>
    <footer>
        <div class="container">
            <div id="footer-app">
                <h6 class="footer_title">
                <?php echo $items['item']['download app'] ?>   
                    </h3>
                    <div id="footer-app_icon">
                        <a href="#">
                            <img src="./img/appStore.png" alt="">
                        </a>
                        <a href="#">
                            <img src="./img/googlePlay.png" alt="">
                        </a>
                    </div>
            </div>
            <div class="footer-resources">
                <h6 class="footer_title">
                <?php echo $items['item']['resources'] ?>
                </h6>
                <ul class="footer_list">
                    <li><a href="#"> <?php echo $items['footer']['about us'] ?> </a></li>
                    <li><a href="#"> <?php echo $items['footer']['Pricing Plan'] ?> </a></li>
                    <li><a href="#"> <?php echo $items['footer']['Help Center'] ?> </a></li>
                </ul>
            </div>
            <div class="footer-legal">
                <h6 class="footer_title">
                <?php echo $items['item']['legal'] ?>
                </h6>
                <ul class="footer_list">
                    <li><a href="#"> <?php echo $items['footer']['terms of use'] ?> </a></li>
                    <li><a href="#"> <?php echo $items['footer']['privacy policy'] ?></a></li>
                    <li><a href="#"> <?php echo $items['footer']['security'] ?></a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h6 class="footer_title">
                <?php echo $items['item']['contact'] ?>

                </h6>
                <ul class="footer_list">
                    <li><a href="#"> +33 7 67 24 93 80 </a></li>
                    <li><a href="#"> alirezaz1398@outlook.com </a></li>
                </ul>
                <ul class="footer_social">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-linkedin"></i>

                </ul>
            </div>
        </div>
    </footer>

    <script src="./js/placeholdem.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>