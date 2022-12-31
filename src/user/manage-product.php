<?php
//insert into product values (3,17,'produit1','1','description','installation_steps','10','NULL','NULL','UNLIMITED','3','25','short_description','last_price','motz_installation_steps','10','5')
function takeProducts($id_user){
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $stmt = $myPDO->query("SELECT * FROM product WHERE id_user = $id_user");
    $row = $stmt->fetchAll();
    $stmt = null;
    $myPDO = null;
    return $row;
}
function lastPrice($product){
    if($product[13] === 'NULL'){
        return'
        <p class="small text-danger"><s>No discount applied</s></p>
        ';
    }else{
        return'
        <p class="small text-danger"><s>$'.$product[13].'</s></p>
        ';
    }
}
function trustProduct($product){
    if($product[10] == '1'){
        return '
        <i class="fa fa-star text-secondary"></i>
        <i class="fa fa-star text-secondary"></i>
        <i class="fa fa-star text-secondary"></i>
        <i class="fa fa-star text-secondary"></i>
        <i class="fa fa-star text-secondary"></i>
        ';
    }else if($product[10] == '2'){
        return '
        <i class="fa fa-star yellow"></i>
        <i class="fa fa-star yellow"></i>
        <i class="fa fa-star text-secondary"></i>
        <i class="fa fa-star text-secondary"></i>
        <i class="fa fa-star text-secondary"></i>
        ';
    }else if($product[10] == '3'){
        return '
        <i class="fa fa-star yellow"></i>
        <i class="fa fa-star yellow"></i>
        <i class="fa fa-star yellow"></i>
        <i class="fa fa-star text-secondary"></i>
        <i class="fa fa-star text-secondary"></i>
        ';
    }else if($product[10] == '4'){
        return '
        <i class="fa fa-star yellow"></i>
        <i class="fa fa-star yellow"></i>
        <i class="fa fa-star yellow"></i>
        <i class="fa fa-star yellow"></i>
        <i class="fa fa-star text-secondary"></i>
        ';
    }else if($product[10] == '5'){
        return '
        <i class="fa fa-star yellow"></i>
        <i class="fa fa-star yellow"></i>
        <i class="fa fa-star yellow"></i>
        <i class="fa fa-star yellow"></i>
        <i class="fa fa-star yellow"></i>
        ';
    }else{
        return '
        <i class="fa fa-star text-secondary"></i>
        <i class="fa fa-star text-secondary"></i>
        <i class="fa fa-star text-secondary"></i>
        <i class="fa fa-star text-secondary"></i>
        <i class="fa fa-star text-secondary"></i>
        ';
    }
}

function imageProduct($product){
    if($product[7] === 'NULL'){
        return '<a href="item?product='.$product[0].'"> <img src="https://www.sdfashionbridaldesigner.com/public/images/no-item.png" class="card-img-top img-product" /> </a>';
    }else{
        return '<a href="item?product='.$product[0].'"> <img src="'.$product[7].'" class="card-img-top img-product" /> </a>';
    }
}

function products($user){
    $query = htmlspecialchars($_GET["profile"]);
    if($user['username'] === $query){
        if($row_products = takeProducts($user['id_user'])){
            
            foreach($row_products as $v){
                foreach($v as $p){
                    $lastPrice = lastPrice($v);
                    $trustProduct = trustProduct($v);
                    $imageProduct = imageProduct($v);
                    echo'
                    <div class="col-md-6 col-lg-4 mb-4 mb-md-0 space">
                        <div class="card">
                        <div class="d-flex justify-content-between p-3">
                            <a href="modify-item?product='.$v[0].'&profile='.$user['username'].'"><p class="lead mb-0" style="color: #ed0c21;text-align: center !important;">Edit '.$v[2].'</p></a>
                            <div
                            class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
                            style="width: 35px; height: 35px;">
                            <p class="text-white mb-0 small">'.$v[15].'</p>
                            </div>
                        </div>

                        '.$imageProduct.'
                        <div class="card-body">

                            <div class="d-flex justify-content-between">
                            <p class="small"><a href="item?product='.$v[0].'" class="text-muted">Last price</a></p>
                            '.$lastPrice.'
                            </div>

                            <div class="d-flex justify-content-between">
                            <p class="small"><a href="item?product='.$v[0].'" class="text-muted">New price</a></p>
                            <p class="text-dark">$'.$v[6].'</p>
                            </div>

                            <div class="d-flex justify-content-between">
                            <p class="small"><a href="item?product='.$v[0].'" class="text-muted">View</a></p>
                            <p class="text-dark">'.$v[11].'</p>
                            </div>

                            <div class="d-flex justify-content-between mb-2">

                            <p class="text-muted mb-0">Available: <span class="fw-bold">'.$v[9].'</span></p>

                            <div class="ms-auto text-warning">
                                '.$trustProduct.'
                            </div>
                            
                            </div>
                        </div>
                        </div>
                    </div>
                    ';

                    break;
                }
            }
                    
        }else{
            echo '<scipt>alert("You have no products listed")</script><meta http-equiv="refresh" content="2; /" />';
        }
        
    }else{
        echo '<meta http-equiv="refresh" content="0; /" />';
    }
}


?>