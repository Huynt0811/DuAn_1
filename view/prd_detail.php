<?php
extract($oneprd);
$img_path = "upload/" . $img;
foreach ($lstcate as $cate) {
    extract($cate);
    if ($id_category == $id_cate) {
        $namecate = $name_category;
        break;
    }
}
?>
<aside>
    <div class="container">
        <div class="back-To-Top">
            <a href="index.php"><i class="fas fa-arrow-left"></i> Back to top</a>
        </div>
        <form action="./view/cart.php" method="POST" class="show-product-details" enctype="multipart/form-data">
            <input type="hidden" name="priceprd" value="<?= $price ?>">
            <input type="hidden" name="imgprd" value="<?= $img_path ?>">
            <input type="hidden" name="nameprd" value="<?= $name_product ?>">
            <input type="hidden" name="namecate" value="<?= $namecate ?>">
            <div class="show-product-details-img">
                <div class="slide-img">
                    <img src="<?= $img_path ?>" alt="">
                </div>
            </div>
            <div class="show-product-details-right">
                <div class="product-name ml mb">
                    <h3><?= $name_product ?></h3>
                </div>
                <div class="product-price ml mb">
                    <span><?= $price = number_format($price, 0, '', ','); ?> đ</span>
                </div>

                <div class="cart-plus-minus product-quantity ml mb" data-target="amount-1">
                    <button class="btn cart-minus-1">
                        <i class='fas fa-minus'></i>
                    </button>
                    <input style="width: 150px; text-align: center;" type="number" name="soluong" id="amount-1" value="1" min="1" max="300">
                    <button class="btn cart-plus-1">
                        <i class='fas fa-plus'></i>
                    </button>
                </div>
                <div class="btn-add-to-cart">
                    <button type="submit" name="addcart" class="action add-to-cart">Thêm vào giỏ</button>
                </div>
                <div class="btn-buy-now">
                    <button type="submit" name="btn-buy-now"><strong><a href="">Mua Ngay</a></strong></button>
                </div>
                <div class="product-desciption">
                    <p><?= $mota ?></p>
                </div>
            </div>

        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        
        <script>
            $(document).ready(function() {
                $("#binhluan").load("view/binhluan/binhluanform.php", {id_product: <?= $id_product ?>});
            });
        </script>
        <div id="binhluan">
            <h1>Bình luận</h1>
            
        </div>

        <!-- <div class="show-product-details">
            

        </div> -->
        <div class="products-related">
            <h1>SẢN PHẨM LIÊN QUAN</h1>
            <div class="product-block">
                <?php

                if (is_array($prd_same)) {
                    $lq = 0;
                    foreach ($prd_same as $prd_same) {
                        extract($prd_same);
                        $price = number_format($price, 0, '', ',');
                        $img_path_lq = "upload/" . $img;
                        $linkprd = "index.php?act=prd_detail&idprd=" . $id_product;
                        if ($lq <= 4) {
                            $lq++;
                            echo '<div class="product-list mr">
                                    <a href="' . $linkprd . '"><img src="' . $img_path_lq . '" alt=""></a>
                                    <a href="">' . $name_product . '</a>
                                    <form action="./view/cart.php" method="POST" class="button-add" enctype="multipart/form-data">
                                        <button type="submit" class="action">Mua ngay</button>
                                        <button type="submit" name="addcart" class="action add-to-cart">Thêm vào giỏ</button>
                                        <input type="hidden" name="priceprd" value="' . $price . ' đ">
                                        <input type="hidden" name="imgprd" value="' . $img_path_lq . '">
                                        <input type="hidden" name="nameprd" value="' . $name_product . '">
                                        <input type="hidden" name="soluong" value="1">
                                        <input type="hidden" name="namecate" value="' . $namecate . '">
                                    </form>
                                    
                                    <p>' . $price . '</p>
                            </div>';
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
</aside>
</div>