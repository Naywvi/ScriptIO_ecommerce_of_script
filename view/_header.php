<!DOCTYPE html>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
            <link rel="stylesheet" href="./assets/css/_header.css" />
            <link rel="stylesheet" href="./assets/css/_header-media.css" />
            <link rel="stylesheet" href="./assets/css/_footer.css" />
            <link rel="stylesheet" href="./assets/css/_footer-media.css" />
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        </head>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light fixed-top nav-back-color">
                <img src="./assets/img/Scriptio.png" alt="" class="logo-header"/>
                <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="my-nav" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto nav-color">
                        <li class="nav-item active ">
                            <a class="nav-link nav-color" href="/">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-color" href="/best-seller" tabindex="-1" aria-disabled="true">Best Seller</a>
                        </li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link nav-color dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Items
                                </a>
                            <div class="dropdown-menu navtab-back-color nav-color" aria-labelledby="navbarDropdown">
                                <div class="bg-danger nav-color nav-flex">
                                    <h6 class="dropdown-header nav-color bold">FREE</h6>
                                    <i class='fas fa-euro-sign navicon'></i>
                                </div>
                                <a class="dropdown-item nav-trans nav-trans nav-color" href="#">Free</a>
                                <div class="dropdown-divider"></div>
                                <div class="nav-flex">
                                    <h6 class="dropdown-header nav-color nav-color">Fun </h6>
                                    <i class='far fa-hand-lizard navicon'></i>
                                </div>
                                <a class="dropdown-item nav-trans nav-color" href="#">Social networks</a>
                                <a class="dropdown-item nav-trans nav-color" href="#">Scrapping</a>
                                <div class="dropdown-divider"></div>
                                <div class="nav-flex">
                                    <h6 class="dropdown-header nav-color">Automating</h6>
                                    <i class='fas fa-list navicon'></i>
                                </div>
                                <a class="dropdown-item nav-trans nav-color" href="#">Emailing</a>
                                <a class="dropdown-item nav-trans nav-color" href="#">Macro</a>
                                <a class="dropdown-item nav-trans nav-color" href="#">Web</a>
                                <div class="dropdown-divider"></div>
                                <div class="nav-flex">
                                    <h6 class="dropdown-header nav-color">OS </h6>
                                    <i class='fas fa-desktop navicon'></i>
                                </div>
                                <a class="dropdown-item nav-trans nav-color" href="#">Windows</a>
                                <a class="dropdown-item nav-trans nav-color" href="#">Linux</a>
                                <a class="dropdown-item nav-trans nav-color" href="#">MacOS</a>
                                <a class="dropdown-item nav-trans nav-color" href="#">Mobile</a>
                                <div class="dropdown-divider"></div>
                                <div class="nav-flex">
                                    <h6 class="dropdown-header nav-color">Other </h6>
                                    <i class='fas fa-glasses navicon'></i>
                                </div>
                                <a class="dropdown-item nav-trans nav-color" href="#">Other</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-color" href="/policy-privacy" tabindex="-1" aria-disabled="true">Policy privacy</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav my-2 my-lg-0">
                        <li class="nav-item">
                            <a class="nav-link nav-color icon-header-space" href="/admin">Admin panel<span class="sr-only">(current)</span></a>
                        </li>     
                        <li class="nav-item shop notification-shop">
                            <a href="payment">
                            <span class="material-symbols-outlined icon-shop">shopping_bag</span>
                                    <span class="badge badge-not">3</span>
                            </a>
                        </li>
                        <li class="nav-item shop notification-shop icon-header-space">
                            <a href="payment">
                                    <span class="material-symbols-outlined icon-wish-list badge-not-wish icon-header-space">heart_plus</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-color disabled" href="/singin" tabindex="-1" aria-disabled="true">Sign in</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-color disabled" href="/singup" tabindex="-1" aria-disabled="true">Sign Up</a>
                        </li>
                                                <li class="nav-item">
                            <a href="/profile" class="notification nav-link nav-color disabled">
                                <span>Profile</span>
                                <span class="badge">3</span>
                            </a> 
                        </li>
                    </ul>
                </div>
            </nav>
        </header>