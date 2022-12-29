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

        
        ';

    }else{
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
            <a href="profile?user=' . $user['username'] . '" class="notification nav-link nav-color disabled">
                <span>' . $user['username'] . '</span>
                <span class="badge">3</span>
            </a> 
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
?>