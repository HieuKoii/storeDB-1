<?php include 'views/admin/layouts/master.php' ?>

<?php startblock('title') ?>
    Trang chủ
<?php endblock() ?>

<?php startblock('css') ?>
    <?php include('css.php')?>
    <?php include('views/admin/layouts/css.php')?>
<?php endblock() ?>

<?php startblock('content') ?>
    <div class="grid_10">
        <div class="box round first grid">
            <h2> Cate List</h2>




            <!-- TABLE LIST USERS -->
            <div style="width: 100%;">

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create-category" ">
                    Tạo mới
                </button>

                <div class="cf nestable-lists">

                    <div class="dd" id="nestable">
                        <ol class="dd-list">
                            <?php foreach ($categories as $category){ ?>

                                <li class="dd-item" data-id="<?php echo $category->id ?>">
                                <?php if ($category->parentId == 0 ) {?>
                                    <div class="dd-handle">
                                        <?php echo $category->name ?>
                                        <button type="button" style="float: right" data-toggle="modal" data-target="#edit-category" onclick="showFormEdit(<?php echo $category->id;?>);">
                                            Sửa
                                        </button>

                                        <button type="button" style="float: right; margin-bottom: 5px;" onclick="deleteCategory(<?php echo $category->id;?>);">
                                            Xóa
                                        </button>
                                    </div>
                                    <ol class="dd-list">
                                        <?php foreach ($categories as $pr){ ?>
                                            <?php if ($category->id == $pr->parentId){ ?>
                                                <li class="dd-item" data-id="<?php echo $pr->id ?>"><div class="dd-handle"><?php echo $pr->name ?> <button type="button" style="float: right" data-toggle="modal" data-target="#edit-category" onclick="showFormEdit(<?php echo $pr->id;?>);">
                                                            Sửa
                                                        </button>

                                                        <button type="button" style="float: right; margin-bottom: 5px;" onclick="deleteCategory(<?php echo $pr->id;?>);">
                                                            Xóa
                                                        </button></div></li>
                                            <?php } ?>
                                        <?php } ?>
                                    </ol>
                                    <?php } ?>
                                </li>
                            <?php } ?>
                        </ol>
                    </div>
                    <div class="modal fade" id="edit-category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="create-category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <?php include "views/admin/category2/create-category.php" ?>
                            </div>
                        </div>
                    </div>
                </div>





            </div>
            <!--END TABLE LIST USERS-->

        </div>

    </div>
<?php endblock() ?>
<?php startblock('script') ?>
    <?php include('views/front-end/layouts/script.php')?>
    <?php include('script.php')?>

<?php endblock() ?>