<?php
include './lib/dbconfig.php';
session_start();
if (isset($_POST['submit'])) {
    $reg_numb = $_POST['reg_number'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM  tbl_std_info WHERE  std_id='$reg_numb' and  	std_password='$password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        $_SESSION['login_std'] = $row['id'];
    } else {
        $sql = "SELECT * FROM  tbl_teacher WHERE  t_RegNmbr='$reg_numb' and  t_pass='$password'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            $_SESSION['login_tch'] = $row['id'];
        } else
            $_SESSION['msg'] = 'Invalid Registration number or Password <br> please try again';
    }
}
if (isset($_SESSION['login_std'])) {
    header("location:index2.php");
} else if (isset($_SESSION['login_tch'])) {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>log in</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <link rel="shortcut icon" href="../favicon.ico"> 

        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style type="text/css" >
            body{
                background-image:url(images/logo/diucampus.jpg);
            }
        </style>
        
    </head>
    <body>


        <div class="container" style="padding-top:20px">
            <div class="row">
                <div class="col-md-3" style="">

                </div>
                <div class="col-md-6" style="">

                    <!--<div class="col-md-offset-2" style="float: left;height: 300px"></div>-->
                    <div class="col-md-11" style="height: auto;" >
                   <div>
                        <img src="images/logo/diulogo.png" style="width:100%;height:100%" />
                    </div>

                        <div class="panel panel-default">
                            <?php if (isset($_SESSION['msg'])) { ?>
                                <div class="alert alert-danger">
                                    <h3 class=" text-center"><?php
                                        echo $_SESSION['msg'];
                                        unset($_SESSION['msg']);
                                        ?></h3>
                                </div>
                            <?php } ?>
                            <div class="panel-body"> 
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="number">Registration number : </label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-id-card" aria-hidden="true"></i>
                                            </div>
                                            <input type="number" class="form-control" id="email" name="reg_number" required=""  placeholder="please enter registration number"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password : </label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-unlock-alt"></i>
                                            </div>
                                            <input type="password" class="form-control" id="password" name="password" required="" placeholder="password">

                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success" id="btn" name="submit">Submit</button>
                                    <button type="reset" class="btn btn-success "  name="reset">Reset</button>
                                </form><br/>
                                <p>
                                   are you a Student of DIU? cant access your account?
                                </p>
                                <p>
                                    please <a href="signup.php">SIGN UP</a> here.
                                </p>


                                <div class="panel-footer text-center">
                                    <a class="fa fa-facebook-square" target="_blank" href="https://www.facebook.com/diu.net.bd"></a>
                                    <a class="fa fa-youtube-square" target="_blank" href="https://www.youtube.com/channel/UCH919CzDsWuHZXwvEeA0Z4w/"></a>
                                    <a class="glyphicon glyphicon-btc" target="_blank" href="http://techhisto.blogspot.com/"></a>
                                </div>
                            </div> 





                        </div>
                        <div class="col-md-offset-1">    </div>
                    </div>
                </div>
                <div class="col-md-offset-3">     </div>
            </div>

        </div>
        <script>
        
        </script>
    </body>
</html>
