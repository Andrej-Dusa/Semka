<?php
/** @var string $contentHTML */
/** @var \App\Core\IAuthenticator $auth */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../php_mysql/www/public/css/main.css">
    <link rel="stylesheet" href="../php_mysql/www/public/css/checkout.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Silkscreen">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Teko">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="../../../public/js/script.js"></script>
</head>
<body>
<!--Single item container-->
<?php /* @var \App\Models\Shoes $data */ ?>
<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card" style="border-style: none">
                <div class="row">
                    <div class="col-md-6">
                        <div class="images p-3">
                            <div class="text-center p-4">
                                <img id="main-image" src="<?= $data->getImageRef()?>" class="img-responsive" style="width:100%" alt="Image">
                            </div>
                            <div class="thumbnail text-center">
                                <img onclick="change_image(this)" src="<?= $data->getImageRef()?>" class="img-responsive" style="width:25%" alt="Image" >
                                <img onclick="change_image(this)" src="<?= $data->getImageRef()?>" class="img-responsive" style="width:25%" alt="Image" >
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                            <div class="mt-4 mb-3">
                                <span class="text-uppercase text-muted brand">Nike Sportswear</span>
                                <div class="panel-heading"><?= $data->getTitle()?></div>
                                <div class="price d-flex flex-row align-items-center">
                                    <div class="panel-footer"><?= $data->getPrice()?>€</div>
                                </div>
                            </div>
                            <p class="about">
                                <?= $data->getDescription()?>
                            </p>
                            <div class="sizes mt-5">
                                <select id="sizeDropdownMenuLink" >
                                    <option class="dropdown-item" value="">Size</option>
                                    <option class="dropdown-item" value="40">40</option>
                                    <option class="dropdown-item" value="41">41</option>
                                    <option class="dropdown-item" value="42">42</option>
                                </select>
                            </div>
                            <div class="cart mt-4 align-items-center">
                                <?php if ($auth->isLogged()) {?>
                                    <button class="button-buy">Add to cart</button>
                                <?php }else {?>
                                    <p class="warning">
                                        You have to be logged in if you want to be able to buy our products.
                                    </p>
                                    <form action="?c=auth&a=login" method="post"">
                                    <button class="button-buy">Log in</button>
                                    </form>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<p class ="review-title">Reviews</p>
<?php $reviews = \App\Models\Review::getAll("id_shoe = ?", [$data->getId()]);
            foreach($reviews as $post) { ?>
<div class="review-table">
    <ul>
        <li class="name-of-customer">
            <?= \App\Models\User::getOne($post->getIdUser())->getName() ?>
        </li>
        <li class="rating">
            <?= $post->getRating() ?>/10
        </li>
    </ul>
    <ul class="comment-box">
        <li class="comment">
            <?= $post->getComment() ?>
        </li>
    </ul>
</div>
<?php } ?>
<p class ="review-title">We want to know your opinion</p>
<?php if ($auth->isLogged()) {?>
    <form action="?c=review&a=add&shoeId=<?= $data->getId() ?>&userId=<?= $auth->getLoggedUserId()->getId() ?>" method="post" onsubmit="return validateReview()">
<?php } ?>
    <div class="rating-box">
        <div class="rating-input">
            <label for="text"></label>
            <input type="text" class="form-control" name="rating" id="ratingIn" placeholder="Enter rating from 1-10">
        </div>
        <div class="comment-input">
            <label for="text"></label>
            <textarea type="text" class="form-control" name="comment" id="commentIn" placeholder="Enter your comment on product" rows="2"></textarea>
        </div>
        <?php if ($auth->isLogged()) {?>
        <div>
            <button class="button-review">Submit</button>
        </div>
        <?php }else {?>
        <p class="warning">
            You have to be logged in if you want to leave reviews.
        </p>
        <form action="?c=auth&a=login" method="post"">
        <button class="button-buy">Log in</button>
    </form>
<?php } ?>
</div>
<?php if ($auth->isLogged()) {?>
</form>
<?php } ?>
</body>
