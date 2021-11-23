<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styleMain.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <main>
        <header>
            <div class="header-right">
                <h1><a href="./index.html">Name</a></h1>
            </div>
            <div class="header-left">
                <div>
                    <span>
                        <a href="#">Đăng Nhập</a>
                        /
                        <a href="#">Đăng Kí</a>
                    </span>
                </div>
                <div>
                    | <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                      </svg></a>
                </div>
                <div>
                    |
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                      </svg></a>
                </div>
            </div>
        </header>

        <div class="wapper">
            <nav>
                <div class="logo">
                    <img src="./images/logo.png" alt="HADES">
                </div>
                <ul>
                    <li><a href="index.php?act=">SHOP ALL</a></li>
                    <li><a href="index.php?act=">TOPS</a></li>
                    <li><a href="index.php?act=">BOTTOMS</a></li>
                    <li><a href="index.php?act=">OUTERWEAR</a></li>
                    <li><a href="index.php?act=">FOOTERWEAR</a></li>
                    <li><a href="index.php?act=">HAT</a></li>
                    <li><a href="index.php?act=">BAGS</a></li>
                    <li><a href="index.php?act=">SALE</a></li>
                    <li><a href="index.php?act=">INSTAGRAM</a></li>
                </ul>
            </nav>

            <aside>
                <div class="container">
                    <div class="banner">
                        <div class="slideshow-container">

                            <!-- Full-width images with number and caption text -->
                            <div class="mySlides fade">
                                <!-- <div class="numbertext">1 / 3</div> -->
                                <img src="./images/banner.jpg" style="width:100%">
                                <!-- <div class="text">Caption Text</div> -->
                            </div>

                            <div class="mySlides fade">
                                <!-- <div class="numbertext">2 / 3</div> -->
                                <img src="./images/banner.jpg" style="width:100%">
                                <!-- <div class="text">Caption Two</div> -->
                            </div>

                            <!-- <div class="mySlides fade">
                                <div class="numbertext">3 / 3</div>
                                <img src="img3.jpg" style="width:100%">
                                <div class="text">Caption Three</div>
                            </div> -->

                            <!-- Next and previous buttons -->
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                        <br>

                        <!-- The dots/circles -->
                        <!-- <div style="text-align:center">
                            <span class="dot" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
                            <span class="dot" onclick="currentSlide(3)"></span>
                    </div> -->
                        <script>
                            var slideIndex = 0;
                            showSlides();

                            function showSlides() {
                                var i;
                                var slides = document.getElementsByClassName("mySlides");
                                for (i = 0; i < slides.length; i++) {
                                    slides[i].style.display = "none";
                                }
                                slideIndex++;
                                if (slideIndex > slides.length) {
                                    slideIndex = 1
                                }
                                slides[slideIndex - 1].style.display = "block";
                                setTimeout(showSlides, 2000); // Change image every 2 seconds
                            }
                        </script>
                    </div>