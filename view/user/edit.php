<div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
    <?php
        if(isset($_SESSION['user']) && (is_array($_SESSION['user']))){
            extract($_SESSION['user']);
        }
?>
    <form action="index.php?act=edit_tk" method="post" class="mg-form">
        <!-- Email input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Email address</label>
            <input name="email" value="<?=$email?>" type="email" id="form3Example3" class="form-control form-control-lg" />
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">User Name</label>
            <input name="user" value="<?=$username?>" type="text" id="form3Example3" class="form-control form-control-lg" />
        </div>

        <!-- Password input -->
        <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">Password</label>
            <input name="password" value="<?=$password?>" type="password" id="form3Example4" class="form-control form-control-lg" />
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Phone Number</label>
            <input name="phone" value="<?=$phone?>" type="number" id="form3Example3" class="form-control form-control-lg" placeholder="Nhập số điện thoại" />
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Birth Date</label>
            <input name="birthdate" value="<?=$birthdate?>" type="text" id="form3Example3" class="form-control form-control-lg" placeholder="Nhập ngày sinh" />
        </div>

        <div class="text-center text-lg-start mt-4 pt-2">
            <input type="hidden" name="id" value="<?=$id?>"/>
            <input name="capnhat" value="Cập nhật" type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">
        </div>

    </form>
    <?php
    if (isset($thongbao) && ($thongbao != "")) {
        echo $thongbao;
    }
    ?>
</div>