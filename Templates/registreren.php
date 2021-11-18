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

        <h4 class="text-warning">Sportcenter HealthOne registreren</h4>

        <form>
            <div class="form-group">
                <label class="text-white" for="userName">Naam</label>
                <input type="email" class="form-control" id="userName" aria-describedby="emailHelp" placeholder="Enter name">
                <small id="emailHelp" class="text-warning">Voer uw volledige naam in.</small>
            </div>
            <div class="form-group">
                <label class="text-white" for="emailAdress">E-mail address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="text-warning">Voer uw persoonlijke e-mail in.</small>
            </div>
            <div class="form-group">
                <label class="text-white" for="password">Wachtwoord</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Wachtwoord">
                <small id="emailHelp" class="text-warning">Maak een sterk wachtwoord van tenmiste 8 tekens.</small>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="text-white" class="form-check-label" for="exampleCheck1">Log me in</label>
            </div>
            <button type="submit" class="btn btn-light">Submit</button>
        </form>
        <hr>
        <?php
        include_once('defaults/footer.php');
        ?>
    </div>
</body>

</html>