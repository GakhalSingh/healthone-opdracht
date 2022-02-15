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
        <h3 class="text-warning">Product editen:</h3>
        <div class="row gy-4 container rounded" style="width: 95%; margin: auto;">
        <form method="post" >
            <div class="form-group" enctype="multipart/form-data">
                    <label class="text-warning">Machine Naam</label>
                    <input type="text" class="form-control" name="name" aria-describedby="name" placeholder="Enter Name">
                    <small>Voer hier de machine naam in.</small>
                </div>
                <div class="form-group">
                    <label class="text-warning">Machine Beschrijving</label>
                    <input type="text" class="form-control" name="description" placeholder="Enter Description">
                    <small>Voer beschrijving die u bij deze Machine wilt tonen in.</small>
                </div>
                <div class="form-group">
                    <label class="text-warning">Machine Categorie</label>
                    <input type="number" class="form-control" name="categoryid" placeholder="Enter Category">
                    <small>Type hier de categorie nummer in.</small>
                    <?php
                    for ($total = 0; $total > $categories; $total++) {
                    echo "<option value=$total>" . $total . "</option>";
                    }
                ?>
                </div>
                <div class="form-group">
                    <label class="text-warning">Machine Afbeelding</label><br>
                    <input type="file" name="machineimageupload"><br>
                    <small>Upload de afbeelding die u bij deze product wilt laten tonen.</small>
                </div><br>
                <button type="submit" name="addmachinebutton" class="btn btn-success" >Submit</button>
            </form>
            <br>
        </div>
        <hr>
        <?php
        include_once('../Templates/defaults/footer.php');
        ?>
    </div>
</body>

</html>