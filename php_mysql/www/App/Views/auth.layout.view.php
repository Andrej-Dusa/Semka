<?php
/** @var string $contentHTML */
/** @var \App\Core\IAuthenticator $auth */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../../public/css/main.css">
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
<!--Title-->
<div class="jumbotron">
    <div class="container text-center">
        <h1 class="title">Urban Store</h1>
        <p class="under_title">Shoes make a man</p>
    </div>
</div>
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <img class="only_picture_logo" src="../../public/images/only_picture_logo.png" alt="">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="?c=home">Urban Store</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?c=shoes">Shoes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?c=cart&a=cart">Cart</a>
            </li>
            <?php if (!$auth->isLogged()) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="?c=auth&a=login">Profile</a>
                </li>
            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="?c=user&a=edit&id=<?= $auth->getLoggedUserId()->getId()?>">Profile</a>
                </li>
            <?php } ?>
            <li class="nav-item">
                <a class="nav-link text-danger" href="#">Sales %</a>
            </li>
            <span class="example-spacer"></span>
            <li class="nav-item">
                <?php if (!$auth->isLogged()) { ?>
                    <a class="nav-link login" href="?c=auth&a=login">Log in</a>
                <?php } else { ?>
                    <a class="nav-link login" href="?c=auth&a=logout">Log out</a>
                <?php } ?>
            </li>
        </ul>
    </div>
</nav>
<div class="container-fluid mt-3">
    <div class="web-content">
        <?= $contentHTML ?>
    </div>
</div>
<!--Footer-->
<footer class="container-fluid text-center">
    <p class="under_title">STORIES, STYLE, AND SPORTING GOODS</p>
    <p class="footer-text">Through sports, we have the power to change lives. Sports keep us fit. They keep us mindful.
        They bring us together. Athletes inspire us. They help us to get up and get moving. And sporting goods featuring
        the latest technologies help us beat our personal best. adidas is home to the runner, the basketball player, the
        soccer kid, the fitness enthusiast, the yogi. And even the weekend hiker looking to escape the city.
        The Urban store are everywhere and anywhere. In sports. In music. On life’s stages. Before the whistle blows,
        during the race, and at the finish line. We’re here to support creators. To improve their game.
        To live their lives. And to change the world.
    </p>

    <p class="under_title">Help and contacts</p>
    <div class="footer-menu">
        <ul class="footer-table">
            <li class="footer-line">
                <a class="footer-link">Cookie settings</a>
            </li>
            <li class="footer-line">
                <a class="footer-link">Payment method</a>
            </li>
        </ul>
        <ul class="footer-table">
            <li class="footer-line">
                <a class="footer-link">Order Status</a>
            </li>
            <li class="footer-line">
                <a class="footer-link">Shipping and Delivery</a>
            </li>
            <li class="footer-line">
                <a class="footer-link">Returns</a>
            </li>
            <li class="footer-line">
                <a class="footer-link">Contact Us</a>
            </li>
            <li class="footer-line">
                <a class="footer-link">How To Clean</a>
            </li>
        </ul>
        <ul class="footer-table">
            <li class="footer-line">
                <a class="footer-link">About Us</a>
            </li>
            <li class="footer-line">
                <a class="footer-link">Careers</a>
            </li>
        </ul>
    </div>
    <p class="copyright">&copy; 2022-2023 Urban Store</p>
</footer>
</body>
</html>
