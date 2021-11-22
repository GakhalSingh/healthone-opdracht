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
        <a> gebruikersnaam </a>
        <input type ="text"> gebruikersnaam </a>

        <?php global $shophours; ?>

        <h4 class="text-warning">Locatie:</h4>
        <div class="foreign-embed">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2456.639189021884!2d4.33007681606151!3d51.99522967971829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5b44d61a108cf%3A0x9da6361d0a36ebd1!2sZuidhoornseweg%206A%2C%202625%20DV%20Den%20Hoorn!5e0!3m2!1snl!2snl!4v1633693263063!5m2!1snl!2snl" width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <hr>
        <?php
        include_once('defaults/footer.php');
        ?>
    </div>
</body>

</html>