<?php require_once 'libs/phpti/ti.php' ?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <title>
      <?php startblock('title') ?>
      <?php endblock() ?>
    </title>
    <meta name="csrf-token"/>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <?php startblock('css') ?>
        <?php include 'views/admin/layouts/css.php'?>
    <?php endblock() ?>
    <body>
    <?php startblock('header') ?>
    <?php include 'views/admin/layouts/header.php'?>
    <?php endblock() ?>
    <?php startblock('sidebar') ?>
        <?php include 'views/admin/layouts/sidebar.php'?>
    <?php endblock() ?>

    <?php startblock('content') ?>
    <?php endblock() ?>

    <?php startblock('footer') ?>
        <?php include 'views/admin/layouts/footer.php' ?>
    <?php endblock() ?>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"
            defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



    <?php startblock('script') ?>
        <?php include 'views/admin/layouts/script.php' ?>
    <?php endblock() ?>
  </body>
</html>
