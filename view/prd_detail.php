<?php
    extract($oneprd);
    $img_path = "upload/".$img;
?>
<aside>
    <div class="back-To-Top">
        <a href="index.php"><i class="fas fa-arrow-left"></i> Back to top</a>
    </div>
    <div class="show-product-details">
        <div class="show-product-details-img">
            <div class="slide-img">
                <img src="<?=$img_path?>" alt="">

            </div>

        </div>
        <div class="show-product-details-right">
            <div class="product-name ml mb">
                <h3><?=$name_product?></h3>
            </div>

            <div class="product-price ml mb">
                <span><?=$price?> đ</span>
                <!-- <del>650.000 đ</del> -->
            </div>

            <div class="product-size ml mb">
                <label for="s">S</label>
                <label for="s">M</label>
                <label for="s">L</label>
                <label for="s">XL</label>
            </div>
            
            <div class="cart-plus-minus product-quantity ml mb" data-target="amount-1">
                <button class="btn cart-minus-1">
                    <i class='fas fa-minus'></i>
                </button>
                <input style="width: 150px; text-align: center;" type="number" id="amount-1" value="1" min="1" max="300">
                <button class="btn cart-plus-1">
                    <i class='fas fa-plus'></i>
                </button>
            </div>
            

            <div class="btn-add-to-cart">
                <button type="submit" name="btn-add-to-cart"><strong><a href="">Thêm Vào Giỏ</a></strong></button>
            </div>

            <div class="btn-buy-now">
                <button type="submit" name="btn-buy-now"><strong><a href="">Mua Ngay</a></strong></button>
            </div>

            <div class="product-desciption">
                <p><?$mota?></p>
            </div>

        </div>

    </div>
    <div class="products-related">
        <h1>SẢN PHẨM LIÊN QUAN</h1>
        <div class="product-block">
            <?php
            
                if(is_array($prd_same)){
                    foreach($prd_same as $prd_same){
                        extract($prd_same);
                        echo '<div class="product-list mr">
                                    <a href=""><img src="./images/HADES NEW BALANCE TROUSER PANTS.jpg" alt=""></a>
                                    <a href="">'. $name_product .'</a>
                                    <div class="button-add">
                                        <button type="submit" class="action">Mua ngay</button>
                                        <button type="submit" class="action add-to-cart">Thêm vào giỏ</button>
                                    </div>
                                    <p>450,000₫</p>
                            </div>';
                    }
                }
            ?>
        </div>
    </div>