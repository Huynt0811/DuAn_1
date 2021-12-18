<div class="accout">
    <p class="h1">Tài khoản của bạn</p>
    <div class="row">
        <div class="col-2">
            <p class="h3">Tài khoản</p>
            <ul class="list-group list-group-flush">
                <?php
                if (isset($_SESSION['user'])) {
                    extract($_SESSION['user']);
                }
                ?>
                <li class="list-group-item"> <a href="index.php?act=edit_tk" style="text-decoration: none;">Cập nhật</a> </li>
                <li class="list-group-item"> <a href="index.php?act=dangxuat" style="text-decoration: none;">Đăng xuất</a> </li>
                <?php
                if ($id_role == 1) {
                ?>
                    <li class="list-group-item"> <a href="./admin/index.php" style="text-decoration: none;">Quản trị</a></li>
                <?php
                }
                ?>
                <li class="list-group-item"> <a href="index.php" style="text-decoration: none;">Trang chủ</a> </li>
            </ul>
        </div>
        <div class="col-8">
            <p class="h3" style="border-bottom: 1px solid #eee;">Thông tin tài khoản</p>
            <?php
                if (isset($_SESSION['user'])) {
                    extract($_SESSION['user']);
                }
                ?>
            <div class="" style="max-width: 30rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?=$username?></li>
                    <li class="list-group-item"><?=$email?></li>
                    
                    <li class="list-group-item"><?=$birthdate?></li>
                    <li class="list-group-item"><?=$address?></li>
                    <li class="list-group-item"><?=$phone?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
            </div>