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
                foreach($lstprd as $prd){
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
                                <p  href="">' . $name_product . '</p>
                                
                                <form action="./view/cart.php" method="POST" class="button-add" enctype="multipart/form-data">
                                    <input type="hidden" name="priceprd" value="' . $price . '">
                                    <input type="hidden" name="imgprd" value="'. $img_path .'">
                                    <input type="hidden" name="nameprd" value="' . $name_product . '">
                                    <input type="hidden" name="soluong" value="1">
                                    <input type="hidden" name="namecate" value="'.$namecate.'">
                                    
                                    
                                    <button type="submit" class="action">Xem sản phẩm</button>
                                    <button type="submit" name="addcart" class="action add-to-cart">Thêm vào giỏ</button>
                                </form>
                                <p>$' . $price . '</p>
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
</aside>
        