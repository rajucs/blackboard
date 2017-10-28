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
            <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">-->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
                                <a class="navbar-brand" href="index2.php">
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
                            <!-- <a class="btn btn-success btn-block" href="notice.php">Notice Board</a> -->
                            <a class="btn btn-success btn-block" href="courses_credits.php">Courses & Credit Info</a>
                            <a class="btn btn-success btn-block" href="facultymem.php">Faculty Members</a>
                        </div>

                    </div>
                    <div class="col-lg-7" style="background-color: #F2F9EA;height: ">
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

                            <div class="jumbotron">
                                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label for="user_name" class="col-md-3">Registration number: </label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="registration_numbe" class="col-md-7 form-control" required="" value="<?php echo $row['std_id'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label for="password" class="col-md-5">Password: </label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="password" class="col-md-7 form-control" name="password" value="<?php echo $row['std_password']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label for="user_name" >User name: </label>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <span class="glyphicon glyphicon-user"></span>
                                                </div>
                                                <input type="text" name="user_name" class="col-md-7 form-control" id="user_name" required="" value="<?php echo $row['std_name']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label for="batch" class="col-md-5">Batch: </label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="batch" id="batch_name" class="col-md-7  form-control" value="<?php echo $row['std_batch']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label for="department" class="col-md-5">Department:  </label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="dept" id="batch_name" class="col-md-7 form-control" value="<?php echo $row['std_dept']; ?>">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label for="phone_number" class="col-md-5">Phone number:</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="number" class="col-md-7 form-control" name="phone_number" required="" value="<?php echo $row['std_mobile']; ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label for="email" class="col-md-5">Email address: </label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="email" class="col-md-7 form-control" name="email_address" required="" value="<?php echo $row['std_email']; ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="file" accept="image/*" name="p_image"  id="open-img">
                                        <img src="uploads/user/<?php echo $row['profile_pic'] ?>" height="100" width="150" id="img">

                                    </div>
                                    <button type="submit" class="btn btn-success" name="submit" value="UPDATE">Update</button>
                                    <a href="profile_view.php" class="btn btn-success pull-right">View Profile</a>
                                </form>
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
                            <h2 class="text-capitalize text-center alert alert-info">Edit your profile</h2>
                            <div class="jumbotron">
                                <form action="" method="post" class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <label for="user_name" class="">Registration number: </label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="registration_numbe" class="form-control" required="" value="<?php echo $row['t_RegNmbr'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <label for="password">Password : </label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="password" class="form-control" name="password" value="<?php echo $row['t_pass']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4">
                                        <label for="user_name" class="">User name: </label>
                                        </div>
                                        <div class="col-md-7">
                                        <input type="text" name="user_name" class=" form-control" id="user_name" required="" value="<?php echo $row['t_name']; ?>">
                                    </div>
                                    </div>

                                    <button type="submit" class="btn btn-success" name="submit" value="UPDATE"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
 Update</button>
                                    <a href="profile_view.php" class="btn btn-success pull-right">View Profile</a>
                                </form>

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
                    <div class="col-lg-offset-4" style="height: 800px;" >

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
            <script type="text/javascript">
                $(document).ready(function () {
                    function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function (e) {
                                $('#img').attr('src', e.target.result);
                            };
                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                    $("#open-img").change(function () {
                        readURL(this);

                    });
                });
            </script>

        </body>
    </html>
    <?php
} else {
    header('location: login.php');
}

