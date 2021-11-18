<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
global $product;
?>

<body>

    <div class="container" style="background:gray">
        <?php
        include_once('defaults/header.php');
        include_once('defaults/menu.php');
        include_once('defaults/pictures.php');
        ?>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="/home">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="/categories">Categories</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="/categories/<?= $categoryId ?>"><?= $name ?></a></li>
                <li class="breadcrumb-item"><a class="text-white" href=""><?= $product->name ?></a></li>
            </ol>
        </nav>
        <div class="col-md-7 order-md-2">
            <h1 class="text-warning"><?= $product->name; ?></h1>
            <img class="img-fluid" src="<?= $product->image; ?>">
        </div>
        <hr>
        <div class="col-md-5 order-md-1">
            <p class="text-white">
                <?= $product->description ?>
            </p>
        </div>
        <hr>
        <form method="saveReview">
            <h3 class="text-warning">
                Review Posten
            </h3>
            <div class="form-group">
                <label class="text-white" for="reviewTitle">Title</label>
                <input type="text" class="form-control" id="productReviewTitle" placeholder="Enter Title">
                <small id="name" class="text-warning">Voer uw titel in.</small>
            </div>
            <div class="form-group">
                <label class="text-white" for="reviewText">Review</label>
                <input type="text" class="form-control" id="productReviewText" placeholder="Enter Review">
                <small id="review" class="text-warning">Voer uw review in.</small>
            </div>
            <div class="rate" id="stars">
                <input type="radio" id="star5" name="rate" value="5" />
                <label for="star5" title="5 sterren">5 stars</label>
                <input type="radio" id="star4" name="rate" value="4" />
                <label for="star4" title="4 sterren">4 stars</label>
                <input type="radio" id="star3" name="rate" value="3" />
                <label for="star3" title="3 sterren">3 stars</label>
                <input type="radio" id="star2" name="rate" value="2" />
                <label for="star2" title="2 sterren">2 stars</label>
                <input type="radio" id="star1" name="rate" value="1" />
                <label for="star1" title="1 sterren">1 star</label>
            </div>
            <br>
            <br>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="captchaCheck">
                <label class="text-white" class="form-check-label" for="captchaCheck">Ik ben geen robot</label>
            </div>

            <button onclick="saveReview()" type="submit" class="btn btn-light">Submit</button>
        </form>
        <br>
        <div class="card-deck">
            <?php
            $reviews = getReviews($productId);
            foreach ($reviews as $review) : ?>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $review->name; ?></a></h5>
                        <p class="card-text"><?= $review->review; ?></p>
                        <a><?php for ($x = 0; $review->stars >= $x; $x++) {
                            echo "⭐";
                            }
                        ?></a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><?= $review->postdate; ?></small>
                    </div>
                </div>
            <?php endforeach; ?>            
        </div>
        <div>
            <?php
            include_once('defaults/footer.php');
            ?>
        </div>
    </div>   
</body>

</html>