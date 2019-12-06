<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/slick.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/slick-theme.css">
    <title><?= $judul; ?></title>
</head>

<body>
    <nav class="sticky-top navbar navbar-expand-lg navbar-dark bg-dark transparant">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url(); ?>">BECAUSEØMAT</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link mr-3" href="<?= base_url(); ?>">Home</a>
                    <a class="nav-item nav-link mr-3" href="<?= base_url(); ?>shop">Shop</a>
                    <a class="nav-item nav-link mr-3" href="<?= base_url(); ?>service">Customer Service</a>
                </div>
            </div>
            <div>
                <a class="" href="<?= base_url(); ?>chart">
                    <img src="<?= base_url(); ?>assets/images/shopping-cart.png" width="30" height="30" alt="">
                </a>
            </div>
            <div class="dropdown marle">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown">
                    <img src="<?= base_url(); ?>assets/images/user.png" width="30" height="30" alt="">
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Login</a>
                </div>
            </div>
        </div>
    </nav>