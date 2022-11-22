<?php /**@var \App\Models\Shoes $data*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../../../public/css/main.css">
    <link rel="stylesheet" href="../../../public/css/checkout.css">
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
</head>
<body>
<!--Shopping cart-->
<div class="container">
    <div class="row">
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Add post</h4>
            <form action="?c=shoes&a=save&id=<?= $data->getId()?>" method="post" onsubmit="return validateInput()">
                <div class="row">
                    <div class=" mb-3">
                        <label for="text">Title</label>
                        <input type="text" class="form-control" name="title" id="titleInf" value="<?= $data->getTitle()?>">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="text"></label>
                    <input type="text" class="form-control" name="image_ref" id="imageIn" value="<?= $data->getImageRef()?>">
                </div>

                <div class="mb-3">
                    <label for="text"></label>
                    <input type="text" class="form-control" name="price" id="priceIn" value="<?= $data->getPrice()?>">
                </div>

                <div class="mb-3">
                    <label for="text"></label>
                    <input type="text" class="form-control" name="description" id="descriptionIn" value="<?= $data->getDescription()?>">
                </div>
                <hr class="mb-4">
                <button class="button-buy-checkout" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
