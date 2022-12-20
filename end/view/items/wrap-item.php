<head>
  <title>ScriptIO</title>
  <link rel="stylesheet" href="./assets/css/wrap-item.css" />
  <link rel="stylesheet" href="./assets/css/wrap-item-media.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

    <div class="container spacebtw">

    <div class="bg-white rounded d-flex align-items-center justify-content-between" id="header">

        <button class="btn btn-hide text-uppercase" type="button" data-toggle="collapse" data-target="#filterbar" aria-expanded="false" aria-controls="filterbar" id="filter-btn" onclick="changeBtnTxt()"> <span class="fas fa-angle-left" id="filter-angle"></span> <span id="btn-txt">Hide filters</span> </button> 
        
        <nav class="navbar navbar-expand-lg navbar-light pl-lg-0 pl-auto">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynav" aria-controls="mynav" aria-expanded="false" aria-label="Toggle navigation" onclick="chnageIcon()" id="icon"> <span class="navbar-toggler-icon"></span> </button> 
            <div class="collapse navbar-collapse" id="mynav">
                <ul class="navbar-nav d-lg-flex align-items-lg-center">
                <!-- start fitler -->
                <li class="nav-item active">
                    <select name="sort" id="sort">
                        <option value="" hidden selected>Sort by</option>
                        <option value="price">Increasing</option>
                        <option value="price">Descending</option>
                        <option value="popularity">Popularity</option>
                        <option value="rating">Rating</option>
                    </select>
                </li>
                <!-- end fitler -->
                <li class="nav-item d-inline-flex align-items-center justify-content-between mb-lg-0 mb-3">
                    <!-- start lenght items -->
                    <div class="font-weight-bold mx-2 result">18 from 200</div>+
                     <!-- end lenght items -->
                </li>

                <li class="nav-item d-lg-none d-inline-flex"> </li>
                </ul>
            </div>
        </nav>

        <div class="ml-auto mt-3 mr-2">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                <li class="page-item"> <a class="page-link" href="#" aria-label="Previous"> <span aria-hidden="true" class="font-weight-bold">&lt;</span> <span class="sr-only">Previous</span> </a> </li>
                <!-- start lenght pages -->
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">..</a></li>
                <li class="page-item"><a class="page-link" href="#">24</a></li>
                <!-- end lenght pages -->
                <li class="page-item"> <a class="page-link" href="#" aria-label="Next"> <span aria-hidden="true" class="font-weight-bold">&gt;</span> <span class="sr-only">Next</span> </a> </li>
                </ul>
            </nav>
        </div>
    </div>

    <div id="content" class="my-5">
        <div id="filterbar" class="collapse">

            <div class="box border-bottom">
                <div class="form-group text-center">
                    <div class="btn-group" data-toggle="buttons"> <label class="btn btn-success form-check-label"> <input class="form-check-input" type="radio"> Reset </label> <label class="btn btn-success form-check-label active"> <input class="form-check-input" type="radio" checked> Apply </label> </div>
                </div>
                
                <div>
                    <label class="tick">New <input type="checkbox" checked="checked"> <span class="check"></span> </label>
                </div>
                
                <div>
                    <label class="tick">Sale <input type="checkbox"> <span class="check"></span> </label>
                </div>
            </div>

            <div class="box border-bottom">
                <div class="box-label text-uppercase d-flex align-items-center">Complexity  <i class='fa fa-code'></i></i> <button class="btn ml-auto" type="button" data-toggle="collapse" data-target="#inner-box" aria-expanded="false" aria-controls="inner-box" id="out" onclick="outerFilter()"> <span class="fas fa-plus"></span> </button> </div>
                <div id="inner-box" class="collapse mt-2 mr-1">
                <div class="my-1"> <label class="tick">Easy <input type="checkbox" checked="checked"> <span class="check"></span> </label> </div>
                <div class="my-1"> <label class="tick">Average <input type="checkbox"> <span class="check"></span> </label> </div>
                <div class="my-1"> <label class="tick">Complicated <input type="checkbox"> <span class="check"></span> </label> </div>
                <div class="my-1"> <label class="tick">Very complicated <input type="checkbox"> <span class="check"></span> </label> </div>
                </div>
            </div>

            <div class="box border-bottom">
                <div class="box-label text-uppercase d-flex align-items-center">Merchant rating  <i class="fa fa-star"></i><button class="btn ml-auto" type="button" data-toggle="collapse" data-target="#inner-box2" aria-expanded="false" aria-controls="inner-box2"><span class="fas fa-plus"></span></button> </div>
                <div id="inner-box2" class="collapse mt-2 mr-1">

                    <div class="my-1"> 
                            <label class="tick"> 
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <i class="fa fa-star text-secondary"></i>
                            <input type="checkbox"> <span class="check"></span> </label>
                        </label> 
                    </div>

                    <div class="my-1"> 
                        <label class="tick">
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <i class="fa fa-star text-secondary"></i>
                            <input type="checkbox"> <span class="check"></span> </label>
                        </label> 
                    </div>

                    <div class="my-1"> 
                        <label class="tick">
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <i class="fa fa-star text-secondary"></i>
                            <input type="checkbox"> <span class="check"></span> </label>
                        </label> 
                    </div>

                    <div class="my-1"> 
                        <label class="tick">
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star text-secondary"></i>
                            <input type="checkbox"> <span class="check"></span> </label>
                            <span class="check"></span> 
                        </label> 
                    </div>

                    <div class="my-1"> 
                        <label class="tick">
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star text-success"></i>
                            <input type="checkbox"> <span class="check"></span> </label> 
                            <span class="check"></span> 
                        </label> 
                    </div>

                </div>
            </div>

            <div class="box border-bottom">
                <div class="input-group">
                    <div class="form-outline">
                        <input type="search" id="username-develloper" class="form-control" placeholder="Search by develloper"/>
                    </div>
                </div>
            </div>
            
            <div class="box border-bottom">
                <div class="input-group">
                    
                    <input type="search" id="tag" class="form-control" placeholder="Search by tag"/>
                    <button onclick="newtag()" id="search-button" type="button" class="btn btn-primary search-bar">
                        <i class="fas fa-search"></i>
                    </button>
                    <iframe id="tag-searched" class="tag-seached">
                    <link rel="stylesheet" href="./assets/css/wrap-item.css" />
  <link rel="stylesheet" href="./assets/css/wrap-item-media.css" />
                    </iframe>
              
                </div>
            </div>

        </div>

        <div id="products">
            <div class="row mx-0">
                <!-- start product -->
                <div class="col-lg-4 col-md-6 pt-md-4 pt-3">
                    <div class="card d-flex flex-column align-items-center">
                        <div class="product-name">Item 01</div>
                        <div class="card-img">
                            <img src="https://mailrelay.com/wp-content/uploads/2016/12/mailing.png" alt="">
                        </div>
                        <div class="card-body pt-4">
                            <div class="text-muted text-center mt-auto">Rating</div>
                            <div class="d-flex align-items-center justify-content-center colors my-2">
                                <div class="btn-group" data-toggle="buttons" data-tooltip="tooltip" data-placement="right" title="choose color"> 
                                    <label for="stars-rating-4"><i class="fa fa-star text-success"></i></label>
                                    <label for="stars-rating-1"><i class="fa fa-star text-secondary"></i></label>
                                    <label for="stars-rating-1"><i class="fa fa-star text-secondary"></i></label>
                                    <label for="stars-rating-1"><i class="fa fa-star text-secondary"></i></label>
                                    <label for="stars-rating-1"><i class="fa fa-star text-secondary"></i></label>
                                </div>
                            </div>
                            <div class="d-flex align-items-center price">
                                <div class="del mr-2"><span class="text-dark">5500 $</span></div>
                                <div class="font-weight-bold">4500 $</div>
                            </div>
                        </div>
                        <div class="trust">
                            <a href="#like">
                                <i class='fas fa-hand-holding-heart'></i>
                            </a>
                            <p class="trust-number bold">1</p>
                        </div>
                        <div class="wish-list">
                            <a href="#add-wish-list">
                                <i class="material-icons">control_point_duplicate</i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- end product -->
            </div>
        </div>

    </div>
    </div>
    <script src="./assets/js/wrap-item.js"></script>
</body>