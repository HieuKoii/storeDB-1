<?php include 'views/admin/layouts/master.php' ?>

<?php startblock('title') ?>
Cat Add
<?php endblock() ?>
<?php startblock('content') ?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Add New Category</h2>
        <div class="block copyblock">
            <form>
                <table class="form">
                    <tr>
                        <td>
                            <input type="text" placeholder="Enter Category Name..." class="medium" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="submit" Value="Save" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
<?php endblock() ?>
