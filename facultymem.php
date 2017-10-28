<?php
include_once './lib/dbconfig.php';
session_start();
if (isset($_SESSION['login_std']) || isset($_SESSION['login_tch'])) {



    $sql = "SELECT DISTINCT(std_prgm) FROM tbl_batch ";
    $sqlsh = "SELECT DISTINCT(std_shift) FROM tbl_batch ";
    $program = mysqli_query($conn, $sql);
    $shift = mysqli_query($conn, $sqlsh);
    ?>
    <!DOCTYPE html>
    <html>
        <head
            <meta charset="UTF-8">
            <title>Home</title>
            <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="css/style.css">
            <link href="css/paginate.css" rel="stylesheet" />
            <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

            <style>
                .btn-default {
                    box-shadow: 1px 2px 5px #000000;   
                }
                .btn-primary.active {
                    background-color: #8CC73F;
                }
            </style>

        </head>
        <body style="padding-top: 51px;">
            <div class="container" style="color: green;">
                <div class="row">
                    <nav class="navbar navbar-default navbar-fixed-top" style="">
                        <div class="container" >
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>                        
                                </button>
                                <a class="navbar-brand" href="index2.php">
                                    <img style="max-width:50px;; height: 30px; margin-top: -7px;float: left"
                                         src="images/logo/diulogo.png">&nbsp;
                                    Dhaka International University
                                </a>
                            </div>
                            <div class="collapse navbar-collapse" id="myNavbar">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="index.php">Home</a></li>
                                    <li class="dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> 
                                            Profile
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="profile_view.php">View Profile</a></li>
                                            <li><a href="profile_edit.php">Edit Profile</a></li>
                                            <li><a href="logout.php">Logout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>



                <div class="row" style="padding-top: 20px">
                    <!--<div class="col-lg-offset-1" style="height: 800px; float: left; "></div>-->
                    <div class="col-lg-2" style="float: left;padding: 0 2 0 0px;">
                        <div class="btn-group ">
                            <a class="btn btn-success btn-block " href="fees.php">Fees</a>
                            <a class="btn btn-success btn-block" href="batchlist.php">Batch Group</a>
                            <a class="btn btn-success btn-block" href="notice.php">Notice Board</a>
                            <a class="btn btn-success btn-block" href="courses_credits.php">Courses & Credit Info</a>
                            <a class="btn btn-success btn-block" href="facultymem.php">Faculty Members</a>
                        </div>

                    </div>
                    <div class="col-lg-8 " style="height: auto;background-color: #F2F9EA;">


                        <div id="carouselslider" class="carousel slide" data-ride="carousel">

                            <ol class="carousel-indicators">
                                <li data-target="#carouselslider" data-slide-to="0" class="active"></li>
                                <li data-target="$carouselslider" data-slide-to="1"></li>
                                <li data-target="$carouselslider" data-slide-to="2"></li>
                                <li data-target="$carouselslider" data-slide-to="3"></li>
                            </ol>

                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="images/facltmem/1.jpg" alt="img"/>
                                </div>
                                <div class="item">
                                    <img src="images/facltmem/charimansir.jpg" alt="img"/>
                                </div>
                                <div class="item">
                                    <img src="images/facltmem/somedeptmem.jpg" alt="img"/>
                                </div>
                                <div class="item">
                                    <img src="images/facltmem/2.jpg"/>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carouselslider" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carouselslider" role="button" data-slide="next"> 
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only" >Next</span>
                            </a>

                        </div>
                        <div class="panel panel-default" >
                            <ul class="nav nav-tabs" style="padding-left: 55px">
                                <li class="active "><a data-toggle="tab" href="#CSE">CSE </a></li>
                                <li><a data-toggle="tab" href="#CIVIL">CIVIL</a></li>
                                <li><a data-toggle="tab" href="#EETE">EETE </a></li>
                                <li ><a data-toggle="tab" href="#BBA">BBA</a></li>
                                <li><a data-toggle="tab" href="#LAW">LAW</a></li>
                                <li><a data-toggle="tab" href="#ENGLISH">ENGLISH </a></li>
                                <li><a data-toggle="tab" href="#SOCIOLOGY">SOCIOLOGY</a></li>
                                <li><a data-toggle="tab" href="#PHARMACY">PHARMACY</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="BBA" class="tab-pane ">
                                    <div style="padding: 40px 0px 40px 40px; color:black">

                                        <div class="media">
                                            <div class="media-left">
                                                <img src="#" class="media-object img-rounded" style="width:100px;"/>
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading"> Professor Dr. Hafiz Md. Hasan Babu</h3>
                                                <p ">Former Chairman, Department of CSE, <strong>Dhaka University</strong></p>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/facltmem/mahbubsir.png" class="media-object img-rounded" style="width:100px;"/>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Prof. Dr. A.T.M. Mahbubur Rahman</h4>
                                                <p>Dean (Acting)</p>
                                                <p> Faculty of Science & Engineering</p>

                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/thumb/diu.jpg" class="media-object img-rounded" style="width:100px"/>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">MS. jahanara Akhtar</h4>
                                                <p>Assoc. Prof. <strong>DIU</strong></p>
                                            </div>
                                        </div>
                                        <hr/>
                                    </div>
                                </div>

                                <div id="ENGLISH" class="tab-pane">
                                    <div style="padding: 40px 0px 40px 40px; color:black">

                                        <div class="media">
                                            <div class="media-left">
                                                <img src="uploads/23967-image_03_b.jpg" class="media-object img-rounded" style="width:100px;"/>
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading"> Professor Dr. Hafiz Md. Hasan Babu</h3>
                                                <p ">Former Chairman, Department of CSE, <strong>Dhaka University</strong></p>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/thumb/diu.jpg" class="media-object img-rounded" style="width:100px;"/>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Prof. Dr. A.T.M. Mahbubur Rahman</h4>
                                                <p>Dean (Acting)</p>
                                                <p> Faculty of Science & Engineering</p>

                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/thumb/diu.jpg" class="media-object img-rounded" style="width:100px"/>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">MS. jahanara Akhtar</h4>
                                                <p>Assoc. Prof. <strong>DIU</strong></p>
                                            </div>
                                        </div>
                                        <hr/>
                                    </div>
                                </div>
                                <div id="LAW" class="tab-pane">
                                    <div style="padding: 40px 0px 40px 40px; color:black">

                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/thumb/diu.jpg" class="media-object img-rounded" style="width:100px;"/>
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading"> Professor Dr. Hafiz Md. Hasan Babu</h3>
                                                <p ">Former Chairman, Department of CSE, <strong>Dhaka University</strong></p>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/thumb/diu.jpg" class="media-object img-rounded" style="width:100px;"/>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Prof. Dr. A.T.M. Mahbubur Rahman</h4>
                                                <p>Dean (Acting)</p>
                                                <p> Faculty of Science & Engineering</p>

                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/thumb/diu.jpg" class="media-object img-rounded" style="width:100px"/>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">MS. jahanara Akhtar</h4>
                                                <p>Assoc. Prof. <strong>DIU</strong></p>
                                            </div>
                                        </div>
                                        <hr/>
                                    </div>
                                </div>
                                <div id="CIVIL" class="tab-pane">
                                    <div style="padding: 40px 0px 40px 40px; color:black">

                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/thumb/diu.jpg" class="media-object img-rounded" style="width:100px;"/>
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading"> Professor Dr. Hafiz Md. Hasan Babu</h3>
                                                <p ">Former Chairman, Department of CSE, <strong>Dhaka University</strong></p>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/thumb/diu.jpg" class="media-object img-rounded" style="width:100px;"/>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Prof. Dr. A.T.M. Mahbubur Rahman</h4>
                                                <p>Dean (Acting)</p>
                                                <p> Faculty of Science & Engineering</p>

                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/thumb/diu.jpg" class="media-object img-rounded" style="width:100px"/>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">MS. jahanara Akhtar</h4>
                                                <p>Assoc. Prof. <strong>DIU</strong></p>
                                            </div>
                                        </div>
                                        <hr/>
                                    </div>
                                </div>

                                <div id="CSE" class="tab-pane fade in active">
                                    <div style="padding: 40px 0px 40px 40px; color:black">

                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/facltmem/hasanbabusir.jpg" class="media-object img-rounded" style="width:100px;"/>
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading"> Professor Dr. Hafiz Md. Hasan Babu</h3>
                                                <p ">Former Chairman, Department of CSE, <strong>Dhaka University</strong></p>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/facltmem/mahbubsir.png" class="media-object img-rounded" style="width:100px;"/>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Prof. Dr. A.T.M. Mahbubur Rahman</h4>
                                                <p>Dean (Acting)</p>
                                                <p> Faculty of Science & Engineering</p>

                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/thumb/diu.jpg" class="media-object img-rounded" style="width:100px"/>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">MS. jahanara Akhtar</h4>
                                                <p>Assoc. Prof. <strong>DIU</strong></p>
                                            </div>
                                        </div>
                                        <hr/>
                                    </div>
                                </div>

                                <div id="EETE" class="tab-pane">
                                    <div style="padding: 40px 0px 40px 40px; color:black">

                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/thumb/diu.jpg" class="media-object img-rounded" style="width:100px;"/>
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading"> Professor Dr. Hafiz Md. Hasan Babu</h3>
                                                <p ">Former Chairman, Department of CSE, <strong>Dhaka University</strong></p>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/thumb/diu.jpg" class="media-object img-rounded" style="width:100px;"/>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Prof. Dr. A.T.M. Mahbubur Rahman</h4>
                                                <p>Dean (Acting)</p>
                                                <p> Faculty of Science & Engineering</p>

                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/thumb/diu.jpg" class="media-object img-rounded" style="width:100px"/>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">MS. jahanara Akhtar</h4>
                                                <p>Assoc. Prof. <strong>DIU</strong></p>
                                            </div>
                                        </div>
                                        <hr/>
                                    </div>
                                </div>
                                <div id="SOCIOLOGY" class="tab-pane">
                                    <div style="padding: 40px 0px 40px 40px; color:black">

                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/thumb/diu.jpg" class="media-object img-rounded" style="width:100px;"/>
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading"> Professor Dr. Hafiz Md. Hasan Babu</h3>
                                                <p ">Former Chairman, Department of CSE, <strong>Dhaka University</strong></p>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/thumb/diu.jpg" class="media-object img-rounded" style="width:100px;"/>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Prof. Dr. A.T.M. Mahbubur Rahman</h4>
                                                <p>Dean (Acting)</p>
                                                <p> Faculty of Science & Engineering</p>

                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/thumb/diu.jpg" class="media-object img-rounded" style="width:100px"/>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">MS. jahanara Akhtar</h4>
                                                <p>Assoc. Prof. <strong>DIU</strong></p>
                                            </div>
                                        </div>
                                        <hr/>
                                    </div>
                                </div>


                                <div id="PHARMACY" class="tab-pane">
                                    <div style="padding: 40px 0px 40px 40px; color:black">

                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/thumb/diu.jpg" class="media-object img-rounded" style="width:100px;"/>
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading"> Professor Dr. Hafiz Md. Hasan Babu</h3>
                                                <p ">Former Chairman, Department of CSE, <strong>Dhaka University</strong></p>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/thumb/diu.jpg" class="media-object img-rounded" style="width:100px;"/>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Prof. Dr. A.T.M. Mahbubur Rahman</h4>
                                                <p>Dean (Acting)</p>
                                                <p> Faculty of Science & Engineering</p>

                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/thumb/diu.jpg" class="media-object img-rounded" style="width:100px"/>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">MS. jahanara Akhtar</h4>
                                                <p>Assoc. Prof. <strong>DIU</strong></p>
                                            </div>
                                        </div>
                                        <hr/>
                                    </div>

                                </div>
                            </div>


                        </div>
                        <div class="col-lg-offset-2" style="height: auto;padding: 0 0 0 10px" >

                        </div>
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="container-fluid">
                <footer class="footer-distributed">

                    <div class="footer-right">

                        <a href="https://www.facebook.com/diu.net.bd" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-github"></i></a>

                    </div>

                    <div class="footer-left">

                        <p class="footer-links">
                            <a href="index.php">Home</a>
                            |
                            <a href="facultymem.php">Faculty members</a>
                            |
                            <a href="http://www.diu.ac/" target="_blank">WebSite</a>
                        </p>

                        <p class="text-center" style="color: blue">DIU &copy; 2015</p>
                    </div>

                </footer>
            </div>
        </div>

            <script>


            </script>
            <script src="js/jquery-3.1.1.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/paginate.js"></script>
            <script src="js/custom.js"></script>
            <script src="js/main.js"></script>


        </body>
    </html>
    <?php
} else {
    header('location: login.php');
}







