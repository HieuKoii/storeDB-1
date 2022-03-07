<?php include 'views/admin/layouts/master.php' ?>

<?php startblock('title') ?>
    Trang chủ
<?php endblock() ?>

<?php startblock('css') ?>

<?php include('views/admin/layouts/css.php')?>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-2.2.4/dt-1.10.13/fc-3.2.2/fh-3.1.2/r-2.1.0/sc-1.4.2/datatables.min.css" />
<?php include('views/admin/user/css.php')?>
<?php endblock() ?>

<?php startblock('content') ?>
    <div class="grid_10">
        <div class="box round first grid">
            <h2> Users List</h2>

            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create-user" onclick="showFormCreate();">
                Tạo mới
            </button>
            <!-- End button-->


            <!-- TABLE LIST USERS -->
            <div style="width: 100%;">

                <table class="table table-bordered table-hover users-table" id="list-categories">
                    <thead>

                    <tr>

                        <th>
                            STT
                        </th>
                        <th>
                            Tên danh mục
                        </th>
                        <th>
                            <input type="text" class="form-control" placeholder="Alias" />
                        </th>
                        <th>
                            <input type="text" class="form-control" placeholder="Tên danh mục cha" />
                        </th>
                        <th>
                            Tùy chọn
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($category as $category){
                        ?>
                        <tr id="user-row-<?php echo $category->id;?>">
                            <td>

                            </td>
                            <td>
                                <?php echo $category->name;?>
                            </td>
                            <td>
                                <?php echo $category->alias;?>
                            </td>
                            <td>
                                <?php echo $category->parent_id;?>
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-user" onclick="showFormEdit(<?php echo $user->id;?>);">
                                    Sửa
                                </button>

                                <button type="button" class="btn btn-danger" onclick="deleteUser(<?php echo $user->id;?>);">
                                    Xóa
                                </button>

                            </td>
                        </tr>
                        <?php
                    }
                    ?>

                    </tbody>
                </table>
            </div>
            <!--END TABLE LIST USERS-->


            <div class="modal fade" id="edit-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="create-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <?php include "views/admin/user/create-user.php" ?>
                </div>
            </div>
        </div>
    </div>
<?php endblock() ?>
<?php startblock('script') ?>
<?php include('views/front-end/layouts/script.php')?>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.2/js/dataTables.fixedColumns.min.js"></script>
<?php include('views/admin/user/script.php')?>

    <script type="text/javascript">
        $(document).ready(function(){
            initDatatable($('#list-categories'),true);
        });

    </script>
<?php endblock() ?>