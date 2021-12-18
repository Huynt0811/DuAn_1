<?php


if (isset($_SESSION['user'])) {
    extract($_SESSION['user']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css hoàng -->
    <link rel="stylesheet" href="./styleMain.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- css huy -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />


</head>

<body>
    <main>
        <header>
            <div class="header-right">
                <?php
                if (isset($_SESSION['user'])) {
                    extract($_SESSION['user']);
                    echo '<h1><a href="">Người Dùng: '.$username.'</a></h1>';
                } else {
                    echo '<h1><a href="">khách hàng</a></h1>';
                }
                ?>

            </div>
            <div class="header-left">
                <?php
                if (isset($_SESSION['user'])) {
                ?>
                    <div>
                        <span>
                            <a href="index.php?act=thongtin">Thông tin</a>
                            /
                            <a href="index.php?act=dangxuat">Đăng xuất</a>
                        </span>
                    </div>
                <?php
                } else {
                ?>
                    <div>
                        <span>
                            <a href="index.php?act=dangnhap">Đăng Nhập</a>
                            /
                            <a href="index.php?act=dangky">Đăng Kí</a>
                        </span>
                    </div>
                <?php
                }
                ?>
                <div class="timkiem">
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg></a>
                </div>
                <div class="giohang">

                    <a  href="./view/cart.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                        </svg></a>
                </div>
                
            </div>
        </header>


        <div class="wapper">
            <nav>
                <div class="logo">
                    <a href="index.php"><img src="./images/logo.png" alt="HADES"></a>
                </div>
                <ul>
                    <li><a href="index.php">SHOP ALL</a></li>
                    <?php
                    foreach ($lstcate as $cate) {
                        extract($cate);
                        $linkcate = "index.php?act=prd&id_cate=" . $id_cate;
                        echo '<li><a href="' . $linkcate . '">' . $name_category . '</a></li>';
                    }
                    ?>
                </ul>
            </nav>