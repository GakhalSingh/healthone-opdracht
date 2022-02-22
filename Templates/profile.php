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
        <div style="width: 95%; margin: auto;">
        <h2 class="text-warning">Welkom <?= $_SESSION['user']->name;?>!</h2>
        <div class="container rounded">
        <form  method="post">
        <h5 class="text-warning">Profiel</h5>
        <img src="<?= $_SESSION['user']->image;?>" class="img-fluid rounded float-left" style= "height:50px" alt="Responsive image"><a href=""> Wijzig afbeelding</a><br><br>
            <div class="form-group">
                <label class="text">Wijzig Naam:</label>
                <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter name" value="<?= $_SESSION['user']->name;?>">
                <small class="text-warning">Voer uw volledige naam in.</small>
            </div>
            <div class="form-group">
                <label class="text">Wijzig E-Mail address:</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="<?= $_SESSION['user']->email;?>">
                <small class="text-warning">Voer nieuwe e-mail in.</small>
            </div>
            <br>
        <h5 class="text-warning">Beveiliging</h5>
            <div class="form-group">
                <label class="text">Oud Wachtwoord:</label>
                <input type="password" class="form-control" name="password" placeholder="Wachtwoord">
                <small class="text-warning">Voer uw oude wachtwoord in.</small>
            </div>
            <div class="form-group">
                <label class="text">Nieuw Wachtwoord:</label>
                <input type="password" class="form-control" name="password" placeholder="Wachtwoord">
                <small class="text-warning">Maak een sterk wachtwoord van tenmiste 8 tekens.</small>
            </div>
            <button type="submit" name="verzenden" class="btn btn-warning text-light" >Opslaan</button><br><br>
        </form>
    </div>
        <hr>
        </div>
        <?php
        include_once('defaults/footer.php');
        ?>
    </div>
</body>

</html>