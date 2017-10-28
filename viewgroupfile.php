<?php
include_once './lib/dbconfig.php';
session_start();
if (!isset($_SESSION['login_tch'])) {
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>File & information view</title>
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
                                <img class="img-round" style="max-width:50px;; height: 30px; margin-top: -7px;float: left"
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
                <div class="col-lg-2" style="float: left">
                    <div class="btn-group">
                        <a class="btn btn-success btn-block" href="fees.php">Fees</a>
                        <a class="btn btn-success btn-block" href="batchlist.php">Batch Group</a>
                        <!-- <a class="btn btn-success btn-block" href="#">Notice Board</a> -->
                        <a class="btn btn-success btn-block" href="courses_credits.php">Courses & Credit Info</a>
                        <a class="btn btn-success btn-block" href="facultymem.php">Faculty Members</a>
                    </div>

                </div>
                <div class="col-lg-7 " style="height: auto;background-color: #F2F9EA;">

                    <?php
                    $batch = $_GET['id'];

                    $sql = "SELECT * , a.id as up_id FROM tbl_uploads a,tbl_teacher b WHERE a.tch_id=b.id AND a.batch_id=$batch  ORDER BY a.id DESC";
                    $result_set = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result_set)) {
                        ?>
                        <div class="panel panel-success">
                            <div class="panel-body">
                                <div class="media">
                                    <div class="media-left">
                                    <!--     <img src="uploads/user/<?php echo $row['profile_pic']; ?>" class="media-object img-circle" style="width:60px"> -->
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading" name="upldr_name" style="color: green"><?php echo $row['t_name']; ?></h4>
                                        <h6>Posted on 
                                            <?php echo $row['date']; ?>
                                        </h6>

                                        
                                                <?php if($row['file']!=' '){?>
                                                <a href="#">
                                                    <?php echo $row['file'] ?> </a><br/><br/>
                                                    <a href="uploads/<?php echo $row['file'] ?>" class="btn btn-default btn-sm" target="_blank" ><i class="fa fa-file-o" aria-hidden="true"></i> view file</a>
                                                <a href="download.php?filename=<?php echo $row['file']; ?>" class="btn btn-default btn-sm" target="_blank" ><i class="fa fa-download" aria-hidden="true"></i> download</a>
                                                <a href="delete.php?id=<?php echo $row['up_id']; ?>" class="btn btn-danger btn-sm" ><i class="fa fa-trash-o" aria-hidden="true"></i> </a><br>
                                                <?php }
                                                    if($row['text']!= ' '){
                                                ?>
                                                <p><?php echo $row['text']?></p>
                                                <?php  $y_link=strstr($row['text'],'https://www.youtube.com/');
                                                if($y_link){
                                                $y_link=explode('v=',$y_link);
                                               $y_id=$y_link['1'];

                                                ?>

                                                 <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $y_id;?>" frameborder="0" allowfullscreen></iframe>
                                                <?php }}?>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <?php
                    }
                    ?>


                </div>
                <div class="col-lg-offset-3" style="height: auto;" >

                </div>
            </div>
        </div>

        <!--footer goes here -->
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
