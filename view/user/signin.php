<aside>
    <div class="container">
    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
    <?php
    if (isset($_SESSION['user'])) {
        extract($_SESSION['user']);
    ?>
        
    <?php
    } else {

    ?>
        <form action="index.php?act=dangnhap" method="post" class="mg-form">
            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Đăng Nhập</p>
            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3">Username</label>
                <input name="user" type="text" id="form3Example3" class="form-control form-control-lg" placeholder="Tên đăng nhập" />
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
                <label class="form-label" for="form3Example4">Password</label>
                <input name="password" type="password" id="form3Example4" class="form-control form-control-lg" placeholder="Mật khẩu" />
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <!-- Checkbox -->
                <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                    <label class="form-check-label" for="form2Example3">
                        Remember me
                    </label>
                </div>
                <a href="index.php?act=quen_mk" class="text-body">Quên mật khẩu</a>
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
                <input name="dangnhap" type="submit" value="Đăng nhập" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" />
                <p class="small fw-bold mt-2 pt-1 mb-0">Bạn chưa có tài khoản? <a href="index.php?act=dangky" class="link-danger">Đăng ký</a></p>
            </div>

        </form>
        <?php
            if (isset($thongbao) && ($thongbao != "")) {
                echo $thongbao;
            }
        ?>
    <?php
    }
    ?>
</div>
    </div>

</aside>
</div>
