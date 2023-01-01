<?php

function getComments($id_product){
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $stmt = $myPDO->query("SELECT * FROM comment WHERE id_product = $id_product");
    $row = $stmt->fetchAll();
    $stmt = null;
    $myPDO = null;
    return $row;
}

function listComment($user){
        $trustPlusTard = '<div class="card">
        <div class="row justify-content-left d-flex">
            <div class="col-md-4 d-flex flex-column">
                <div class="rating-box">
                    <h1 class="pt-4">4.0</h1>
                    <p class="note">out of 5</p>
                </div>
                <div>
                    <span class="fa fa-star star-active mx-1"></span>
                    <span class="fa fa-star star-active mx-1"></span>
                    <span class="fa fa-star star-active mx-1"></span>
                    <span class="fa fa-star star-active mx-1"></span>
                    <span class="fa fa-star star-inactive mx-1"></span>
                </div>
            </div>
            <div class="col-md-8">
                <div class="rating-bar0 justify-content-center">
                    <table class="text-left mx-auto">
                        <tr>
                            <td class="rating-label">Excellent</td>
                            <td class="rating-bar">
                                <div class="bar-container">
                                  <div class="bar-5"></div>
                                </div>
                            </td>
                            <td class="text-right">123</td>
                        </tr>
                        <tr>
                            <td class="rating-label">Good</td>
                            <td class="rating-bar">
                                <div class="bar-container">
                                  <div class="bar-4"></div>
                                </div>
                            </td>
                            <td class="text-right">23</td>
                        </tr>
                        <tr>
                            <td class="rating-label">Average</td>
                            <td class="rating-bar">
                                <div class="bar-container">
                                  <div class="bar-3"></div>
                                </div>
                            </td>
                            <td class="text-right">10</td>
                        </tr>
                        <tr>
                            <td class="rating-label">Poor</td>
                            <td class="rating-bar">
                                <div class="bar-container">
                                  <div class="bar-2"></div>
                                </div>
                            </td>
                            <td class="text-right">3</td>
                        </tr>
                        <tr>
                            <td class="rating-label">Terrible</td>
                            <td class="rating-bar">
                                <div class="bar-container">
                                  <div class="bar-1"></div>
                                </div>
                            </td>
                            <td class="text-right">0</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>';
    echo'<div class="col-xl-6 col-lg-8 col-md-10 col-12 text-center mb-5">
    '.$trustPlusTard .'
    <div class="card card-comment">';
    $comments = getComments(htmlspecialchars($_GET["item"]));
    settype($index,'integer');
    if($comments){
        
    
    foreach($comments as $v){
        $picture = getUserPicture($v[1]);
        echo'
        
        
            <div class="row d-flex">

                <div class="">
                    <img class="profile-pic" src="'.$picture[0].'">
                </div>

                <div class="d-flex flex-column">
                    <h3 class="mt-2 mb-0">'.$v[2].'</h3>
                    <div>
                        <p class="text-left">
                        <span class="text-muted">'.$v[4].'</span>
                        ';
                        echoTrusts($v[4]);
                        echo'
                        </p>
                    </div>
                </div>

                <div class="ml-auto">
                    <p class="text-muted pt-5 pt-sm-3">'.$v[6].'</p>
                </div>

            </div>

            <div class="row text-left">
                <p class="content">If you really enjoy spending your vacation "on water" or would like to try something new and exciting for the first time.</p>
            </div>
        
        ';


    }
    
}
    if($user['username']){
        newcComment($user);
    }
    echo'</div></div>';
}

function getUserPicture($id_user){
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $stmt = $myPDO->query("SELECT picture FROM users WHERE id_user = '$id_user'");
    $row = $stmt->fetch();
    $stmt = null;
    $myPDO = null;
    return $row;
}

function echoTrusts($trust){ 
  
    if(gettype($trust) == 'integer'){
        
        $rest = 5-$trust;

        for ($i = 0; $i <= $trust-1; $i++) {
            echo '<span class="fa fa-star star-active"></span>&#32;';
        }
        for ($i = 0; $i <= $rest-1; $i++) {
            echo '<span class="fa fa-star star-inactive"></span>&#32;';
        }

    }else{
        for ($i = 0; $i <= 4; $i++) {
            echo '<span class="fa fa-star star-inactive"></span>&#32;';
        }
    }
}

function newcComment(){
    echo'
    <form method="post" >

        <div class="form-outline mb-4">
            <h3 class="mt-2 mb-0">Give your opinion about the product</h3>
        </div>   
       

        <div class="form-outline mb-4">
            <input type="text" id="name" class="form-control" placeholder="title" name="title">
        </div>   

        <div class="form-outline mb-4" >
            <select style="text-align:center;" class="form-control" id="exampleFormControlSelect1" name="trust">
            <!-- ★ -->
            <option>⭐</option>
            <option>⭐⭐</option>
            <option>⭐⭐⭐</option>
            <option>⭐⭐⭐⭐</option>
            <option>⭐⭐⭐⭐⭐</option>
            </select>
        </div>

        <div class="form-outline mb-4">
            <textarea class="form-control" id="desc-left" rows="4" maxlength="250" placeholder="250 - characters max" name="content"></textarea>
        </div>

        <button class="btn btn-primary btn-block" name="new-comment">Send your comment</button>

    </form>
    ';
}

function addComment(){
    $user = htmlspecialchars($_COOKIE["session"]);
    $id_user = explode('-', $user);
    $id_product = htmlspecialchars($_GET["item"]);
    $title = $_POST['title'];
    $content = $_POST['content'];
    $trust = $_POST['trust'];
    $date = date("F j, Y, g:i a");
    $trust = strlen($trust)/3;

    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $stmt = $myPDO->query("INSERT INTO comment ('id_user','title','content','trust','id_product','date') VALUES ($id_user[0],'$title','$content',$trust,$id_product,'$date')");
    $stmt = null;
    $myPDO = null;

}
?>