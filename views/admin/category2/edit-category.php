


<!--################### START BODY MODAL ###################-->
<form action="<?php echo Route::name('admin.category.update') ?>" method="POST"  id="edit-category-form" enctype="multipart/form-data">
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">
        Sửa danh mục
    </h5>

</div>

<div class="modal-body">

        <div class="row form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Tên danh mục</span>
                </div>
                <input type="text" class="form-control name" name="name" value="<?php echo $category->name ?>">

            </div>
        </div>

        <div class="row form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Danh mục cha
                </div>
                <input type="text" class="form-control parentId" name="parentId" value="<?php echo $category->parentId ?>">

            </div>

        </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary" onclick="updateCategory(this.parentElement.parentElement,<?php echo $category->id?>);" >Update</button>
</div>
</form>

<!--################### END BODY MODAL ###################-->


<!--################### START SCRIPT MODAL ###################-->
<script type="text/javascript">
    function initEditCategoryForm(){
        var form = $('#edit-category-form');
    }

    initEditCategoryForm();
    function updateCategory(form,categoryID){

        var form = $(form);

        console.log(form);
        var data = {
            'category_id' :categoryID,
            'name' : form.find('.name').first(),
            'parentId': form.find('.parentId').first(),

        };

        console.log(data);

        // gửi ajax
        $.ajax({
            url: "<?php echo Route::name('admin.category.update');?>",
            type: "POST",
            data: data,

            success: function (data){

                if(data.code == 200){
                    setTimeout(function () {
                        location.reload();
                    },400)
                    alert(data.message, "success");

                }else{
                    alert(data.message, "error");
                }
            },
            error: function (e){
                console.log(data);
                alert("Please try again", "error");
            }
        });

    }


</script>
<?php include 'views/admin/layouts/script.php' ?>
<!--################### END SCRIPT MODAL ###################-->