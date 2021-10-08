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
