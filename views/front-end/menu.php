<?php
if (Auth::checkAuth()) {
    ?>
    <div class="menu_a">
        <a href="<?php echo Route::name('admin.categories') ?>">
            Quản lý người dùng
        </a>
    </div>

<?php
    }
?>
