<div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

<form action="index.php?act=quen_mk" method="post" class="mg-form">
    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Quên mật khẩu</p>
    <!-- Email input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="form3Example3">Email address</label>
        <input name="email" type="email" id="form3Example3" class="form-control form-control-lg" placeholder="Nhập email" />
    </div>

    <div class="text-center text-lg-start mt-4 pt-2">
        <input name="guiemail" value="Gửi" type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">
    </div>

</form>
<?php
if (isset($thongbao) && ($thongbao != "")) {
    echo $thongbao;
}
?>
</div>