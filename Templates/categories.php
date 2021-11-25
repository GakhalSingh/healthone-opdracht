<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>

<body>

    <div class="container" style="background:gray">
        <?php
        include_once('defaults/header.php');
        include_once('defaults/menu.php');
        include_once('defaults/pictures.php');

        ?>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="/home">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="/categories">Categories</a></li>
            </ol>
        </nav>

        <h3 class="text-warning">Categories</h3>
        <div class="row gy-3 ">
            <?php global $categories; ?>
            <?php foreach ($categories as $category) : ?>
                <div class="col-sm-6 col-md-6 ">
                    <div class="card" style="width: 35rem; height: 35rem">
                        <div class="card-body text-center">
                            <div class="card-title mb-3">
                                <?= $category->name; ?>
                            </div>
                            <div>
                                <a href="/category/<?= $category->id ?>">
                                    <img class="product-img img-responsive center-block" src='<?= $category->image ?>' />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <hr>
        <?php
        include_once('defaults/footer.php');

        ?>
    </div>

</body>

</html>