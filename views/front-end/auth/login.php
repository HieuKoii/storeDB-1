<?php include 'views/front-end/layouts/master.php' ?>

<?php startblock('title') ?>
Đăng nhập
<?php endblock() ?>

<?php startblock('css') ?>
<?php include 'views/front-end/layouts/css.php'?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
    <style type="text/css">
        .help-block{
            color: red;
            font-size: 16px;
            font-weight: 500;
        }
        .row{

            margin-top: 10px;
        }
    </style>
<?php endblock() ?>


<?php startblock('content') ?>
<div class="col-2">
</div>
<div class="col-8">
    <div class="row">
        <!--    LOGIN FORM-->
        <div class="col-6">
            <form action="<?php echo Route::name('auth.login');?>" method="POST" id="login-form">
                <div class="row form-group col-12">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Tên tài khoản</span>
                        </div>
                        <input type="text" class="form-control username" name="username" value="">
                    </div>
                    <span class="help-block login-username-validate" />
                </div>

                <div class="row form-group col-12">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Mật khẩu</span>
                        </div>
                        <input type="password" class="form-control password" name="password" value="">
                    </div>
                    <span class="help-block login-password-validate" />
                </div>

                <div class="row form-group col-12">
                    <button class="btn btn-success btn-block" type="submit">
                        ĐĂNG NHẬP
                    </button>
                </div>
                <a href="<?php echo Route::name('home');?>">
                    Về trang chủ
                </a>
            </form>
        </div>
        <!--    END LOGIN FORM-->


        <!--    REGISTER FORM-->
        <div class="col-6">
            <form action="<?php echo Route::name('auth.register');?>" method="POST"  id="register-form">
                <div class="row form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Tên tài khoản</span>
                        </div>
                        <input type="text" class="form-control username" name="username" value="">
                    </div>
                    <span class="help-block username-validate" />
                </div>

                <div class="row form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Email</span>
                        </div>
                        <input type="text" class="form-control email" name="email" value="">

                    </div>
                    <span class="help-block email-validate" />
                </div>

                <div class="row form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Mật khẩu</span>
                        </div>
                        <input type="password" class="form-control password" name="password" value="">

                    </div>
                    <span class="help-block password-validate" />
                </div>


                <div class="row form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Nhập lại mật khẩu</span>
                        </div>
                        <input type="password" class="form-control re-password" name="re_password" value="">

                    </div>
                    <span class="help-block re-password-validate" />
                </div>

                <div class="row form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Họ và tên</span>
                        </div>
                        <input type="text" class="form-control fullname" name="fullname" value="">

                    </div>
                    <span class="help-block fullname-validate" />
                </div>

                <div class="row form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Ngày sinh</span>
                        </div>
                        <input type="text" class="form-control date-of-birth" name="date_of_birth" value="">

                    </div>
                    <span class="help-block date-of-birth-validate" />
                </div>


                <div class="row form-group">
                    <button class="btn btn-info btn-block" type="submit">
                        ĐĂNG KÝ
                    </button>
                </div>
            </form>
        </div>

        <!--    END REGISTER FORM-->

    </div>

</div>
<div class="col-2">
</div>
<?php endblock() ?>

<?php startblock('script') ?>
    <?php include 'views/front-end/layouts/script.php' ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js" integrity="sha512-Vp2UimVVK8kNOjXqqj/B0Fyo96SDPj9OCSm1vmYSrLYF3mwIOBXh/yRZDVKo8NemQn1GUjjK0vFJuCSCkYai/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <?php include 'views/front-end/auth/script.php' ?>
    <script>
        $(document).ready(function(){
            validateRegisterForm();
            validateLoginForm();
        });
    </script>
<?php endblock() ?>





