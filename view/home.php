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
                    <div class="product">
                        <?php
                            
                            $i=1;
                            $a=4;
                            foreach($prdnew as $prd){
                                extract($prd);
                                $linkprd ="index.php?act=prd_detail&idprd=".$id_product;
                                $img_path = "upload/".$img;
                                if($i==1 || $i==5 || $i==8){
                                    echo '<div class="product-block">';
                                }
                                echo '<div class="product-list mr">
                                        <a href="'. $linkprd .'"><img src="'. $img_path .'" alt=""></a>
                                        <p  href="">' . $name_product . '</p>
                                        <div class="button-add">
                                            <button type="submit" class="action">Mua ngay</button>
                                            <button type="submit" class="action add-to-cart">Thêm vào giỏ</button>
                                        </div>
                                        <p>$' . $price . '</p>
                                    </div>';
                if ($i == 4 || $i == 8 || $i == 12) {
                    echo '</div>';
                }
                $i++;
                if ($i == 5) {
                    $i = 1;
                }
            }
            ?>
        </div>
        <div class="title-top">
            <p>Top 10</p>
            <a href="#">Xem Thêm</a>
        </div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="product-list">
                        <a href=""><img src="./images/HADES VINTAGE SNAKE WASH TEE.jpg" alt=""></a>
                        <a href="">HADES NEW BALANCE TROUSER PANTS</a>
                        <div class="button-add">
                            <button type="submit" class="action">Mua ngay</button>
                            <button type="submit" class="action add-to-cart">Thêm vào giỏ</button>
                        </div>
                        <p>450,000₫</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product-list">
                        <a href=""><img src="./images/HADES NEW BALANCE TROUSER PANTS.jpg" alt=""></a>
                        <a href="">HADES NEW BALANCE TROUSER PANTS</a>
                        <div class="button-add">
                            <button type="submit" class="action">Mua ngay</button>
                            <button type="submit" class="action add-to-cart">Thêm vào giỏ</button>
                        </div>
                        <p>450,000₫</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product-list">
                        <a href=""><img src="./images/HADES NEW BALANCE TROUSER PANTS.jpg" alt=""></a>
                        <a href="">HADES NEW BALANCE TROUSER PANTS</a>
                        <div class="button-add">
                            <button type="submit" class="action">Mua ngay</button>
                            <button type="submit" class="action add-to-cart">Thêm vào giỏ</button>
                        </div>
                        <p>450,000₫</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product-list">
                        <a href=""><img src="./images/HADES NEW BALANCE TROUSER PANTS.jpg" alt=""></a>
                        <a href="">HADES NEW BALANCE TROUSER PANTS</a>
                        <div class="button-add">
                            <button type="submit" class="action">Mua ngay</button>
                            <button type="submit" class="action add-to-cart">Thêm vào giỏ</button>
                        </div>
                        <p>450,000₫</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product-list">
                        <a href=""><img src="./images/HADES NEW BALANCE TROUSER PANTS.jpg" alt=""></a>
                        <a href="">HADES NEW BALANCE TROUSER PANTS</a>
                        <div class="button-add">
                            <button type="submit" class="action">Mua ngay</button>
                            <button type="submit" class="action add-to-cart">Thêm vào giỏ</button>
                        </div>
                        <p>450,000₫</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product-list">
                        <a href=""><img src="./images/HADES NEW BALANCE TROUSER PANTS.jpg" alt=""></a>
                        <a href="">HADES NEW BALANCE TROUSER PANTS</a>
                        <div class="button-add">
                            <button type="submit" class="action">Mua ngay</button>
                            <button type="submit" class="action add-to-cart">Thêm vào giỏ</button>
                        </div>
                        <p>450,000₫</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product-list">
                        <a href=""><img src="./images/HADES NEW BALANCE TROUSER PANTS.jpg" alt=""></a>
                        <a href="">HADES NEW BALANCE TROUSER PANTS</a>
                        <div class="button-add">
                            <button type="submit" class="action">Mua ngay</button>
                            <button type="submit" class="action add-to-cart">Thêm vào giỏ</button>
                        </div>
                        <p>450,000₫</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product-list">
                        <a href=""><img src="./images/HADES NEW BALANCE TROUSER PANTS.jpg" alt=""></a>
                        <a href="">HADES NEW BALANCE TROUSER PANTS</a>
                        <div class="button-add">
                            <button type="submit" class="action">Mua ngay</button>
                            <button type="submit" class="action add-to-cart">Thêm vào giỏ</button>
                        </div>
                        <p>450,000₫</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product-list">
                        <a href=""><img src="./images/HADES NEW BALANCE TROUSER PANTS.jpg" alt=""></a>
                        <a href="">HADES NEW BALANCE TROUSER PANTS</a>
                        <div class="button-add">
                            <button type="submit" class="action">Mua ngay</button>
                            <button type="submit" class="action add-to-cart">Thêm vào giỏ</button>
                        </div>
                        <p>450,000₫</p>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
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
            <div class="news">
                <div class="news-list">
                    <a href=""><img src="./images/post1.jpg" alt=""></a>
                    <p>Thứ ba 16,3,2021</p>
                    <h5>Hades - Một Trong Những "Phát Súng Đầu Tiên" của Vietnamese Streetwear</h5>
                    <p>Ra đời từ những năm cuối thế kỷ 20, streetwear là phong cách thời trang phổ biến của cộng đồng đam mê bộ môn skateboard.Dù mới “bén duyên” với giới...</p>
                    <a href="#">Xem Thêm</a>
                </div>
                <div class="news-list">
                    <a href=""><img src="./images/post1.jpg" alt=""></a>
                    <p>Thứ ba 16,3,2021</p>
                    <h5>Hades - Một Trong Những "Phát Súng Đầu Tiên" của Vietnamese Streetwear</h5>
                    <p>Ra đời từ những năm cuối thế kỷ 20, streetwear là phong cách thời trang phổ biến của cộng đồng đam mê bộ môn skateboard.Dù mới “bén duyên” với giới...</p>
                    <a href="#">Xem Thêm</a>
                </div>
                <div class="news-list">
                    <a href=""><img src="./images/post1.jpg" alt=""></a>
                    <p>Thứ ba 16,3,2021</p>
                    <h5>Hades - Một Trong Những "Phát Súng Đầu Tiên" của Vietnamese Streetwear</h5>
                    <p>Ra đời từ những năm cuối thế kỷ 20, streetwear là phong cách thời trang phổ biến của cộng đồng đam mê bộ môn skateboard.Dù mới “bén duyên” với giới...</p>
                    <a href="#">Xem Thêm</a>
                </div>
            </div>

