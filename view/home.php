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
        <div class="title-top">
            <p>New Arrivals</p>
            <a href="#">Xem Thêm</a>
        </div>
        <form class="search_home" action="index.php?act=prd_search" method="post">
                <div class="col-auto display-4 d-flex bd-highlight ">
                    <input type="text" name="kyw" class="form-control col-form-label col-md mr" >
                    <input type="submit" name="timkiem" value="Tìm kiếm" class="btn btn-dark col-3">
                </div>
        </form>
        <div class="product">
        <?php
                
                $i=1;
                $a=4;
                foreach($prdnew as $prd){
                    extract($prd);
                    
                    
                    foreach ($lstcate as $cate) {
                        extract($cate);
                        if($id_category==$id_cate){
                            $namecate = $name_category;
                            break;
                        }
                    }
                        $linkprd ="index.php?act=prd_detail&idprd=".$id_product;
                        $img_path = "upload/".$img;
                        if($i==1 || $i==5 || $i==8){
                            echo '<div class="product-block">';
                        }
                        echo '<div class="product-list mr">
                                <a href="'. $linkprd .'"><img src="'. $img_path .'" alt=""></a>
                                
                                
                                <form action="./view/cart.php" method="POST" class="button-add" enctype="multipart/form-data">
                                    <input type="hidden" name="priceprd" value="' . $price . '">
                                    <input type="hidden" name="imgprd" value="'. $img_path .'">
                                    <input type="hidden" name="nameprd" value="' . $name_product . '">
                                    <input type="hidden" name="soluong" value="1">
                                    <input type="hidden" name="namecate" value="'.$namecate.'">
                                    
                                    
                                    <button type="submit" class="action">Xem sản phẩm</button>
                                    <button type="submit" name="addcart" class="action add-to-cart">Thêm vào giỏ</button>
                                </form>
                                <p  href="">' . $name_product . '</p>
                                <p>' . number_format($price). ' đ</p>
                            </div>';
                        if($i==4 || $i==8 || $i==12){
                            echo '</div>';
                        }
                        $i++;
                        if($i==5){
                            $i=1;
                        }
        
                }
        ?>
        </div>
        <!-- <input type="submit" class="action" value="Mua ngay">
        <input type="submit" name="addcart" class="action add-to-cart" value="Thêm vào giỏ"> -->
        <div class="title-top">
            <p>Top 10</p>
            <a href="#">Xem Thêm</a>
        </div>
        
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php
                    foreach ($prdtop12 as $prd12) {
                        extract($prd12);
                        foreach ($lstcate as $cate1) {
                            extract($cate1);
                            if($id_category==$id_cate){
                                $namecate = $name_category;
                                break;
                            }
                        }
                        $linkprd ="index.php?act=prd_detail&idprd=".$id_product;
                        $img_path = "upload/".$img;
                        echo ' <div class="swiper-slide">
                        <div class="product-top10">
                            <a href="'.$linkprd.'"><img src="'. $img_path .'" alt=""></a>
                            <a href="">'.$name_product.'</a>
                            <form action="./view/cart.php" method="POST" class="button-add" enctype="multipart/form-data">
                                <input type="hidden" name="priceprd" value="' . $price . '">
                                <input type="hidden" name="imgprd" value="'. $img_path .'">
                                <input type="hidden" name="nameprd" value="' . $name_product . '">
                                <input type="hidden" name="soluong" value="1">
                                <input type="hidden" name="namecate" value="'.$namecate.'">
                                <button type="submit" class="action">Mua ngay</button>
                                <button type="submit" name="addcart" class="action add-to-cart">Thêm vào giỏ</button>
                            </form>
                            <p>'.$price.' đ</p>
                        </div>
                    </div>';
                    }
                ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 4,
                spaceBetween: 30,
                slidesPerGroup: 3,
                loop: true,
                loopFillGroupWithBlank: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        </script>
        <div class="title-news">
            <p style="text-align:center;font-size: 1.7rem;">The Journal</p>
            <div class="video">
                        <video controls>
                            <source src="./images/video.mp4">
                        </video>
                    </div>
                </div>
</aside>
        </div>