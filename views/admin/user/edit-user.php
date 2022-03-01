<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">

    </h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form action="<?php echo Route::name('update-profile');?>" method="POST"  id="edit-user-form" enctype="multipart/form-data">

        <div class="row form-group" align="center">
            <img src="<?php echo $user->getAvatar()?>" class="avatar" style="object-fit: cover;
		    width: 200px;
		    height: 200px;
		    border-radius: 50%;
		    display: block;
    		margin: auto;"/>
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
    <button type="button" class="btn btn-primary">Save changes</button>
</div>