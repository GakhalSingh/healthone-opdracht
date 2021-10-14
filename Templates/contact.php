<!DOCTYPE html>
    <html>
    <?php
    include_once('defaults/head.php');
    ?>
    <body>
        <div class="container">
            <?php
            include_once ('defaults/header.php');
            include_once ('defaults/menu.php');
            include_once ('defaults/pictures.php');
            ?>
            <h4>Sportcenter HealthOne contact gegevens:</h4>
            Telefoon nummer : 0152578924 <br>
            Adres: zuidhoornseweg 6a, 2635DJ Den Hoorn <br>
            E-Mail: info@healthone.com <br>
            <hr>
            <h3>Locatie:</h3>
            <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2456.639189021884!2d4.33007681606151!3d51.99522967971829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5b44d61a108cf%3A0x9da6361d0a36ebd1!2sZuidhoornseweg%206A%2C%202625%20DV%20Den%20Hoorn!5e0!3m2!1snl!2snl!4v1633693263063!5m2!1snl!2snl" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <hr>
            <h5>Contact opnemen</h5>
            <form>
                <div class="form-group">
                    <label for="Emailadress">E-mail address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Voer E-Mail in">
                    <small id="emailHelp" class="form-text text-muted">Voer uw persoonlijke e-mail in.</small>
                </div>
                <div class="form-group">
                    <label for="bericht">Bericht</label>
                    <input type="password" class="form-control" id="bericht" placeholder="Hier invoeren">
                    <small id="emailHelp" class="form-text text-muted">Voer hier uw bericht aan ons in.</small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            <?php
            include_once ('defaults/footer.php');
            ?>
        </div>
    </body>
</html>
