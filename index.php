<?php
session_start();
if ( isset($_SESSION['login_tch'])) {
    


include_once './lib/dbconfig.php';

$sql = "SELECT DISTINCT(std_prgm) FROM tbl_batch ";
$sqlsh = "SELECT DISTINCT(std_shift) FROM tbl_batch ";
$program = mysqli_query($conn, $sql);
$shift = mysqli_query($conn, $sqlsh);
?>
<!DOCTYPE html>
<html>

    <head
        <meta charset="UTF-8">
        <title>Teachers Homepage</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="css/paginate.css" rel="stylesheet" />
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">


    </head>
    <body style="padding-top: 51px;">
        <div class="container" style="">
            <div class="row">
                <nav class="navbar navbar-default navbar-fixed-top" style="">
                    <div class="container" >
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>                        
                            </button>
                            <a class="navbar-brand" href="index.php">
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
                        <!-- <a class="btn btn-success btn-block" href="notice.php">Notice Board</a> -->
                        <a class="btn btn-success btn-block" href="courses_credits.php">Courses & Credit Info</a>
                        <a class="btn btn-success btn-block" href="facultymem.php">Faculty Members</a>
                    </div>

                </div>
                <div class="col-lg-6 " style="height: auto;background-color: #F2F9EA;">
                    <div class="jumbotron">
                        <form action="upload.php" method="post" enctype="multipart/form-data" style="padding-top: 10px;">
                            <div class="">
                                <label for="program" class="control-label">
                                    <select name="program"  class="form-control" id="program">
                                        <option value="">Select Program</option>
                                        <?php while ($programp = mysqli_fetch_assoc($program)) { ?>
                                            <option value="<?php echo $programp['std_prgm']; ?>"><?php echo $programp['std_prgm']; ?></option>
                                        <?php } ?>
                                    </select>
                                </label>
                                <label for="department" class="control-label">
                                    <select name="depart"  class="form-control" id="department">
                                        <option value="">Select Department</option>
                                    </select>
                                </label>
                                <label for="batch" id="batch_lvl" class="control-label">
                                    <select name="batch" class="form-control" id="batch">
                                        <option value="">Select Batch</option>
                                    </select>
                                </label>

                                <label for="shift" id="shift" class="control-label">
                                    <select name="shift" class="form-control" id="shift">
                                        <option value="">Select shift</option>
                                        <?php while ($shift_show = mysqli_fetch_assoc($shift)) { ?>
                                            <option value="<?php echo $shift_show['std_shift']; ?>"><?php echo $shift_show['std_shift']; ?></option>
                                        <?php } ?>
                                    </select>
                                </label>
                                <label class="btn btn-default btn-file">Choose File
                                    <input type="file" name="file" class="hidden" /><br/>
                                </label>
                                <textarea name="text" placeholder="link/text here" rows="3" cols="60"></textarea>
                                <button class="btn btn-primary btn-success" type="submit" name="btn-upload">upload</button>

                            </div>
                        </form>
                    </div>


                    <div class="list-of-posts">

                        <?php
                        $sql = "SELECT *, a.id as up_id FROM tbl_uploads a,tbl_teacher b WHERE a.tch_id=b.id ORDER BY a.id DESC";
                        $result_set = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result_set)) {
                            ?>
                            <div class="post">
                                <div class="panel panel-success">
                                    <div class="panel-body">
                                        <div class="media">
                                  <!--           <div class="media-left                                                            <img src="uploads/user/<?php echo $row['t_propic']; ?>" class="media-object img-rounded" style="width:60px">
                                                      </div> -->
                                            <div class="media-body">
                                                <h4 class="media-heading" name="upldr_name" style="color: green"><?php echo $row['t_name']; ?></h4>
                                                <h6>Posted on :
                                                    <small><?php echo $row['date']; ?></small>
                                                </h6>
                                                <?php if($row['file']!=' '){?>
                                                <a href="#">
                                                    <?php echo $row['file'] ?> </a><br/><br/>
                                                    <a href="uploads/<?php echo $row['file'] ?>" class="btn btn-default btn-sm" target="_blank" ><i class="fa fa-file-o" aria-hidden="true"></i> view file</a>
                                                <a href="download.php?filename=<?php echo $row['file']; ?>" class="btn btn-default btn-sm" target="_blank" ><i class="fa fa-download" aria-hidden="true"></i> download</a>
                                                <a href="delete.php?id=<?php echo $row['up_id']; ?>" class="btn btn-danger btn-sm" ><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
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
                                                 <a href="delete.php?id=<?php echo $row['up_id']; ?>" class="btn btn-danger btn-sm" ><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
                                                <?php }}?>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <?php
                        }
                        ?>

                    </div>
                    <div class="pagination">

                    </div>


                </div>
                <div class="col-lg-4" style="height: auto;padding: 0 0 0 10px" >
                    <div class="panel panel-default">
                        <h3 class="text-center">Grading System</h3>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover">
                                <tr>
                                    <th class="col-md-6">Marks Range</th>
                                    <th class="col-md-3">Letter Grade</th>
                                    <th class="col-md-3">Grade Point</th>
                                </tr>
                                <tr class="success">
                                    <td ><small>80% and above</small></td>
                                    <td>A+</td>
                                    <td>4.00</td>
                                </tr>
                                <tr>
                                    <td><small>75% to less than 80%</small> </td>
                                    <td>A</td>
                                    <td>3.75</td>
                                </tr>
                                <tr>
                                    <td><small>70% to less than 75%</small> </td>
                                    <td>A-</td>
                                    <td>3.50</td>
                                </tr>
                                <tr>
                                    <td><small>65% to less than 70%</small> </td>
                                    <td>B+</td>
                                    <td>3.25</td>
                                </tr>
                                <tr>
                                    <td><small>60% to less than 65%</small> </td>
                                    <td>B </td>
                                    <td>3.00</td>
                                </tr>
                                <tr>
                                    <td><small>55% to less than 60%</small> </td>
                                    <td>B-</td>
                                    <td>2.75</td>
                                </tr>
                                <tr>
                                    <td><small>50% to less than 55%</small> </td>
                                    <td>C+</td>
                                    <td>2.50</td>
                                </tr>
                                <tr>
                                    <td><small>45% to less than 50%</small> </td>
                                    <td>C</td>
                                    <td>2.25 </td>
                                </tr>
                                <tr>
                                    <td><small>40% to less than 45%</small> </td>
                                    <td>D</td>
                                    <td>2.00</td>
                                </tr>
                                <tr>
                                    <td><small>Below 40%</small> </td>
                                    <td>F</td>
                                    <td>0.00</td>
                                </tr>
                            </table>
                        </div>
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

<?php }
else {
     header('location: login.php');
}