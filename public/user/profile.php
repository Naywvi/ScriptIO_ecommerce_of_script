<head>
    <title>Script'iO - <?php echo $user['username']; ?> profile </title>
    <link rel="stylesheet" href="./assets/css/profile.css"/>
</head>
<body>
    <div class="container-fluid space">
    <div class="row row justify-content-md-center">
            <div class="col col-lg-3 step-installation shadow container-code code container-profil">
                <ul>
                    <?php
                        include_once('./src/user/profile.php');
                        left();
                    ?>
                </ul>
            </div> 
                <div class="col col-lg-3 shadow background-white">
                    <?php
                        include_once('./src/user/profile.php');
                        right();
                    ?>
                </div>
        </div>
    </div>
</body>