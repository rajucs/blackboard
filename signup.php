<?php
require './lib/dbconfig.php';
$sql = "SELECT DISTINCT(std_prgm) FROM tbl_batch ";
$program = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign UP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
       <style type="text/css" >
            body{
                background-image:url(images/logo/diucampus.jpg);
                    background-size: 100% 100%;
                    background-repeat: no-repeat;
            }
        </style>
    </head>
    <body>

        <div class="container" style="padding-top:20px;">
            <div class="row">
                <div class="col-md-3" style="">

                </div>
                <div class="col-md-6" style="">
                    <!--<div class="col-md-offset-2" style="float: left;height: 300px"></div>-->
                    <div class="col-md-11" style="height: auto;" >
                     <div>
                        <img src="images/logo/diulogo.png" style="width:100%;height:100px" />
                    </div>

                        <div class="panel panel-default">
                            <div class="panel panel-body">
                                <form   action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group row has-success">
                                        <label for="user_name" class="col-md-5 col-form-label">Registration number : </label>
                                        <div class="col-md-7">
                                            <input type="number" name="registration_numbe" class="form-control" required="" placeholder="please enter a reg name">
                                        </div>
                                    </div>
                                    <div class="form-group row has-success">
                                        <label for="password" class="col-md-5 form-label">Password : </label>
                                        <div class="col-md-7">
                                            <input type="password" class="form-control" name="password" required="" placeholder="please password here">

                                        </div>
                                    </div>
                                    <div class="form-group row has-success">
                                        <label for="user_name" class="col-md-5 col-form-label">User name: </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <span class="glyphicon glyphicon-user"></span>
                                                </div>
                                                <input type="text" name="user_name" class="form-control" id="user_name" required="" placeholder="please enter a user name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row has-success">
                                        <label for="program" class="col-md-5 col-form-label">Program:  </label>
                                        <div class="col-md-7">
                                            <select name="program"  class="form-control custom-select" id="program">
                                                <option value="">Select Your Program</option>
                                                <?php while ($heda = mysqli_fetch_assoc($program)) { ?>
                                                    <option value="<?php echo $heda['std_prgm']; ?>"><?php echo $heda['std_prgm']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="form-group row has-success">
                                        <label for="department" id="dept_lvl" class="col-md-5 col-form-label">Department : </label>
                                        <div class="col-md-7">
                                            <select name="department" class=" form-control" id="department">
                                                <option value="">Select your department</option>

                                            </select>

                                        </div>
                                    </div>
                                    <div class="form-group row has-success">
                                        <label for="batch" id="batch_lvl" class="col-md-5 for-form-label">Batch : </label>
                                        <div class="col-md-7">
                                            <select name="batch" class="form-control" id="batch">
                                                <option value="">Select Batch</option>

                                            </select>

                                        </div>
                                    </div>
                                    <div class="form-group row has-success">
                                        <label for="shift" id="shift" class="col-md-5 form-label">Shift: </label>
                                        <div class="col-md-7">
                                            <select name="shift" class="custom-select form-control" id="shift">
                                                <option value="">Select Day or Evening</option>
                                                <option value="day">Day</option>
                                                <option value="evening">Evening</option>
                                            </select>

                                        </div>
                                    </div>




                                    <div class="form-group row has-success">
                                        <label for="phone_number" class="col-md-5 form-label">Phone number:</label>
                                        <div class="col-md-7">
                                            <input type="number" class="form-control" name="phone_number" required="" placeholder="please enter valid phone number"/>
                                        </div>
                                    </div>
                                    <div class="form-group row has-success">
                                        <label for="email" class="col-md-5 form-label">Email address: </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <span class="glyphicon glyphicon-envelope"></span> 
                                                </div>
                                                <input type="email" class="form-control" name="email_address" required="" placeholder="please enter valid phone number"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        
                                         <input type="file" accept="image/*" name="p_image"  id="open-img">
                                        <img src="#" height="100" width="150" id="img">


                                    </div>

                                    <div class="form-group">

                                        <input type="submit" class="btn btn-success" name="submit" value="submit" >

                                    </div>
                                </form>
                                <?php
                                include './lib/dbconfig.php';
                                if (isset($_POST['submit'])) {
                                    $target = 'uploads/user/';
                                    $file = rand(1000, 100000) . "-" . $_FILES['p_image']['name'];
                                    $new_file_name = strtolower($file);
                                    // make file name in lower case

                                    $final_file = str_replace(' ', '-', $new_file_name);
                                    move_uploaded_file($_FILES['p_image']['tmp_name'], $target . $final_file);
                                    $std_reg = $_POST['registration_numbe'];
                                    $std_password = $_POST['password'];

                                    $std_name = $_POST['user_name'];
                                    $phone = $_POST['phone_number'];
                                    $std_email = $_POST['email_address'];

                                    $prgm = $_POST['program'];
                                    $dept = $_POST['department'];
                                    $batch = $_POST['batch'];
                                    $shift = $_POST['shift'];
                                    $sql = "SELECT * FROM tbl_batch WHERE std_prgm='$prgm' AND std_dept='$dept' AND std_batch='$batch' AND std_shift='$shift'";
                                    $batch_id = mysqli_query($conn, $sql);
                                    $batch_id = mysqli_fetch_assoc($batch_id);
                                    $batch_id = $batch_id['id'];

                                    $sql = "INSERT INTO tbl_std_info(`std_id`,`batch_id`, `std_password`, `std_name`,  `std_mobile`, `std_email`, `profile_pic`) "
                                            . "VALUES  ('$std_reg','$batch_id', '$std_password', '$std_name',  '$phone', '$std_email', '$final_file')";
                                    if (mysqli_query($conn, $sql)) {
                                        echo '<h4 class="text-center alert alert-success"><span class="glyphicon glyphicon-saved"></span> User Created successful<br/><br/><a class="btn btn-success" href="login.php">Now Log in here</a></h4>';
                                    } else {
                                        echo 'insert failed' . $sql . "<br>" . mysqli_error($conn);
                                    }
                                }
                                ?>
                            </div>
                            <div class="panel panel-footer">
                                <p>
                                    Have you an account?
                                </p>
                                <p>
                                    please <a href="index.php">LOG IN</a> here.
                                </p>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-offset-1">    </div>
                </div>
            </div>
            <div class="col-md-offset-3">     </div>
        </div>

    </div>

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
