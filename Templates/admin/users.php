<!DOCTYPE html>
<html>
<?php
include_once('../Templates\defaults\head.php');
?>

<body>
    <div class="container" style="background:gray">
        <?php
        include_once('../Templates/defaults/header.php');
        include_once('../Templates/defaults/adminNav.php');
        include_once('../Templates/defaults/pictures.php');
        global $products;
        ?>

        <h3 class="text-warning">Sportcenter HealthOne Admin Panel voor Gebruikers</h3>
        <div class="row gy-4" style="width: 95%; margin: auto;">
            <?php foreach ($products as $product) : ?>
            <div class="card">
                <div class="row no-gutters">
                    <div class="col-auto">
                        <img src="<?=$product->image;?>" class="img-fluid" alt="">
                    </div>
                    <div class="col">
                        <div class="card-block px-2">
                            <h4 class="card-title"><?=$product->name;?></h4>
                            <p class="card-text"><?=$product->description;?></p>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
                <div class="card-footer w-100 text-muted">
                    <?=$product->category;?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <hr>
        <?php
        include_once('../Templates/defaults/footer.php');
        ?>
    </div>
</body>

</html>