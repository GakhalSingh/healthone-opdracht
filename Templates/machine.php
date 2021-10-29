<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
global $product;
?>

<body>

<div class="container" style="background:gray">
    <?php
    include_once ('defaults/header.php');
    include_once ('defaults/menu.php');
    include_once ('defaults/pictures.php');
    ?>
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="/home">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="/categories">Categories</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="/categories/<?=$categoryId?>"><?= $name ?></a></li>
                    <li class="breadcrumb-item"><a class="text-white" href=""><?= $product->name ?></a></li>
                </ol>
            </nav>

    <div class="col-md-7 order-md-2">
        <h1 class="text-warning"><?= $product->name; ?></h1>
        <img class="img-fluid" src="<?= $product->image; ?>">
    </div>
    <hr>
        <div class="col-md-5 order-md-1">
            <p class="text-white">
                <?= $product->description?>
            </p>
        </div>
    <?php
    include_once ('defaults/footer.php');
    ?>
</div>
</body>
</html>