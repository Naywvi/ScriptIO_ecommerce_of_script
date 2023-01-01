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
                            <?php 
                                include_once('./src/_header.php');
                                dropDown($user);
                            ?>
                        <li class="nav-item">
                            <a class="nav-link nav-color" href="privacy-policy" tabindex="-1" aria-disabled="true">Privacy Policy</a>
                        </li>
                            <?php 
                                include_once('./src/_header.php');
                                publish($user);
                            ?>
                    </ul>
                    <ul class="navbar-nav my-2 my-lg-0">
                            <?php 
                                include_once('./src/_header.php');
                                admin($user);
                            ?>
                            <?php 
                                include_once('./src/_header.php');
                                connexion($user);
                            ?>
                    </ul>
                </div>
            </nav>
        </header>
