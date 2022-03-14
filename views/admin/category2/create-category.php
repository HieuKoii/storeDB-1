

<!--################### START BODY MODAL ###################-->
<form action="<?php echo Route::name('create.category') ?>" id="create-category-form" method="POST" enctype="multipart/form-data">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
            Tạo mới
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">


        <div class="row form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Tên danh mục</span>
                </div>
                <input type="text" class="form-control name" name="name" value="">
            </div>

        </div>

        <div class="row form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Danh mục cha</span>
                </div>
                <input type="text" class="form-control parentId" name="parentId" value="">

            </div>
            <span class="help-block email-validate" />
        </div>


        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
            <button type="submit" class="btn btn-primary" >Tạo mới</button>
        </div>
</form>
<!--################### END BODY MODAL ###################-->


<!--################### START SCRIPT MODAL ###################-->


<!--################### END SCRIPT MODAL ###################-->