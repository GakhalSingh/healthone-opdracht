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
        <h4 class="text-warning">Sportcenter HealthOne contact gegevens:</h4>
        <p class="text-white">
            Telefoon nummer : 0152578924 <br>
            Adres: zuidhoornseweg 6a, 2635DJ Den Hoorn <br>
            E-Mail: info@healthone.com
        </p>
        <hr>
        <h4 class="text-warning">Contact opnemen</h5>
            <form>
                <div class="form-group">
                    <label class="text-white" for="Emailadress">E-mail address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Hier invoeren">
                    <small id="emailHelp" class="text-warning">Voer uw persoonlijke e-mail in.</small>
                </div>
                <div class="form-group">
                    <label class="text-white" for="bericht">Bericht</label>
                    <input type="text" class="form-control" name="bericht" id="bericht" placeholder="Hier invoeren">
                    <small id="emailHelp" class="text-warning">Voer hier uw bericht aan ons in.</small>
                </div>
                <button type="submit" name="verzenden" class="btn btn-light">Submit</button>
            </form>
            <hr>
            <br>
            <?php
            include_once('defaults/footer.php');
            ?>
    </div>

</body>

</html>