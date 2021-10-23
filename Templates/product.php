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
            <h3>Product</h3>
            
                    <div class="row gy-3 ">
                <?php global $products ?>
                    <?php global $category_Id?>
                    <?php foreach ($products as $product): ?>
                    <div class="col-sm-6 col-md-6">
                        <div class="card" style="width: 35rem; height: 35rem">
                            <div class="card-body text-center">
                                <div class="card-title mb-3">                            
                                    <?= $product->name; ?>                              
                                </div>                        
                                <div>
                                    <a href="/categories/<?=$product->category_id?>">
                                        <img class="product-img img-responsive center-block" src='<?= $product->image ?>'/>
                                    </a>    
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <hr>
            <?php
            include_once ('defaults/footer.php');
            ?>
        </div>
    </body>
</html>
