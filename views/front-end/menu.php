<?php
if (Auth::checkAuth()) {
    ?>
    <div class="menu_a">
        <a href="<?php echo Route::name('index-admin') ?>">
            Trang quản lý
        </a>

    </div>

<?php
    }
?>
