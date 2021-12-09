!<!DOCTYPE html>
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

        <h4 class="text-warning">Healthone Login</h4>
        <?=$message?>
        <form  method="post">
            <div class="form-group">
                <label class="text-white">E-mail address</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                <small class="text-warning">Voer de e-mail in waarmee u gerigstreerd heeft.</small>
            </div>
            <div class="form-group">
                <label class="text-white">Wachtwoord</label>
                <input type="password" class="form-control" name="password" placeholder="Wachtwoord">
                <small class="text-warning">Voer de wachtwoord in waarmee u gerigstreerd heeft.</small>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input">
                <label class="text-white" class="form-check-label">Ik ben geen robot.</label>
            </div>
            <button type="submit" name="login" class="btn btn-light" >Submit</button>
        </form>

        <hr>
        <?php
        include_once('defaults/footer.php');
        ?>
    </div>
</body>

</html>