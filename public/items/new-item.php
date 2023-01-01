<head>
  <title>ScriptIO - new item</title>
  <link rel="stylesheet" href="./assets/css/new-item.css" />
</head>
<body>

<div class="container-fluid ">
        <div class="row">
     
            <div class="col-md-6 offset-md-3 audit background-white">
                <form method="post" enctype="multipart/form-data">
                    
                    <!-- name input -->
                    
                    <!-- <div class="form-outline mb-4">
                        <input type="text" id="name" class="form-control" name="category"/>
                        <label class="form-label" for="name">Category</label>
                    </div> -->

                    <div class="form-outline mb-4">
                    <label for="exampleFormControlSelect1">Example select</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="category">
                        <option>FREE</option>
                        <option>Social networks</option>
                        <option>Scrapping</option>
                        <option>Emailing</option>
                        <option>Web</option>
                        <option>Windows</option>
                        <option>Linux</option>
                        <option>MacOS</option>
                        <option>Mobile</option>
                        <option>other</option>
                        </select>
                    </div>
                   
                        
                    

                    <div class="form-outline mb-4">
                        <input type="text" id="name" class="form-control" name="product-name"/>
                        <label class="form-label" for="name">Name of your product</label>
                    </div>

                    <!-- price input -->
                    <div class="form-outline mb-4">
                        <input type="number" id="price" class="form-control" name="price"/>
                        <label class="form-label" for="price">Price</label>
                        <figcaption class="blockquote-footer text-secondary italic">
                        If you want it to be free put 0
                        </figcaption>
                        <br>
                    </div>

                    <!-- Message input -->
                    <div class="form-outline mb-4">
                        <input type="number" id="name" class="form-control" name="stock"/>
                        <label class="form-label" for="name">Quantity -1 for unlimitted</label>
                    </div>

                    <!-- Message input -->
                    <div class="form-outline mb-4">
                        <textarea class="form-control" id="desc-left" rows="4" maxlength="250" placeholder="250 - characters max" name="short-description-left"></textarea>
                        <label class="form-label" for="desc-left">Short description left</label>
                        <br>
                    </div>

                    <!-- Message input -->
                    <div class="form-outline mb-4">
                        <textarea class="form-control" id="desc-left" rows="4" maxlength="250" placeholder="250 - characters max" name="short-description-right"></textarea>
                        <label class="form-label" for="desc-left">Large description right</label>
                        <figure>
                            <figcaption class="blockquote-footer green italic">
                                You can implement effects in your description
                                <p>Color available: !cyan !cyan-light !green !red !white !yellow</p>
                                Exemple: cyan! My product is very nice #;
                                <p>You can add effect with : !blink !comment</p>
                                <p style="font-weight:bold;color: #ea1a1a;">If you want to skip a line put (#;) at the end of your sentence</p>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- Message input -->
                    <div class="form-outline mb-4">
                        <textarea class="form-control" id="desc-step" rows="4" maxlength="550" placeholder="550 - characters max" name="installation-steps"></textarea>
                        <label class="form-label" for="desc-step">Steps installation</label>
                        <figure>
                            <figcaption class="blockquote-footer green italic">
                                You can implement effects in your description
                                <p>Color available: !cyan !cyan-light !green !red !white !yellow</p>
                                Exemple: cyan! My product is very nice #;
                                <p>You can add effect with : !blink !comment</p>
                                <p style="font-weight:bold;color: #ea1a1a;">If you want to skip a line put (#;) at the end of your sentence</p>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="text" id="name" class="form-control" name="motz-installation-steps"/>
                        <label class="form-label" for="name">Motz for steps installation</label>
                    </div>
                        <input type="file" id="script" class="form-control" accept=".zip,.rar" name="script"/>
                        <label class="form-label" for="script" class="form-label">Your script in zip/rar folder</label>
                        
                        <input type="file" id="image" class="form-control" accept=".png,.jpeg,.jpg" name="image"/>
                        <label class="form-label" for="image" class="form-label">Product Image</label>
                    <figure>
                        <figcaption class="blockquote-footer text-danger italic">
                            You will receive a notification when your product has been audited.
                        </figcaption>
                        <br>
                    </figure>
                    <!-- Submit button -->
                    <button type="submit" name="new-item" class="btn btn-primary btn-block mb-4">Send for audit</button>
                </form>
            </div>
            </div>
        </div>
 

<div class="container-fluid space">
    <div class="container-fluid">

        <div class="row justify-content-md-center">
            <div class="col col-lg-6 header-item background-white">
                <div class="item-button">
                    <a href="#item" >New item</a>
                </div>
                <div class="header-card">
                    <div>
                        <span class="c-code text-warning">AUDIT</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-md-center">
            <div class="col col-lg-3 shadow container-description background-white">
                <section class="img-card" id="item">
                    <img src="data:image/png;base64,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" alt""></img>
                </section>
                <div class="card-item">
                    <p class="title-card-item">Title of item</p>
                    <p class="description-card-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
            <div class="col col-lg-3 shadow container-code code">
                <ul>
                    <li>1 <span class="cyan">Salutation</span></li>
                    <li>2 <span class="red">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span></li>
                    <li>3 <span class="cyan-light">It was popularised in the 1960s.</span></li>
                    <li>4</li>
                    <li>5</li>
                    <li>6 <span class="comment">//Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></li>
                    <li>7</li>
                    <li>8</li>
                    <li>9</li>
                    <li>10</li>
                    <li>11</li>
                    <li>12</li>
                    <li>13 <span class="white">Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum...</span></li>
                    <li>14</li>
                </ul>
            </div>
           

        </div>

        <div class="row row justify-content-md-center">
            <div class="col col-lg-3 step-installation shadow container-code code container-step">
                <ul>
                    <li>1 </li>
                    <li>2 </li>
                    <li>3 <span class="cyan-light">Step installation</span></li>
                    <li>4</li>
                    <li>5</li>
                    <li>6 </li>
                    <li>7 <span class="white">Step installation</span></li>
                    <li>8</li>
                    <li>9</li>
                    <li class="blink">10 <span class="red">Step installation</span></li>
                    <li>11</li>
                    <li>12</li>
                    <li>13 <span class="comment">//Step installation</span></li>
                    <li>14 <span class="cyan">Step installation</span></li>
                    <li>
                    <figcaption class="blockquote-footer white">
                        Motz step installation : blablabla <cite title="Source Title">gneugneugneu</cite>
                    </figcaption>
                    </li>
                </ul>
            </div> 
                <div class="col col-lg-3 shadow background-white">
                    <div class="img-seller">
                        <img src="data:image/jpeg;base64,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" alt=""></img>
                    </div>
                    <div class="username"><span >Username | <a href="#">Naywvis</a> </span></div>
                    <section class="description-seller-card">
                        <p>Rating       : 1581</p>
                        <p>Total sales  : 452</p>
                        <p>Total likes  : 1488</p>
                        <p>Total view   : 49223</p>
                        <p id="trust">Trust</p>
                    </section>
                    <div class="trust">
                        <i class="fa fa-star yellow"></i>
                        <i class="fa fa-star yellow"></i>
                        <i class="fa fa-star yellow"></i>
                        <i class="fa fa-star yellow"></i>
                        <i class="fa fa-star text-secondary"></i>
                    </div>
                    <figcaption class="blockquote-footer motz">
                        lucky phrase : ofSomeone famous in <cite title="Source Title">Source Title</cite>
                    </figcaption>
                </div>
        </div>
    </div>
    </div>
</body>