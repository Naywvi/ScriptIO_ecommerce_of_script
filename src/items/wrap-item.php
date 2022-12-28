<?php

                                    // print products from database

                                    function printItems() {
                                    $myPDO = new PDO('sqlite:./db/Scriptio.db');

                                    $statement = $myPDO->prepare("SELECT * FROM product");
                                    $statement->execute();

                                    $result = $statement->fetchAll();

                                    foreach ($result as $row) {
                                        echo '                             <div class="card-body">
                                        <h5 class="card-title white"><span class="cc-code">1 </span>Title</h5>
                                        <p class="card-text white"><span class="cc-code">2 </span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem ...</p>
                                        <span class="cc-code">3 </span>
                                        <i class="fa fa-star yellow"></i> 
                                        <i class="fa fa-star yellow"></i> 
                                        <i class="fa fa-star yellow"></i> 
                                        <i class="fa fa-star yellow"></i> 
                                        <i class="fa fa-star text-secondary"></i>
                                        <span class="green bold">- 150 $</span>
                                    </div>
                                    <figure>
                                        <figcaption class="blockquote-footer code motz" style="color: #e5ce75 !important;">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                        </figcaption>
                                    </figure>
                                        <icon class="icon">
                                            <a href="#">
                                                <span class="material-symbols-outlined white icon-">shopping_basket</span>
                                            </a>
                                            <a href="#">
                                                <span class="material-symbols-outlined white icon-">heart_plus</span>
                                            </a>
                                            <a href="#">
                                                <span class="material-symbols-outlined white icon-">share</span>
                                            </a>
                                            <a href="#">
                                                <span class="material-symbols-outlined red icon-">flag</span>
                                            </a>
                                        </icon>
                                        </div>
                                        <div class="col col-3 img-card">
                                            <div class="img-card">
                                                <img src="https://www.getquanty.com/wp-content/uploads/2017/09/emailing-1.jpg"></img>
                                            </div>
                                    ';

                                    }
                                    }

                                    printItems();
                                    ?>