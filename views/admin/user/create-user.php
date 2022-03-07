<!--################### START CSS MODAL ###################-->
<style type="text/css">
    .avatar{
        object-fit: cover;
        width: 200px;
        height: 200px;
        border-radius: 50%;
        display: block;
        margin: auto;
    }

    .avatar:hover{
        cursor: pointer;
    }
</style>
<!--################### END CSS MODAL ###################-->


<!--################### START BODY MODAL ###################-->
<form action="<?php echo Route::name('create.user') ?>" id="create-user-form" method="POST" enctype="multipart/form-data">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
            Tạo mới
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">


        <div class="row form-group" align="center">
            <img src="/public/avatar/NOIMAGE.jpg" class="avatar" />
            <input type="file" name="avatar"  class="input-avatar" style="display: none;" />
        </div>

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
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
        <button type="submit" class="btn btn-primary" >Tạo mới</button>
    </div>
</form>
<!--################### END BODY MODAL ###################-->


<!--################### START SCRIPT MODAL ###################-->
<script type="text/javascript">
    function initCreateUserForm(){

        var form = $('#create-user-form');
        initDatepicker(form.find('.date-of-birth').first());

        var imageAvatar = form.find('.avatar').first();
        var imageInput  = form.find('.input-avatar').first();

        initImageFile(imageAvatar, imageInput);

    }

    function createUser(form){

        var form = $(form);

        console.log(form);
        var data = {
            'username' : form.find('.username').first().val(),
            'password': form.find('.password').first().val(),
            'email' : form.find('.email').first().val(),
            'fullname': form.find('.fullname').first().val(),
            'date_of_birth': form.find('.date-of-birth').first().val(),
            'avatar': form.find('.avatar').first().attr('src'),
        };

        console.log(data);

        // gửi ajax
        $.ajax({
            url: "<?php echo Route::name('update-profile');?>",
            type: "POST",
            data: data,
            success: function (data) {
                if(data.code == 200){
                    alert(data.message, "success");
                    location.reload();
                }

            },
            error: function () {
                alert("Please try again", "error");

            }
        });

    }


</script>

<!--################### END SCRIPT MODAL ###################-->