<?php
session_start();
if (isset($_SESSION['login_std']) || isset($_SESSION['login_tch'])) {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>about diu</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

        <style>
            .btn-default {
                box-shadow: 1px 2px 5px #000000;   
            }
        </style>
    </head>
    <body style="padding-top: 51px;">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default navbar-fixed-top" style="">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>                        
                            </button>
                            <a class="navbar-brand" href="#myPage">
                                <img style="max-width:50px;; height: 30px; margin-top: -7px;float: left"
                                     src="images/thumb/diu.jpg">&nbsp;
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
                                        <li><a href="#">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>



            <div class="row" style="padding-top: 20px">
                <div class="col-lg-2" style="">
                    <div class="btn-group">
                        <a class="btn btn-success btn-block" href="fees.php">Fees</a>
                        <a class="btn btn-success btn-block" href="batchlist.php">Batch Group</a>
                        <a class="btn btn-success btn-block" href="notice.php">Notice Board</a>
                        <a class="btn btn-success btn-block" href="courses_credits.php">Courses & Credit Info</a>
                        <a class="btn btn-success btn-block" href="facultymem.php">Faculty Members</a>
                    </div>

                </div>
                <div class="col-lg-8" style="background-color: #F2F9EA;height: auto">

                </div>
                <div class="col-lg-offset-2" style="height: auto;" >

                </div>
            </div>
        </div>

        <!-- footer goes here -->
        <div class="row">
            <div class="container-fluid">
                <footer class="footer-distributed">

                    <div class="footer-right">

                        <a href="https://www.facebook.com/diu.net.bd"><i class="fa fa-facebook"></i></a>
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
                            <a href="www.diu.ac/">WebSite</a>
                        </p>

                        <p class="text-center" style="color: blue">DIU &copy; 2015</p>
                    </div>

                </footer>
            </div>
        </div>
    </div>
    <script>


    </script>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
<?php } else {
     header("location:login.php");
}?>