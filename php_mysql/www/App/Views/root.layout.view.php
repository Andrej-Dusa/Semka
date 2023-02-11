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
        <p class="under_title">Clothes make a man</p>
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
                <a class="nav-link" href="#">Clothing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?c=user&a=edit&id=<?= $auth->getLoggedUserId()->getId()?>">Men</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Woman</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger" href="#">Sales %</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown link
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
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
    <p class="under_title">Autumn style</p>
    <p class="simple_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a mattis mi, a condimentum
        diam. Praesent ultrices rutrum massa ut pretium. In hac habitasse platea dictumst. Integer vel vulputate sem,
        vitae dapibus sem. Nam id diam ac quam cursus ullamcorper id nec ex. Donec tempor tempus libero sit amet lobortis. Nulla quis egestas
        justo. Vivamus pellentesque ipsum at efficitur imperdiet. Nunc auctor, purus vel pulvinar facilisis, ex ex
        blandit mi, ultrices cursus massa ex elementum quam. Fusce ut lectus lorem. Fusce dictum viverra nibh, at
        bibendum lectus accumsan nec. Sed vel est at nisl accumsan tempor vel eget nisi. Integer rhoncus, mi in
        pellentesque fermentum, lectus libero fermentum erat, nec mattis libero risus eget sem.
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
                <a class="footer-link">Cookie settings</a>
            </li>
            <li class="footer-line">
                <a class="footer-link">Payment method</a>
            </li>
            <li class="footer-line">
                <a class="footer-link">Nieco nieco</a>
            </li>
            <li class="footer-line">
                <a class="footer-link">Nieco nieco</a>
            </li>
            <li class="footer-line">
                <a class="footer-link">Nieco nieco</a>
            </li>
        </ul>
        <ul class="footer-table">
            <li class="footer-line">
                <a class="footer-link">Cookie settings</a>
            </li>
            <li class="footer-line">
                <a class="footer-link">Payment method</a>
            </li>
        </ul>
    </div>
    <p class="copyright">&copy; 2017-2019 Urban Store</p>
</footer>
</body>
</html>

