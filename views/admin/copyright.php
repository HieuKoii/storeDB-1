<?php include 'views/admin/layouts/master.php' ?>

<?php startblock('title') ?>
Copyright
<?php endblock() ?>
<?php startblock('content') ?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Update Copyright Text</h2>
        <div class="block copyblock">
            <form>
                <table class="form">
                    <tr>
                        <td>
                            <input type="text" placeholder="Enter Copyright Text..." name="copyright" class="large" />
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="submit" name="submit" Value="Update" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
<?php endblock() ?>
