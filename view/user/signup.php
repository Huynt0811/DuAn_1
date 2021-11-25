                    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                        <form action="index.php?act=dangky" method="post" class="mg-form">
                            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Đăng Ký</p>
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example3">Email address</label>
                                <input name="email" type="email" id="form3Example3" class="form-control form-control-lg" placeholder="Nhập email" />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example3">Username</label>
                                <input name="user" type="text" id="form3Example3" class="form-control form-control-lg" placeholder="Nhập tên đăng nhập" />
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-3">
                                <label class="form-label" for="form3Example4">Password</label>
                                <input name="password" type="password" id="form3Example4" class="form-control form-control-lg" placeholder="Nhập mật khẩu" />
                            </div>

                            <div class="form-outline mb-3">
                                <label class="form-label" for="form3Example4">Địa chỉ</label>
                                <input name="address" type="text id=" form3Example4" class="form-control form-control-lg" placeholder="Nhập địa chỉ" />
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <!-- Checkbox -->
                                <div class="form-check mb-0">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                    <label class="form-check-label" for="form2Example3">
                                        Remember me
                                    </label>
                                </div>
                            </div>

                            <div class="text-center text-lg-start mt-4 pt-2">
                                <input name="dangky" value="Đăng kí" type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">
                            </div>

                        </form>
                        <?php
                        if (isset($thongbao) && ($thongbao != "")) {
                            echo $thongbao;
                        }
                        ?>
                    </div>