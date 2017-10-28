<?php
session_start();
if (isset($_SESSION['login_std']) || isset($_SESSION['login_tch'])) {

    include './lib/dbconfig.php';
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
                                <a class="navbar-brand" href="index2.php">
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
                    <div class="col-lg-2" style="">
                        <div class="btn-group">
                            <a class="btn btn-success btn-block" href="fees.php">Fees</a>
                            <a class="btn btn-success btn-block" href="batchlist.php">Batch Group</a>
                            <!-- <a class="btn btn-success btn-block" href="notice.php">Notice Board</a> -->
                            <a class="btn btn-success btn-block" href="courses_credits.php">Courses & Credit Info</a>
                            <a class="btn btn-success btn-block" href="facultymem.php">Faculty Members</a>
                        </div>

                    </div>
                    <div class="col-lg-8" style="height: auto;background-color: #F2F9EA;">
                        <?php
                        if (isset($_SESSION['login_std'])) {
                            $std_id = $_SESSION['login_std'];
                            $sql = "SELECT * FROM tbl_std_info a, tbl_batch b WHERE a.id=$std_id AND  a.batch_id=b.id";
                            $result_set = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($result_set);
                            // echo '<pre>';
                            // print_r($row);
                            // exit();
                            ?>
                            <div class="media">
                                <div class="media-left">
                                    <img src="uploads/user/<?php echo $row['profile_pic'] ?>" class="media-object " style="width:200px;height:200px;padding:20px 0px 0px 0px">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading text-center" style="padding-top:50px"><?php echo $row['std_name']; ?></h4>
                                </div>
                                <ul class="list-group" >
                                    <li class="list-group-item" >Email Address :<strong> <?php echo $row['std_email']; ?></strong></li>
                                    <li class="list-group-item" >Registration Number : <strong><?php echo $row['std_id']; ?></strong></li>
                                    <li class="list-group-item" >Department Name :<strong> <?php echo $row['std_dept']; ?></strong></li>
                                    <li class="list-group-item" >Batch : <strong><?php echo $row['std_batch']; ?></strong></li>
                                    <li class="list-group-item" >Mobile Number :<strong><?php echo $row['std_mobile']; ?></strong> </li>
                                </ul>
                            </div>
                        <a type="button" class="btn btn-success" href="profile_edit.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update Profile</a><br/><br/>


                            <?php
                            if (isset($_POST['submit'])) {
//                                
                                if ($_FILES['p_image']['tmp_name']) {

                                    $target = 'uploads/user/';
                                    $file = rand(1000, 100000) . "-" . $_FILES['p_image']['name'];
                                    $new_file_name = strtolower($file);
                                    // make file name in lower case

                                    $final_file = str_replace(' ', '-', $new_file_name);
                                    move_uploaded_file($_FILES['p_image']['tmp_name'], $target . $final_file);
                                } else {
                                    $final_file = $row['profile_pic'];
                                }
                                $std_reg = $_POST['registration_numbe'];
                                $std_password = $_POST['password'];

                                $std_name = $_POST['user_name'];
                                $phone = $_POST['phone_number'];
                                $std_email = $_POST['email_address'];

                                $prgm = $row['std_prgm'];
                                $dept = $_POST['dept'];
                                $batch = $_POST['batch'];
                                $shift = $row['std_shift'];
                                $sql = "SELECT * FROM tbl_batch WHERE std_prgm='$prgm' AND std_dept='$dept' AND std_batch='$batch' AND std_shift='$shift'";

                                $batch_id = mysqli_query($conn, $sql);
                                $batch_id = mysqli_fetch_assoc($batch_id);
                                $batch_id = $batch_id['id'];



                                $sql = "UPDATE tbl_std_info set std_id='$std_reg', batch_id='$batch_id', std_password='$std_password', std_name='$std_name', std_mobile='$phone', std_email='$std_email', profile_pic='$final_file' WHERE id=$std_id";


                                if (mysqli_query($conn, $sql)) {
                                    echo '<h4 class="text-center alert alert-success">Upadate successful</h4>';
                                } else {
                                    echo 'insert failed' . $sql . "<br>" . mysqli_error();
                                }
                            }
                            ?>
                        </div>
                        <?php
                    } else if (isset($_SESSION['login_tch'])) {
                        $tch_id = $_SESSION['login_tch'];
                        $sql = "SELECT * FROM tbl_teacher WHERE id=$tch_id";
                        $result_set = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result_set);
                        // echo '<pre>';
                        // print_r($row);
                        // exit();
                        ?> 
                        <div class="media">
                            <div class="media-left">
                                <img src="uploads/user/<?php echo $row['profile_pic'] ?>" class="media-object " style="width:200px;height:200px;padding:20px 0px 0px 0px">
                            </div>
                            <div class="media-body">
                                <h4 class="text-center media-heading" style="padding-top:50px;"><?php echo $row['t_name']; ?></h4>
                            </div>
                            <div class="list-grou">
                                <li class="list-group-item"><strong>Registration Number : </strong><?php echo $row['t_RegNmbr'] ?></li>
                            </div>
                        </div>
                    <a type="button" href="profile_edit.php" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update Profile</a>


                        <?php
                        if (isset($_POST['submit'])) {
                            $tch_reg = $_POST['registration_numbe'];
                            $tch_pass = $_POST['password'];
                            $tch_name = $_POST['user_name'];
                            $sql = "UPDATE tbl_teacher set t_RegNmbr='$tch_reg', t_pass='$tch_pass', t_name='$tch_name' ";
                            if (mysqli_query($conn, $sql)) {
                                echo '<h4 class="text-center alert alert-success">Upadate successful</h4>';
                            } else {
                                echo 'insert failed' . $sql . "<br>" . mysqli_error();
                            }
                        }
                        ?>
                    </div>

                <?php } ?>
            </div>
            <div class="col-lg-offset-2" style="height: auto;" >

            </div>
        </div>
    </div>
    </div>
    <!-- footer goes here -->
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
    <?php
} else {

    header('location: login.php');
}