<?php
session_start();
if (isset($_SESSION['login_tch'])) {
    

function select_batch($dept, $prgm, $shift) {
    include './lib/dbconfig.php';

    $sql = "SELECT * FROM tbl_batch WHERE std_dept='$dept' AND std_prgm='$prgm' AND std_shift='$shift'";
    return mysqli_query($conn, $sql);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>fees</title>
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
                <nav class="navbar navbar-default navbar-fixed-top"  style="">
                    <div class="container" >
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>                        
                            </button>
                            <a class="navbar-brand" href="#myPage" title="">
                                <img style="max-width:50px;; height: 30px; margin-top: -7px;float: left"
                                     src="images/logo/diulogo.png">&nbsp;
                                Dhaka International University
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="index2.php">Home</a></li>
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
                <div class="col-lg-2" style="">
                    <div class="btn-group">
                        <a class="btn btn-success btn-block" href="fees.php">Fees</a>
                        <a class="btn btn-success btn-block" href="batchlist.php">Batch Group</a>
                        
                        <a class="btn btn-success btn-block" href="courses_credits.php">Courses & Credit Info</a>
                        <a class="btn btn-success btn-block" href="facultymem.php">Faculty Members</a>
                    </div>

                </div>
                <div class="col-lg-8" style="height: auto;background-color: #F2F9EA">
                    <div class="panel panel-default">

                        <ul class="nav nav-tabs " style="padding-left: 55px">
                            <li class="active"><a data-toggle="tab" href="#CSE">CSE </a></li>
                            <li><a data-toggle="tab" href="#CIVIL">CIVIL</a></li>
                            <li><a data-toggle="tab" href="#EETE">EETE </a></li>
                            <li ><a data-toggle="tab" href="#BBA">BBA</a></li>
                            <li><a data-toggle="tab" href="#LAW">LAW</a></li>
                            <li><a data-toggle="tab" href="#ENGLISH">ENGLISH </a></li>
                            <li><a data-toggle="tab" href="#SOCIOLOGY">SOCIOLOGY</a></li>
                            <li><a data-toggle="tab" href="#PHARMACY">PHARMACY</a></li>
                        </ul>



                        <div class="tab-content">

                            <!--CSE bacth list Starts-->
                            <div id="CSE" class="tab-pane fade in active">
                                <div class="panel panel-heading" style="padding-top: 40px;">
                                    <ul class="nav nav-pills text-center" style="padding-left: 130px">
                                        <li class="active"><a class="btn btn-default" data-toggle="pill" href="#cseday">B.Sc in CSE (Day)</a></li>
                                        <li><a class="btn btn-default" data-toggle="pill" href="#cseeve">B.Sc in CSE (Evening)</a></li>
                                        <li><a  class="btn btn-default" data-toggle="pill" href="#mscse">M.Sc in CSE</a></li>
                                    </ul>
                                </div>
                                <div class="panel panel-body">
                                    <div class="tab-content">
                                        <div id="cseday" class="tab-pane fade in active">
                                            <div class="jumbotron tab-content">
                                                <div class="container">
                                                    <div class="row">
                                                        <?php
                                                        $batch = select_batch('CSE', 'B.Sc', 'day');
                                                        while ($row = mysqli_fetch_assoc($batch)) {
                                                            ?>
                                                            <div class="col-xs-6 col-md-4">
                                                                <a href="viewgroupfile.php?id=<?php echo $row['id'] ?>" class="thumbnail">
                                                                    <img src="images/logo/diulogo.png" alt="img">
                                                                    <div class="caption">
                                                                        <h5 class="text-center"><?php echo $row['std_batch'] ?></h5>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="cseeve" class="tab-pane fade">
                                            <div class="jumbotron tab-content">
                                                <div class="container">
                                                    <div class="row">
                                                        <?php
                                                        $batch = select_batch('CSE', 'B.Sc', 'evening');
                                                        while ($row = mysqli_fetch_assoc($batch)) {
                                                            ?>
                                                            <div class="col-md-4">
                                                                <a href="viewgroupfile.php?id=<?php echo $row['id'] ?>" class="thumbnail">
                                                                    <img src="images/logo/diulogo.png" alt="logo"/>
                                                                    <div class="caption">
                                                                        <h5 class="text-center"><?php echo $row['std_batch'] ?></h5>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="mscse" class="tab-pane fade">
                                            <div class="jumbotron tab-content">
                                                <div class="container">
                                                    <div class="row">
                                                        <?php
                                                        $batch = select_batch('CSE', 'M.Sc', 'day');
                                                        while ($row = mysqli_fetch_assoc($batch)) {
                                                            ?>
                                                            <div class = "col-xs-6 col-md-4">
                                                                <a href = "viewgroupfile.php?id=<?php echo $row['id'] ?>" class = "thumbnail">
                                                                    <img src = "images/logo/diulogo.png" alt = "img">
                                                                    <div class = "caption">
                                                                        <h5 class="text-center"><?php echo $row['std_batch'] ?></h5>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--CSE bacth list Ends-->

                            <!--CIVIL bacth list Starts-->
                            <div id="CIVIL" class="tab-pane fade">
                                <div class="panel panel-heading" style="padding-top: 40px;">
                                    <ul class="nav nav-pills text-center" style="padding-left: 130px">
                                        <li class="active"><a class="btn btn-default" data-toggle="pill" href="#civilday">B.Sc in CIVIL (Day)</a></li>
                                        <li><a class="btn btn-default" data-toggle="pill" href="#civileve">B.Sc in CIVIL (Evening)</a></li>
                                    </ul>
                                </div>
                                <div class="panel panel-body">
                                    <div class="tab-content">
                                        <div id="civilday" class="tab-pane fade in active">
                                            <div class="jumbotron tab-content">
                                                <div class="container">
                                                    <div class="row">
                                                        <?php
                                                        $batch = select_batch('CIVIL', 'B.Sc', 'day');
                                                        while ($row = mysqli_fetch_assoc($batch)) {
                                                            ?>
                                                            <div class="col-xs-6 col-md-4">
                                                                <a href="viewgroupfile.php?id=<?php echo $row['id'] ?>" class="thumbnail">
                                                                    <img src="images/logo/diulogo.png" alt="img">
                                                                    <div class="caption">
                                                                        <h5 class="text-center">29th & 30th Batch</h5>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="civileve" class="tab-pane fade">
                                            <div class="jumbotron tab-content">
                                                <div class="container">
                                                    <div class="row">
                                                        <?php
                                                        $batch = select_batch('CIVIL', 'B.Sc', 'evening');
                                                        while ($row = mysqli_fetch_assoc($batch)) {
                                                            ?>
                                                            <div class="col-xs-6 col-md-4">
                                                                <a href="viewgroupfile.php?id=<?php echo $row['id'] ?>" class="thumbnail">
                                                                    <img src="images/logo/diulogo.png" alt="img">
                                                                    <div class="caption">
                                                                        <h5 class="text-center">29th & 30th Batch</h5>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--CIVIL bacth list Ends-->

                            <!--EETE bacth list Starts-->
                            <div id="EETE" class="tab-pane fade">
                                <div class="panel panel-heading" style="padding-top: 40px;">
                                    <ul class="nav nav-pills text-center" style="padding-left: 130px">
                                        <li class="active"><a class="btn btn-default" data-toggle="pill" href="#eeteday">B.Sc in EETE (Day)</a></li>
                                        <li><a class="btn btn-default" data-toggle="pill" href="#eeteeve">B.Sc in EETE (Evening)</a></li>
                                        <li><a  class="btn btn-default" data-toggle="pill" href="#mseete">M.Sc in EETE</a></li>
                                    </ul>
                                </div>
                                <div class="panel panel-body">
                                    <div class="tab-content">
                                        <div id="eeteday" class="tab-pane fade in active">
                                            <div class="jumbotron tab-content">
                                                <div class="container">
                                                    <div class="row">
                                                        <?php
                                                        $batch = select_batch('EETE', 'B.Sc', 'day');
                                                        while ($row = mysqli_fetch_assoc($batch)) {
                                                            ?>
                                                            <div class="col-xs-6 col-md-4">
                                                                <a href="viewgroupfile.php?id=<?php echo $row['id'] ?>" class="thumbnail">
                                                                    <img src="images/logo/diulogo.png" alt="img">
                                                                    <div class="caption">
                                                                        <h5 class="text-center">29th & 30th Batch</h5>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="eeteeve" class="tab-pane fade">
                                            <div class="jumbotron tab-content">
                                                <div class="container">
                                                    <div class="row">
                                                        <?php
                                                        $batch = select_batch('EETE', 'B.Sc', 'day');
                                                        while ($row = mysqli_fetch_assoc($batch)) {
                                                            ?>
                                                            <div class="col-xs-6 col-md-4">
                                                                <a href="viewgroupfile.php?id=<?php echo $row['id'] ?>" class="thumbnail">
                                                                    <img src="images/logo/diulogo.png" alt="img">
                                                                    <div class="caption">
                                                                        <h5 class="text-center"><?php echo $row['std_batch']; ?></h5>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="mseete" class="tab-pane fade">
                                            <div class="jumbotron tab-content">
                                                <div class="container">
                                                    <div class="row">
                                                        <?php
                                                        $batch = select_batch('EETE', 'M.Sc', 'day');
                                                        while ($row = mysqli_fetch_assoc($batch)) {
                                                            ?>
                                                            <div class="col-xs-6 col-md-4">
                                                                <a href="viewgroupfile.php?id=<?php echo $row['id'] ?>" class="thumbnail">
                                                                    <img src="images/logo/diulogo.png" alt="img">
                                                                    <div class="caption">
                                                                        <h5 class="text-center"> <?php echo $row['std_batch']; ?></h5>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--EETE bacth list Ends-->



                            <!-- BBA bacth list starts-->
                            <div id="BBA" class="tab-pane fade">
                                <div class="panel panel-heading" style="padding-top: 40px;">
                                    <ul class="nav nav-pills text-center" style="">
                                        <li class="active"><a class="btn btn-default" data-toggle="pill" href="#bbaday">B. Business Administration (Day)</a></li>
                                        <li><a class="btn btn-default" data-toggle="pill" href="#bbaeve">B. Business Administration (Evening)</a></li>
                                        <li><a  class="btn btn-default" data-toggle="pill" href="#mba">M. Business Administration </a></li>
                                    </ul>
                                </div>
                                <div class="panel panel-body">
                                    <div class="tab-content">
                                        <div id="bbaday" class="tab-pane fade in active">
                                            <div class="jumbotron tab-content">
                                                <div class="container">
                                                    <div class="row">
                                                        <?php
                                                        $batch = select_batch('BBA', 'BBA', 'day');
                                                        while ($row = mysqli_fetch_assoc($batch)) {
                                                            ?>
                                                            <div class="col-xs-6 col-md-4">
                                                                <a href="viewgroupfile.php?id=<?php echo $row['id'] ?>" class="thumbnail">
                                                                    <img src="images/logo/diulogo.png" alt="img">
                                                                    <div class="caption">
                                                                        <h5 class="text-center"><?php echo $row['std_batch']; ?></h5>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="bbaeve" class="tab-pane fade">
                                            <div class="jumbotron tab-content">
                                                <div class="container">
                                                    <div class="row">
                                                        <?php
                                                        $batch = select_batch('BBA', 'BBA', 'evening');
                                                        while ($row = mysqli_fetch_assoc($batch)) {
                                                            ?>
                                                            <div class="col-xs-6 col-md-4">
                                                                <a href="viewgroupfile.php?id=<?php echo $row['id'] ?>" class="thumbnail">
                                                                    <img src="images/thumb/diu.jpg" alt="img">
                                                                    <div class="caption">
                                                                        <h5 class="text-center"><?php echo $row['std_batch']; ?></h5>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="mba" class="tab-pane fade">
                                            <div class="jumbotron tab-content">
                                                <div class="container">
                                                    <div class="row">
                                                        <?php
                                                        $batch = select_batch('BBA', 'MBA', 'day');
                                                        while ($row = mysqli_fetch_assoc($batch)) {
                                                            ?>
                                                            <div class="col-xs-6 col-md-4">
                                                                <a href="viewgroupfile.php?id=<?php echo $row['id'] ?>" class="thumbnail">
                                                                    <img src="images/thumb/diu.jpg" alt="img">
                                                                    <div class="caption">
                                                                        <h5 class="text-center"><?php echo $row['std_batch']; ?></h5>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- BBA bacth list ENDS-->

                            <!--LAW bacth list starts-->

                            <div id="LAW" class="tab-pane">
                                <div class="panel panel-heading" style="padding-top: 40px;">
                                    <ul class="nav nav-pills text-center" style="">
                                        <li class="active"><a class="btn btn-default" data-toggle="pill" href="#bbaday">B. Business Administration (Day)</a></li>
                                        <li><a class="btn btn-default" data-toggle="pill" href="#bbaeve">B. Business Administration (Evening)</a></li>
                                        <li><a  class="btn btn-default" data-toggle="pill" href="#mba">M. Business Administration </a></li>
                                    </ul>
                                </div>
                                <div class="panel panel-body">
                                    <div class="tab-content">
                                        <div id="bbaday" class="tab-pane fade in active">
                                            <div class="jumbotron tab-content">
                                                <div class="container">
                                                    <div class="row">
                                                        <?php
                                                        $batch = select_batch('BBA', 'BBA', 'day');
                                                        while ($row = mysqli_fetch_assoc($batch)) {
                                                            ?>
                                                            <div class="col-xs-6 col-md-4">
                                                                <a href="viewgroupfile.php?id=<?php echo $row['id'] ?>" class="thumbnail">
                                                                    <img src="images/thumb/diu.jpg" alt="img">
                                                                    <div class="caption">
                                                                        <h5 class="text-center"><?php echo $row['std_batch']; ?></h5>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="bbaeve" class="tab-pane fade">
                                            <div class="jumbotron tab-content">
                                                <div class="container">
                                                    <div class="row">
                                                        <?php
                                                        $batch = select_batch('BBA', 'BBA', 'evening');
                                                        while ($row = mysqli_fetch_assoc($batch)) {
                                                            ?>
                                                            <div class="col-xs-6 col-md-4">
                                                                <a href="viewgroupfile.php?id=<?php echo $row['id'] ?>" class="thumbnail">
                                                                    <img src="images/thumb/diu.jpg" alt="img">
                                                                    <div class="caption">
                                                                        <h5 class="text-center"><?php echo $row['std_batch']; ?></h5>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="mba" class="tab-pane fade">
                                            <div class="jumbotron tab-content">
                                                <div class="container">
                                                    <div class="row">
                                                        <?php
                                                        $batch = select_batch('BBA', 'MBA', 'day');
                                                        while ($row = mysqli_fetch_assoc($batch)) {
                                                            ?>
                                                            <div class="col-xs-6 col-md-4">
                                                                <a href="viewgroupfile.php?id=<?php echo $row['id'] ?>" class="thumbnail">
                                                                    <img src="images/thumb/diu.jpg" alt="img">
                                                                    <div class="caption">
                                                                        <h5 class="text-center"><?php echo $row['std_batch']; ?></h5>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--LAW bacth list Ends-->
                            <!--English bacth list Starts-->
                            <div id="ENGLISH" class="tab-pane fade">
                                <div class="panel panel-heading" style="padding-top: 40px;">
                                    <ul class="nav nav-pills text-center" style="padding-left: 130px">
                                        <li class="active"><a class="btn btn-default" data-toggle="pill" href="#baeng">BA (Hons.) in English</a></li>
                                        <li><a class="btn btn-default" data-toggle="pill" href="#maeng1">MA in English (1 Year)</a></li>
                                        <li><a  class="btn btn-default" data-toggle="pill" href="#maeng2">MA in English (2.5 Year</a></li>
                                    </ul>
                                </div>
                                <div class="panel panel-body">
                                    <div class="tab-content">
                                        <div id="baeng" class="tab-pane fade in active">
                                            <div class="jumbotron tab-content">
                                                <div class="container">
                                                    <div class="row">
                                                        <?php
                                                        $batch = select_batch('English', 'BA', 'day');
                                                        while ($row = mysqli_fetch_assoc($batch)) {
                                                            ?>
                                                            <div class="col-xs-6 col-md-4">
                                                                <a href="viewgroupfile.php?id=<?php echo $row['id'] ?>" class="thumbnail">
                                                                    <img src="images/thumb/diu.jpg" alt="img">
                                                                    <div class="caption">
                                                                        <h5 class="text-center"><?php echo $row['std_batch']; ?></h5>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="maeng1" class="tab-pane fade">
                                            <div class="jumbotron tab-content">
                                                <div class="container">
                                                    <div class="row">
                                                        <?php
                                                        $batch = select_batch('English', 'MA', 'day');
                                                        while ($row = mysqli_fetch_assoc($batch)) {
                                                            ?>
                                                            <div class="col-xs-6 col-md-4">
                                                                <a href="viewgroupfile.php?id=<?php echo $row['id'] ?>" class="thumbnail">
                                                                    <img src="images/thumb/diu.jpg" alt="img">
                                                                    <div class="caption">
                                                                        <h5 class="text-center"><?php echo $row['std_batch']; ?></h5>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="maeng2" class="tab-pane fade">
                                            <div class="jumbotron tab-content">
                                                <div class="container">
                                                    <div class="row">
                                                        <?php
                                                        $batch = select_batch('English', 'MA(2.5 year)', 'day');
                                                        while ($row = mysqli_fetch_assoc($batch)) {
                                                            ?>
                                                            <div class="col-xs-6 col-md-4">
                                                                <a href="viewgroupfile.php?id=<?php echo $row['id'] ?>" class="thumbnail">
                                                                    <img src="images/thumb/diu.jpg" alt="img">
                                                                    <div class="caption">
                                                                        <h5 class="text-center"><?php echo $row['std_batch']; ?></h5>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--English bacth list Ends-->

                            <!--Sociology bacth list Starts-->
                            <div id="SOCIOLOGY" class="tab-pane fade">
                                <div class="panel panel-heading" style="padding-top: 40px;">
                                    <ul class="nav nav-pills text-center" style="padding-left: 130px">
                                        <li class="active"><a class="btn btn-default" data-toggle="pill" href="#basocio">BSS (Hons.) in Sociology</a></li>
                                        <li><a class="btn btn-default" data-toggle="pill" href="#masocio">MSS in Sociology (1 Year)</a></li>
                                        <li><a  class="btn btn-default" data-toggle="pill" href="#masocio2">MSS in Sociology (2 Year)</a></li>
                                    </ul>
                                </div>
                                <div class="panel panel-body">
                                    <div class="tab-content">
                                        <div id="basocio" class="tab-pane fade in active">
                                            <div class="jumbotron tab-content">
                                                <div class="container">
                                                    <div class="row">
                                                        <?php
                                                        $batch = select_batch('Sociology', 'BSS', 'day');
                                                        while ($row = mysqli_fetch_assoc($batch)) {
                                                            ?>
                                                            <div class="col-xs-6 col-md-4">
                                                                <a href="viewgroupfile.php?id=<?php echo $row['id'] ?>" class="thumbnail">
                                                                    <img src="images/thumb/diu.jpg" alt="img">
                                                                    <div class="caption">
                                                                        <h5 class="text-center"><?php echo $row['std_batch']; ?></h5>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="masocio" class="tab-pane fade">
                                            <div class="jumbotron tab-content">
                                                <div class="container">
                                                    <div class="row">
                                                        <?php
                                                        $batch = select_batch('Sociology', 'MSS', 'day');
                                                        while ($row = mysqli_fetch_assoc($batch)) {
                                                            ?>
                                                            <div class="col-xs-6 col-md-4">
                                                                <a href="viewgroupfile.php?id=<?php echo $row['id'] ?>" class="thumbnail">
                                                                    <img src="images/thumb/diu.jpg" alt="img">
                                                                    <div class="caption">
                                                                        <h5 class="text-center"><?php echo $row['std_batch']; ?></h5>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="masocio2" class="tab-pane fade">
                                            <div class="jumbotron tab-content">
                                                <div class="container">
                                                    <div class="row">
                                                        <?php
                                                        $batch = select_batch('Sociology', 'MSS(2year)', 'day');
                                                        while ($row = mysqli_fetch_assoc($batch)) {
                                                            ?>
                                                            <div class="col-xs-6 col-md-4">
                                                                <a href="viewgroupfile.php?id=<?php echo $row['id'] ?>" class="thumbnail">
                                                                    <img src="images/thumb/diu.jpg" alt="img">
                                                                    <div class="caption">
                                                                        <h5 class="text-center"><?php echo $row['std_batch']; ?></h5>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Sociology bacth list Ends-->

                            <!--Pharmacy bacth list Starts-->
                            <div id="PHARMACY" class="tab-pane fade">
                                <div class="panel panel-heading" style="padding-top: 40px;">
                                    <ul class="nav nav-pills text-center" style="padding-left: 260px">
                                        <li class="active"><a class="btn btn-default" data-toggle="pill" href="#basocio">BSS (Hons.) in Sociology</a></li>
                                    </ul>
                                </div>
                                <div class="panel panel-body">
                                    <div class="tab-content">
                                        <div id="basocio" class="tab-pane fade in active">
                                            <div class="jumbotron tab-content">
                                                <div class="container">
                                                    <div class="row">
                                                        <?php
                                                        $batch = select_batch('Pharmacy', 'B.pharma', 'day');
                                                        while ($row = mysqli_fetch_assoc($batch)) {
                                                            ?>
                                                            <div class="col-xs-6 col-md-4">
                                                                <a href="viewgroupfile.php?id=<?php echo $row['id'] ?>" class="thumbnail">
                                                                    <img src="images/thumb/diu.jpg" alt="img">
                                                                    <div class="caption">
                                                                        <h5 class="text-center"><?php echo $row['std_batch']; ?></h5>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Pharmace bacth list Ends-->


                        </div>
                    </div>
                </div><!-- End of main content div -->
            </div>
            <div class="col-lg-offset-2" style="auto" >

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

    </body>
</html>
<?php } else {
    header('location: login.php');
}