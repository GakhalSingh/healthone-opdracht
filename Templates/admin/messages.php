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
        ?>
        <h3 class="text-warning">Binnegekomen berichten:</h3>
        <div class="row gy-4" style="width: 95%; margin: auto;">
            <?php foreach ($messages as $message) : ?>
            <div class="card">
                <div class="row no-gutters">
                    <div class="col-auto" style="width: 10rem"><br>
                        <img src="<?=$message->image;?>" class="img-fluid rounded" alt="">
                    </div>
                    <div class="col">
                        <div class="card-block px-2">
                            <h4 class="card-title"><?=$message->email;?></h4>
                            <p class="card-text"><?=$message->message;?></p>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card-footer w-100 text-muted">
                    <?=$message->id;?>
                    <?=$message->date;?>
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