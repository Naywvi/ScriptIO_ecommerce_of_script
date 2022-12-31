<?php
function connexion($user){
    if(strlen($user['id_user']) == 0){
                          
        echo'
        <li class="nav-item">
            <a class="nav-link nav-color disabled" href="signin" tabindex="-1" aria-disabled="true">Sign in</a>
        </li>

        <li class="nav-item">
            <a class="nav-link nav-color disabled" href="signup" tabindex="-1" aria-disabled="true">Sign Up</a>
        </li> 

        <li class="nav-item shop notification-shop icon-header-space">
            <a href="my-wish-list">
                    <span class="material-symbols-outlined icon-wish-list badge-not-wish icon-header-space">heart_plus</span>
            </a>
        </li>

        ';

    }else{
        include_once('./src/user/history.php');
        $not = popup($user['id_user']);
        echo '
        <li class="nav-item shop notification-shop icon-header-space">
            <a href="my-wish-list">
                    <span class="material-symbols-outlined icon-wish-list badge-not-wish icon-header-space">heart_plus</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link nav-color disabled" href="?signout" onclick="signout()" tabindex="-1" aria-disabled="true">Sign Out</a>
        </li> 
        <script src="./assets/js/signout.js"></script>
        

        <li class="nav-item">
            <div id="not" class="btn-group">
                <a class="notification nav-link nav-color dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Profile
                    '.$not.'
                </a>
                <div class="dropdown-menu dropdown-menu-right navtab-back-color">
                <a href="profile?user=' . $user['username'] . '" class="notification nav-link nav-color disabled">
                    <span>' . $user['username'] . ' profile</span>
                </a>
                <a class="nav-link nav-color disabled" href="profile-management?profile=' . $user['username'] . '"  tabindex="-1" aria-disabled="true">Manage profil</a>
                <a class="nav-link nav-color disabled" href="history?profile=' . $user['username'] . '">
                    News
                    '.popup($user['id_user']).'
                </a>

                <a class="nav-link nav-color disabled" href="manage-product?profile=' . $user['username'] . '">
                    Manage products
                </a>

                <a class="nav-link nav-color disabled" href="last-orders?profile=' . $user['username'] . '">
                    Last orders
                </a>

                </div>
            </div>
        </li>
        ';
    }
}
function admin($user){
    if($user['user_role'] == 'admin'){
        echo'
        <li class="nav-item">
            <a class="nav-link nav-color icon-header-space" href="/admin">Admin Panel<span class="sr-only">(current)</span></a>
        </li>  
        ';
    }
}
function publish($user){
    if(strlen($user['id_user']) != 0){  
    echo'
        <li class="nav-item">
            <a class="nav-link nav-color" href="new-item?profile='.$user['username'].'" tabindex="-1" aria-disabled="true">Publish your script</a>
        </li>
    '; 

    }
}
function dropDown($user){
    if(strlen($user['id_user']) != 0){
        echo'
        <li class="nav-item dropdown ">
            <a class="nav-link nav-color dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Items
            </a>
            <div class="dropdown-menu navtab-back-color nav-color" aria-labelledby="navbarDropdown">
                <div class="bg-danger nav-color nav-flex">
                    <h6 class="dropdown-header nav-color bold">FREE</h6>
                    <i class=\'fas fa-euro-sign navicon\'></i>
                </div>
                <a class="dropdown-item nav-trans nav-trans nav-color" href="wrap-item?profile='.$user['id_user'].'&rubric=free&field=free">Free</a>
                <div class="dropdown-divider"></div>
                <div class="nav-flex">
                    <h6 class="dropdown-header nav-color nav-color">Fun </h6>
                    <i class=\'far fa-hand-lizard navicon\'></i>
                </div>
                <a class="dropdown-item nav-trans nav-color" href="wrap-item?profile='.$user['id_user'].'&rubric=fun&field=social-networks">Social networks</a>
                <a class="dropdown-item nav-trans nav-color" href="wrap-item?profile='.$user['id_user'].'&rubric=fun&field=scrapping">Scrapping</a>
                <div class="dropdown-divider"></div>
                <div class="nav-flex">
                    <h6 class="dropdown-header nav-color">Automating</h6>
                    <i class=\'fas fa-list navicon\'></i>
                </div>
                <a class="dropdown-item nav-trans nav-color" href="wrap-item?profile='.$user['id_user'].'&rubric=automating&field=emailing">Emailing</a>
                <a class="dropdown-item nav-trans nav-color" href="wrap-item?profile='.$user['id_user'].'&rubric=automating&field=macro">Macro</a>
                <a class="dropdown-item nav-trans nav-color" href="wrap-item?profile='.$user['id_user'].'&rubric=automating&field=web">Web</a>
                <div class="dropdown-divider"></div>
                <div class="nav-flex">
                    <h6 class="dropdown-header nav-color">OS </h6>
                    <i class=\'fas fa-desktop navicon\'></i>
                </div>
                <a class="dropdown-item nav-trans nav-color" href="wrap-item?profile='.$user['id_user'].'&rubric=os&field=windows">Windows</a>
                <a class="dropdown-item nav-trans nav-color" href="wrap-item?profile='.$user['id_user'].'&rubric=os&field=linux">Linux</a>
                <a class="dropdown-item nav-trans nav-color" href="wrap-item?profile='.$user['id_user'].'&rubric=os&field=macos">MacOS</a>
                <a class="dropdown-item nav-trans nav-color" href="wrap-item?profile='.$user['id_user'].'&rubric=os&field=mobile">Mobile</a>
                <div class="dropdown-divider"></div>
                <div class="nav-flex">
                    <h6 class="dropdown-header nav-color">Other </h6>
                    <i class=\'fas fa-glasses navicon\'></i>
                </div>
                <a class="dropdown-item nav-trans nav-color" href="wrap-item?profile='.$user['id_user'].'&rubric=other&field=other">Other</a>
            </div>
        </li>
        ';
    }else{
        echo'
        <li class="nav-item dropdown ">
            <a class="nav-link nav-color dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Items
            </a>
            <div class="dropdown-menu navtab-back-color nav-color" aria-labelledby="navbarDropdown">
                <div class="bg-danger nav-color nav-flex">
                    <h6 class="dropdown-header nav-color bold">FREE</h6>
                    <i class=\'fas fa-euro-sign navicon\'></i>
                </div>
                <a class="dropdown-item nav-trans nav-trans nav-color" href="wrap-item?profile=0&rubric=free&field=free">Free</a>
                <div class="dropdown-divider"></div>
                <div class="nav-flex">
                    <h6 class="dropdown-header nav-color nav-color">Fun </h6>
                    <i class=\'far fa-hand-lizard navicon\'></i>
                </div>
                <a class="dropdown-item nav-trans nav-color" href="wrap-item?profile=0&rubric=fun&field=social-networks">Social networks</a>
                <a class="dropdown-item nav-trans nav-color" href="wrap-item?profile=0&rubric=fun&field=scrapping">Scrapping</a>
                <div class="dropdown-divider"></div>
                <div class="nav-flex">
                    <h6 class="dropdown-header nav-color">Automating</h6>
                    <i class=\'fas fa-list navicon\'></i>
                </div>
                <a class="dropdown-item nav-trans nav-color" href="wrap-item?profile=0&rubric=automating&field=emailing">Emailing</a>
                <a class="dropdown-item nav-trans nav-color" href="wrap-item?profile=0&rubric=automating&field=macro">Macro</a>
                <a class="dropdown-item nav-trans nav-color" href="wrap-item?profile=0&rubric=automating&field=web">Web</a>
                <div class="dropdown-divider"></div>
                <div class="nav-flex">
                    <h6 class="dropdown-header nav-color">OS </h6>
                    <i class=\'fas fa-desktop navicon\'></i>
                </div>
                <a class="dropdown-item nav-trans nav-color" href="wrap-item?profile=0&rubric=os&field=windows">Windows</a>
                <a class="dropdown-item nav-trans nav-color" href="wrap-item?profile=0&rubric=os&field=linux">Linux</a>
                <a class="dropdown-item nav-trans nav-color" href="wrap-item?profile=0&rubric=os&field=macos">MacOS</a>
                <a class="dropdown-item nav-trans nav-color" href="wrap-item?profile=0&rubric=os&field=mobile">Mobile</a>
                <div class="dropdown-divider"></div>
                <div class="nav-flex">
                    <h6 class="dropdown-header nav-color">Other </h6>
                    <i class=\'fas fa-glasses navicon\'></i>
                </div>
                <a class="dropdown-item nav-trans nav-color" href="wrap-item?profile=0&rubric=other&field=other">Other</a>
            </div>
        </li>
        ';
    }
}
?>