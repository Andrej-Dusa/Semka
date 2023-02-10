<?php
/** @var string $contentHTML */
/** @var \App\Core\IAuthenticator $auth */
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <title><?= \App\Config\Configuration::APP_NAME ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
            integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/styl.css">
    <link rel="stylesheet" href="../../public/css/main.css">
    <script src="public/js/script.js"></script>
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
                <a class="nav-link" href="#">Men</a>
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
            <li class="nav-item">
                <a class="nav-link" href="?c=auth&a=login">Log in</a>
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
