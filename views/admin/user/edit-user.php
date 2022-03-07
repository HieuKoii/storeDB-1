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

<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">
        Sửa người dùng
    </h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">

    <form action="<?php echo Route::name('admin.user.update') ?>" method="POST"  id="edit-user-form" enctype="multipart/form-data">
        <div class="row form-group" align="center">
            <img src="<?php echo $user->getAvatar()?>" class="avatar" />
            <input type="file" name="avatar"  class="input-avatar" style="display: none;" />
        </div>

        <div class="row form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Tên tài khoản : <?php echo $user->username ?></span>
                </div>
            </div>
        </div>

        <div class="row form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Email</span>
                </div>
                <input type="text" class="form-control email" name="email" value="<?php echo $user->email ?>">

            </div>
            <span class="help-block email-validate" />
        </div>



        <div class="row form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Họ và tên</span>
                </div>
                <input type="text" class="form-control fullname" name="fullname" value="<?php echo $user->getFullName() ?>">

            </div>
            <span class="help-block fullname-validate" />
        </div>

        <div class="row form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Ngày sinh</span>
                </div>
                <input type="text" class="form-control date-of-birth" name="date_of_birth" value="<?php echo dateFormat($user->date_of_birth) ?>">

            </div>
            <span class="help-block date-of-birth-validate" />
        </div>

    </form>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary" onclick="updateUser(this.parentElement.parentElement.parentElement,<?php echo $user->id?>);" >Update</button>
</div>

<!--################### END BODY MODAL ###################-->


<!--################### START SCRIPT MODAL ###################-->
<script type="text/javascript">
    function initEditUserForm(){

        var form = $('#edit-user-form');
        initDatepicker(form.find('.date-of-birth').first());
        var imageAvatar = form.find('.avatar').first();
        var imageInput  = form.find('.input-avatar').first();

        initImageFile(imageAvatar, imageInput);

    }

    function updateUser(form,userID){

        var form = $(form);

        console.log(form);
        var data = {
            'id' :userID,
            'email' : form.find('.email').first().val(),
            'fullname': form.find('.fullname').first().val(),
            'date_of_birth': form.find('.date-of-birth').first().val(),
            'avatar': form.find('.avatar').first().attr('src'),
        };

        console.log(data);

        // gửi ajax
        $.ajax({
            url: "<?php echo Route::name('admin.user.update');?>",
            type: "POST",
            data: data,
            success: function (data){
                if(data.code == 200){
                    setTimeout(function () {
                        location.reload();
                    },400)
                    // alert(data.message, "success");

                }else{
                    alert(data.message, "error");
                }
            },
            error: function (e){
                //console.log(data);
                alert("Please try again", "error");
            }
        });

    }

    initEditUserForm();
</script>
<?php include 'views/admin/layouts/script.php' ?>
<!--################### END SCRIPT MODAL ###################-->