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
    <img class="only_picture_logo" src="../php_mysql/www/public/images/only_picture_logo.png" alt="">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="">Urban Store</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Shoes</a>
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
                <button class="button-sign ms-auto">Sign in</button>
            </li>
        </ul>
    </div>
</nav>
<!--Product gallery-->
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-body"><img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/4f37fca8-6bce-43e7-ad07-f57ae3c13142/air-force-1-07-mens-shoes-5QFp5Z.png" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-heading">Nike Air Force 1 '07</div>
                <div class="panel-footer">119,95€</div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-danger">
                <div class="panel-body"><img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/585f399c-2ae5-4e12-9a4e-df531c0de400/air-jordan-1-retro-high-og-shoe-PLe8kL.png" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-heading">Jordan 1 Shoes. Nike VN</div>
                <div class="panel-footer">134,95€</div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-success">
                <div class="panel-body"><img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/209889d9-4910-4f06-9d07-18afa558b566/air-max-270-mens-shoes-KkLcGR.png" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-heading">Nike Air Max 270</div>
                <div class="panel-footer">109,95€</div>
            </div>
        </div>
    </div>
</div><br>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-body"><img src="https://assets.adidas.com/images/w_383,h_383,f_auto,q_auto,fl_lossy,c_fill,g_auto/09dedabadd1a4ce187efaeb5004965bc_9366/ozelia-shoes.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-heading">Adidas Ozelia</div>
                <div class="panel-footer">144,95€</div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-body"><img src="https://assets.adidas.com/images/w_383,h_383,f_auto,q_auto,fl_lossy,c_fill,g_auto/3b6da90d6e7c41fa821ca60600991dd9_9366/gazelle-shoes.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-heading">Adidas Gazelle</div>
                <div class="panel-footer">99,95€</div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-body"><img src="https://assets.adidas.com/images/w_383,h_383,f_auto,q_auto,fl_lossy,c_fill,g_auto/1a26b91573114286ba67ae7400ff767e_9366/nmd_r1-shoes.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-heading">Adidas NMD_R1</div>
                <div class="panel-footer">129,95€</div>
            </div>
        </div>
    </div>
</div><br><br>
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
<!DOCTYPE html>
<html lang="sk">
<head>
    <title><?= \App\Config\Configuration::APP_NAME ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/styl.css">
    <script src="public/js/script.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="?c=home">
            <img src="public/images/vaiicko_logo.png" title="<?= \App\Config\Configuration::APP_NAME ?>"
                 title="<?= \App\Config\Configuration::APP_NAME ?>">
        </a>
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link" href="?c=home&a=contact">Kontakt</a>
            </li>
        </ul>
        <?php if ($auth->isLogged()) { ?>
            <span class="navbar-text">Prihlásený používateľ: <b><?= $auth->getLoggedUserName() ?></b></span>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="?c=auth&a=logout">Odhlásenie</a>
                </li>
            </ul>
        <?php } else { ?>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= \App\Config\Configuration::LOGIN_URL ?>">Prihlásenie</a>
                </li>
            </ul>
        <?php } ?>
    </div>
</nav>
<div class="container-fluid mt-3">
    <div class="web-content">
        <?= $contentHTML ?>
    </div>
</div>
</body>
</html>
