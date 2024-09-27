<html>
    <head>
        <title>ITEL-2</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
        <script src="js\bootstrap.min.js"></script>
        
    
    </head>
        <body>

            <h1>Activity 3</h1>

            <div class="container-fluid">
                <ul class="pager">
                    <li class="previous"><a href="#">Previous</a></li>
                    <li class="next"><a href="#">Next</a></li>
                </ul>

                <ul class="pagination pagination-sm">
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                </ul>
                <ul class="pagination">
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li class="disabled"><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                </ul>
                <ul class="pagination pagination-lg">
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                </ul>
            
            </div>


            <br/>
            <br/>
            <br/>
            <hr>
            <div class="container-fluid">
                <ul class="nav nav-pills">
                    <li class="active"><a href="#p1" data-toggle="pill">Home</a></li>
                    <li><a href="#p2" data-toggle="pill">About Us</a></li>
                    <li><a href="#p3" data-toggle="pill">Contact Us</a></li>
                    <li><a href="#p4" data-toggle="pill">Product</a></li>
                </ul>
                <div class="tab-content">
                    <div id="p1" class="tab-pane fade in active">Welcome to Home</div>
                    <div id="p2" class="tab-pane fade">Welcome to About us</div>
                    <div id="p3" class="tab-pane fade">Welcome to Contact us</div>
                    <div id="p4" class="tab-pane fade">Welcome to product</div>
                </div>

                <ul class="nav nav-tabs">
                    <li class="active"><a href="#t1" data-toggle="tab">Home</a></li>
                    <li><a href="#t2" data-toggle="tab">About Us</a></li>
                    <li><a href="#t3" data-toggle="tab">Contact Us</a></li>
                    <li><a href="#t4" data-toggle="tab">Product</a></li>
                </ul>
                <div class="tab-content">
                    <div id="t1" class="tab-pane fade in active">Welcome to Home</div>
                    <div id="t2" class="tab-pane fade">Welcome to About us</div>
                    <div id="t3" class="tab-pane fade">Welcome to Contact us</div>
                    <div id="t4" class="tab-pane fade">Welcome to product</div>
                </div>

            </div>


            <br/>
            <br/>
            <br/>
            <hr>
            <div class="container-fluid">

                <ul class="nav nav-pills">
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">HTML</a></li>
                    <li><a href="#">PHP</a></li>
                    <li><a href="#">JAVASCRIPT</a></li>
                </ul>
            
                <ul class="nav nav-pills">
                    <li class="active"><a href="#">HOME</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">PHP <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">PHP-function</a></li>
                            <li><a href="#">PHP-MYSQL</a></li>
                            <li><a href="#">PHP-Loop</a></li>
                        </ul>
                    </li>
                    <li><a href="#">HTML</a></li>
                    <li><a href="#">JAVASCRIPT</a></li>
                </ul>

                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#">HOME</a></li>
                    <li><a href="#">HTML</a></li>
                    <li><a href="#">PHP</a></li>
                    <li><a href="#">JAVASCRIPT</a></li>
                </ul>

                <ul class="nav nav-pills nav-justified">
                    <li><a href="#">HOME</a></li>
                    <li class="active"><a href="#">HTML</a></li>
                    <li><a href="#">PHP</a></li>
                    <li><a href="#">JAVASCRIPT</a></li>
                </ul>
                
            </div>


            <br/>
            <br/>
            <br/>
            <hr>
            <div class="container-fluid">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">HTML</a></li>
                    <li><a href="#">PHP</a></li>
                    <li><a href="#">JAVASCRIPT</a></li>
                </ul>

                <ul class="nav nav-tabs">
                    <li><a href="#">Home</a></li>
                    <li class="active"><a href="#">HTML</a></li>
                    <li><a href="#">PHP</a></li>
                    <li><a href="#">JAVASCRIPT</a></li>
                </ul>

                <ul class="nav nav-tabs">
                    <li><a href="#">Home</a></li>
                    <li class="active"><a href="#">HTML</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="" data-toggle="dropdown">PHP <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">PHP-function</a></li>
                            <li><a href="#">PHP-MYSQL</a></li>
                            <li><a href="#">PHP-Loop</a></li>
                        </ul>

                    </li>
                    <li><a href="#">JAVASCRIPT</a></li>
                </ul>
            </div>


            <br/>
            <br/>
            <hr>
            <div class="container-fluid">
                <div class="panel-group" id="myaccordion">

                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h4>
                                <a href="#collap1" data-toggle="collapse" data-parent="#myaccordion">Collapsible Accordion</a>
                            </h4>
                        </div>
                        <div class="collapse panel-collapse" id="collap1">
                            <div class="panel-body">You can put anything here for your content</div>

                        </div>
                    </div>

                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h4>
                                <a href="#collap2" data-toggle="collapse" data-parent="#myaccordion">Collapsible Accordion</a>
                            </h4>
                        </div>
                        <div class="collapse panel-collapse" id="collap2">
                            <div class="panel-body"><img src="images\studpic.jpg"></div>

                        </div>
                    </div>

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>
                                <a href="#collap3" data-toggle="collapse" data-parent="#myaccordion">Collapsible Accordion</a>
                            </h4>
                        </div>
                        <div class="collapse panel-collapse" id="collap3">
                            <div class="panel-body">You can put anything here for your content</div>

                        </div>
                    </div>

                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h4>
                                <a href="#collap4" data-toggle="collapse" data-parent="#myaccordion">Collapsible Accordion</a>
                            </h4>
                        </div>
                        <div class="collapse panel-collapse" id="collap4">
                            <div class="panel-body">You can put anything here for your content</div>

                        </div>
                    </div>
                    
                </div>
            </div>


            <br/>
            <br/>
            <hr>
            <div class="container-fluid">
                <div class="panel-group">
                    <div class="panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"> 
                                <a href="#efg" data-toggle="collapse">List of Colleges</a>
                            </h4>
                        </div>

                        <div class="collapse panel-collapse" id="efg">
                            <ul class="list-group">
                                <li class="list-group-item">CCS</li>
                                <li class="list-group-item">CET</li>
                                <li class="list-group-item">CBA</li>
                                <li class="list-group-item">CAS</li>
                            </ul>
                            <div class="panel-footer">This is panel footer</div>
                        </div>

                    </div>
                </div>
            </div>


            <br/>
            <br/>
            <hr>
            <div class="container-fluid">
            <div class="list-group">
                <a href="#" class="list-group-item"> 
                    <h4 class="list-group-item-heading">This is the heading</h4>
                    <div class="list-group-item-text">This is the paragraph</div>
                </a>
                <a href="#" class="list-group-item"> 
                    <h4 class="list-group-item-heading">This is the heading</h4>
                    <div class="list-group-item-text">This is the paragraph</div>
                </a>
                <a href="#" class="list-group-item"> 
                    <h4 class="list-group-item-heading">This is the heading</h4>
                    <div class="list-group-item-text">This is the paragraph</div>
                </a>
                <a href="#" class="list-group-item"> 
                    <h4 class="list-group-item-heading">This is the heading</h4>
                    <div class="list-group-item-text">This is the paragraph</div>
                </a>

            </div>

            <ul class="list-group">
                <li class="list-group-item">
                    <h4 class="list-group-item-heading">This is the heading</h4>
                    <div class="list-group-item-text">This is the paragraph</div>
                </li>
                <li class="list-group-item">
                    <h4 class="list-group-item-heading">This is the heading</h4>
                    <div class="list-group-item-text">This is the paragraph</div>
                </li>
                <li class="list-group-item">
                    <h4 class="list-group-item-heading">This is the heading</h4>
                    <div class="list-group-item-text">This is the paragraph</div>
                </li>
                    <li class="list-group-item">
                    <h4 class="list-group-item-heading">This is the heading</h4>
                    <div class="list-group-item-text">This is the paragraph</div>
                </li>
            </ul>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success">List Item</li>
                    <li class="list-group-item">List Item</li>
                    <li class="list-group-item">List Item</li>
                    <li class="list-group-item">List Item</li>
                </ul>

                <div class="list-group">
                    <a href="#" class="list-group-item">Div list element</a>
                    <a href="#" class="list-group-item list-group-item-info">Div list element</a>
                    <a href="#" class="list-group-item">Div list element</a>
                    <a href="#" class="list-group-item">Div list element</a>
                </div>

            </div>


            <br/>
            <br/>
            <hr>
                <div class="container">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h4><a href="#abc" data-toggle="collapse">This is a panel heading</a></h4>
                        </div>
                            <div id="abc" class="collapse panel-collapse">
                                <div class="panel-body">
                                    <p>This is a panel body</p>
                                </div>
                                <div class="panel-footer"><p>This is a panel footer</p></div>
                            </div>
                    </div>
                </div>


            <br/>
            <br/>
            <hr>
            <div class="container">
                <button class="btn btn-primary" data-target="#dtx" data-toggle="collapse">Click to collapse image</button>
                <div id="dtx" class="collapse in"><img src="images\studpic.jpg"></div>
                <button class="btn btn-info" data-target="#dty" data-toggle="collapse">Click to collapse</button>
                <div id="dty" class="collapse">The data to be collapse is in here...</div>
            </div>


            <br/>
            <br/>
            <hr>
            <div class="container">

            <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h4>This is a panel heading</h4>

                    </div>
                    <div class="panel-body">
                        <p>This is a panel body</p>
                    </div>
                    <div class="panel-footer"><p>This is a panel footer</p></div>
                </div>

            <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h4>This is a panel heading</h4>

                    </div>
                    <div class="panel-body">
                        <p>This is a panel body</p>
                    </div>
                    <div class="panel-footer"><p>This is a panel footer</p></div>
                </div>

            <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>This is a panel heading</h4>

                    </div>
                    <div class="panel-body">
                        <p>This is a panel body</p>
                    </div>
                    <div class="panel-footer"><p>This is a panel footer</p></div>
                </div>

            <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4>This is a panel heading</h4>

                    </div>
                    <div class="panel-body">
                        <p>This is a panel body</p>
                    </div>
                    <div class="panel-footer"><p>This is a panel footer</p></div>
                </div>

            <div class="panel panel-success">
                    <div class="panel-heading">
                        <h4>This is a panel heading</h4>

                    </div>
                    <div class="panel-body">
                        <p>This is a panel body</p>
                    </div>
                    <div class="panel-footer"><p>This is a panel footer</p></div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>This is a panel heading</h4>

                    </div>
                    <div class="panel-body">
                        <p>This is a panel body</p>
                    </div>
                    <div class="panel-footer"><p>This is a panel footer</p></div>
                </div>
            </div>
            

        </body> 
</html> 