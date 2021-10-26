<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
global $product
?>

<body>

<div class="container" style="background:gray">
    <?php
    include_once ('defaults/header.php');
    include_once ('defaults/menu.php');
    include_once ('defaults/pictures.php');
    ?>

    <h4 class="text-warning">Sportcenter HealthOne</h4>
    <div class="col-md-7 order-md-2">
        <h1><?= $product->name; ?></h1>
        <img class="img-fluid" src="<?= $product->image; ?>">
    </div>
    <hr>
        <div class="col-md-5 order-md-1">
            <p class="lead">
                <?= $product->description?>
            </p>
        </div>
    <?php
    include_once ('defaults/footer.php');
    ?>
</div>
</body>
</html>