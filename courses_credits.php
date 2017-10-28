<?php
session_start();
if (isset($_SESSION['login_std']) || isset($_SESSION['login_tch'])) {
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
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
                        <!-- <a class="btn btn-success btn-block" href="notice.php">Notice Board</a> -->
                        <a class="btn btn-success btn-block" href="courses_credits.php">Courses & Credit Info</a>
                        <a class="btn btn-success btn-block" href="facultymem.php">Faculty Members</a>
                    </div>

                </div>

                <!--main content part goes from here-->
                <div class="col-lg-8" style="">

                    <div class="page-header text-center">
                        <div class="alert alert-success" >
                            <h3 align="center">Select Faculty</h3>
                        </div>

                        <div class="btn-group ">
                            <button class="btn btn-success " data-toggle="collapse" data-target="#scieng">Science & Engineering</button>
                            <button class="btn btn-success " data-toggle="collapse" data-target="#busins">Business Studies</button>
                            <button class="btn btn-success" data-toggle="collapse" data-target="#demo2">Arts & Social Science</button>
                            <button class="btn btn-success" data-toggle="collapse" data-target="#demo2">Pharmacy</button>
                            <button class="btn btn-success" data-toggle="collapse" data-target="#demo2">Law</button>
                        </div>

                        <!-- science and engineering faculty collase start -->
                        <div class="collapse fade active in row" id="scieng">
                            <br>
                            <div class="panel panel-default">
                                <div class="panel-heading panel-success text-center">
                                    <h2 class=" ">Please Select Your Department</h2>
                                </div>
                                <div class="panel-body">
                                    <ul class="list-group">

                                        <li class="list-group-item btn-primary  btn-block text-center btn-success" data-toggle="modal" data-target="#cse_credit"><a href="#" >Department Of Computer Science & Engineering (Day)</a></li>
                                        <li class="list-group-item btn-primary  btn-block text-center btn-success" data-toggle="modal" data-target="#cse_credit"><a href="#" >Department Of Computer Science & Engineering (Evening)</a></li>
                                        <li class="list-group-item btn-primary btn-block text-center btn-success " data-toggle="modal" data-target="#eete_credit"><a href="#">Department Of Electrical Electronics & Telecommunication Engineering (Day)</a></li>
                                        <li class="list-group-item btn-primary btn-block text-center btn-success " data-toggle="modal" data-target="#eete_credit"><a href="#">Department Of Electrical Electronics & Telecommunication Engineering (Evening)</a></li>
                                        <li class="list-group-item btn-primary btn-block text-center btn-success" data-toggle="modal" data-target="#civil_credit"><a href="#">Civil Engineering (Day)</a></li>
                                        <li class="list-group-item btn-primary btn-block text-center btn-success" data-toggle="modal" data-target="#civil_credit"><a href="#">Civil Engineering (Evening)</a></li>
                                    </ul>
                                </div>
                            </div>                            
                        </div>
                        <!-- science and engineering faculty collase end -->

                        <!-- modal cse credit start-->
                        <div class="modal fade" id="cse_credit">
                            <div class="modal-dialog">
                                <div class="modal-content text-left">
                                    <div class="modal-body">
                                        <div class="panel panel-default">
                                            <div class="panel-heading text-center"><h3>1st Semester</h3></div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table id="example" class="table table-bordered table-hover table-striped">
                                                        <tr>
                                                            <th>Code No.</th>
                                                            <th>Course Title</th>
                                                            <th>Credit</th>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-101</td>
                                                            <td>Introduction to Computer Systems</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>PHY-101</td>
                                                            <td>Physics-1</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>GED-101</td>
                                                            <td>Principles of Accounting</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>GED-102</td>
                                                            <td>Bangladesh Studies</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Total Credits</td>
                                                            <td>12</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading text-center">
                                                <h3>2nd Semester</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-hover table-striped">
                                                        <tr>
                                                            <th>Code No.</th>
                                                            <th>Course Title</th>
                                                            <th>Credit</th>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-103</td>
                                                            <td>Structured Programming</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-104</td>
                                                            <td>Structured Programming Lab</td>
                                                            <td>1</td>
                                                        </tr>
                                                        <tr>
                                                            <td>PHY-103</td>
                                                            <td>Physics-2</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>PHY-104</td>
                                                            <td>Physics-2 Lab</td>
                                                            <td>1</td>
                                                        </tr>
                                                        <tr>
                                                            <td>ENG-101</td>
                                                            <td>Basic English</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>MATH-101</td>
                                                            <td>Linear Algebra & Co-ordinate Geometry</td>
                                                            <td>3</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading text-center">
                                                <h3> 3rd Semester</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-hover table-striped"> 
                                                        <tr>
                                                            <th>Code No.</th>
                                                            <th>Course Title</th>
                                                            <th>Credit</th>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-105</td>
                                                            <td>Digital System</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-106</td>
                                                            <td>Digital System Lab</td>
                                                            <td>1</td>
                                                        </tr>
                                                        <tr>
                                                            <td>CHEM-101</td>
                                                            <td>Chemistry</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>CHEM-102</td>
                                                            <td>Chemistry Lab</td>
                                                            <td>1</td>
                                                        </tr>
                                                        <tr>
                                                            <td>ENG-102</td>
                                                            <td>Communicative English</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>MATH-102</td>
                                                            <td>Differential and Integral Calculus</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Total Credits</td>
                                                            <td>14</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading text-center"><h3>4th Semester</h3></div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-hover table-striped">
                                                        <tr>
                                                            <th>Code No.</th>
                                                            <th>Course Title</th>
                                                            <th>Credits</th>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-201</td>
                                                            <td>Discrete Mathematics</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>EEE-201</td>
                                                            <td>Electrical Circuits</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>EEE-202</td>
                                                            <td>Electrical Circuits Lab</td>
                                                            <td>1</td>
                                                        </tr>
                                                        <tr>
                                                            <td>GED-201</td>
                                                            <td>Principles of Economics</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>MATH-201</td>
                                                            <td>Statistical Methods & Probability</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Total Credits</td>
                                                            <td>13</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading text-center">
                                                <h3>5th Semester</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped table-hover">
                                                        <tr>
                                                            <th>Code No.</th>
                                                            <th>Course Title</th>
                                                            <th>Credits</th>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-203</td>
                                                            <td>Electronic Devices & Circuits</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-204</td>
                                                            <td>Electronic Devices & Circuits Lab</td>
                                                            <td>1</td>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-205</td>
                                                            <td>Data Structure</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-206</td>
                                                            <td>Data Structure Lab</td>
                                                            <td>1</td>
                                                        </tr>
                                                        <tr>
                                                            <td>MATH-202</td>
                                                            <td>Differential Equations & Vector Analysis</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Total Credits</td>
                                                            <td>11</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading text-center">
                                                <h3>6th Semester</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-hover table-striped">
                                                        <tr>
                                                            <th>Code No.</th>
                                                            <th>Course Title</th>
                                                            <th>Credits</th>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-207</td>
                                                            <td>Object Oriented Programming</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-208</td>
                                                            <td>Object Oriented Programming Lab</td>
                                                            <td>1</td>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-209</td>
                                                            <td>Computer Organization & Architecture</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>GED-202</td>
                                                            <td>Principles of Management</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>MATH-203</td>
                                                            <td>Complex Variables & Transforms (Laplace & Fourier) </td>
                                                            <td>3 </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Total Credit</td>
                                                            <td>13</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading text-center">
                                                <h3>7th Semester</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped table-hover">
                                                        <tr>
                                                            <th>Code No.</th>
                                                            <th>Course Title</th>
                                                            <th>Credit</th>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-301</td>
                                                            <td>Algorithm Design & Analysis</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-302</td>
                                                            <td>Algorithm Design & Analysis Lab</td>
                                                            <td>1</td>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-303</td>
                                                            <td>Numerical Analysis</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-304</td>
                                                            <td>Numerical Analysis Lab</td>
                                                            <td>1</td>
                                                        </tr>
                                                        <tr>
                                                            <td>EEE-301</td>
                                                            <td>Data & Telecommunication</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>GED-301</td>
                                                            <td>Law & Ethics in Engineering Practice</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Total Credit</td>
                                                            <td>14</td>
                                                        </tr>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading text-center">
                                                <h3>8th Semester</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped table-hover">
                                                        <tr>
                                                            <th>Code No.</th>
                                                            <th>Course Title</th>
                                                            <th>Credit</th>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-305</td>
                                                            <td>Microprocessor, Microcontroller & Assembly Language</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-306</td>
                                                            <td>Microprocessor, Microcontroller & Assembly Language Lab</td>
                                                            <td>1</td>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-307</td>
                                                            <td>Database Management System</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-308</td>
                                                            <td>Database Management System Lab</td>
                                                            <td>1</td>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-</td>
                                                            <td>Elective Course (Section 1)</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Total Credits</td>
                                                            <td>11</td>
                                                        </tr>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading text-center"><h3>9th Semester</h3></div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-hover table-striped">
                                                        <tr>
                                                            <td>CSE-309</td>
                                                            <td>Operating Systems</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-310</td>
                                                            <td>Operating Systems Lab</td>
                                                            <td>1</td>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-311</td>
                                                            <td>Computer Networks</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-312</td>
                                                            <td>Computer Networks Lab</td>
                                                            <td>1</td>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-</td>
                                                            <td>Elective Course (Section 1)</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-</td>
                                                            <td>Elective Course (Section 1)</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Total Credits</td>
                                                            <td>14</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading text-center">
                                                <h3>10th Semester</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table  table-bordered table-hover table-striped">
                                                        <tr>
                                                            <th>Code No.</th>
                                                            <th>Course Title</th>
                                                            <th>Credit</th>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-401</td>
                                                            <td>Compiler Design</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-402</td>
                                                            <td>Compiler Design Lab</td>
                                                            <td>1</td>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-403</td>
                                                            <td>Peripherals & Interfacing</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-404</td>
                                                            <td>Peripherals & Interfacing Lab</td>
                                                            <td>1</td>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-</td>
                                                            <td>Elective Course (Section 2)</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-</td>
                                                            <td>Elective Course  Lab (Section 2)</td>
                                                            <td>1</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Total Credits</td>
                                                            <td>12</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="panel panel-default">
                                            <div class="panel-heading text-center">
                                                <h3>11th Semester</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped table-hover">
                                                        <tr>
                                                            <td>Code No.</td>
                                                            <td>Course Title</td>
                                                            <td>Credits</td>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-405</td>
                                                            <td>Computer Graphics & Multimedia</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-406</td>
                                                            <td>Computer Graphics & Multimedia Lab</td>
                                                            <td>1</td>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-407</td>
                                                            <td>Artificial Intellegence & Neural Networks </td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-408</td>
                                                            <td>Artificial Intellegence & Neral Networks Lab</td>
                                                            <td>1</td>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-</td>
                                                            <td>Elective Course (Section 2)</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Total Credits</td>
                                                            <td>11</td>
                                                        </tr>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading text-center">
                                                <h3>12th Semester</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped table-hover">
                                                        <tr>
                                                            <th>Code No.</th>
                                                            <th>Course Title</th>
                                                            <th>Credits</th>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-</td>
                                                            <td>Elective Course (Section 2)</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-</td>
                                                            <td>Elective Course (Section 2) Lab</td>
                                                            <td>1</td>
                                                        </tr>
                                                        <tr>
                                                            <td>CSE-425</td>
                                                            <td>Project Work</td>
                                                            <td>5</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Total Credits</td>
                                                            <td>9</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary close" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- modal cse credit end-->
                        <!-- modal eete credit start-->
                        <div class="modal fade" id="eete_credit">
                            <div class="modal-dialog">
                                <div class="modal-content text-left">
                                    <div class="modal-body">
                                        <div class="panel panel-default">
                                            <div class="panel-heading text-center">
                                                <h3>1st Semester</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-hover table-striped">
                                                        <tr>
                                                            <th>Code No.</th>
                                                            <th>Course Title</th>

                                                        </tr>
                                                        <tr>
                                                            <td>CSE 111</td>
                                                            <td>Computer Fundamentals</td>

                                                        </tr>
                                                        <tr>
                                                            <td>HUM 111</td>
                                                            <td>Bangladesh Studies</td>

                                                        </tr>
                                                        <tr>
                                                            <td>HUM 112</td>
                                                            <td>Fundamentals of Management</td>

                                                        </tr>
                                                        <tr>
                                                            <td>HUM 113</td>
                                                            <td>World Civilization</td>

                                                        </tr>

                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading text-center">
                                                <h3>2nd Semester</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-hover table-striped">
                                                        <tr>
                                                            <th>Code No.</th>
                                                            <th>Course Title</th>

                                                        </tr>
                                                        <tr>
                                                            <td>EETE 121</td>
                                                            <td>Electrical Circuits-I</td>

                                                        </tr>
                                                        <tr>
                                                            <td>EETE 122</td>
                                                            <td>Electrical Circuits-I Laboratory</td>

                                                        </tr>
                                                        <tr>
                                                            <td>PHY 121</td>
                                                            <td>Physics-I(Waves & Oscillation, Optics, Heat & Thermodyanamics)</td>

                                                        </tr>
                                                        <tr>
                                                            <td>MAT-121</td>
                                                            <td>Math-I(Linear Algebra & Co-ordinate Geomentry)</td>

                                                        </tr>

                                                        <tr>
                                                            <td>HUM 121</td>
                                                            <td>Basic English</td>
                                                        </tr>



                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading text-center">
                                                <h3>3rd Semester</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-hover table-striped"> 
                                                        <tr>
                                                            <th>Code No.</th>
                                                            <th>Course Title</th>

                                                        </tr>
                                                        <tr>
                                                            <td>EETE 131</td>
                                                            <td>Electrical Circuits</td>

                                                        </tr>
                                                        <tr>
                                                            <td>EETE 132</td>
                                                            <td>Electrical Circuits-II Laboratory</td>

                                                        </tr>
                                                        <tr>
                                                            <td>PHY 131</td>
                                                            <td>Physics-II(Electricity, Magnetism, Modern Physics, Mechanics)</td>

                                                        </tr>

                                                        <tr>
                                                            <td>PHY-132</td>
                                                            <td>Physics-II Laboratory</td>
                                                        </tr>

                                                        <tr>
                                                            <td>MAT-131</td>
                                                            <td>Math-II(Differential & Integral Calculus)</td>
                                                        </tr>

                                                        <tr>
                                                            <td>HUM-131</td>
                                                            <td>Communative English</td>
                                                        </tr>



                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading text-center">
                                                <h3>4th Semester</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-hover table-striped">
                                                        <tr>
                                                            <th>Code No.</th>
                                                            <th>Course Title</th>

                                                        </tr>
                                                        <tr>
                                                            <td>EETE-211</td>
                                                            <td>Electronics-I</td>

                                                        </tr>
                                                        <tr>
                                                            <td>EETE-212</td>
                                                            <td>Electronics-I Laboratory</td>

                                                        </tr>
                                                        <tr>
                                                            <td>EETE-213</td>
                                                            <td>Electrical Machines-I</td>

                                                        </tr>
                                                        <tr>
                                                            <td>EETE-214</td>
                                                            <td>Electrical Machines-I Laboratroy</td>

                                                        </tr>

                                                        <tr>
                                                            <td>EETE-215</td>
                                                            <td>Engineering Drawing</td>

                                                        </tr>
                                                        <tr>
                                                            <td>MAT-211</td>
                                                            <td>Math-III(Statistics & Probability)</td>

                                                        </tr>


                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading text-center">
                                                <h3>5th Semester</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped table-hover">
                                                        <tr>
                                                            <th>Code No.</th>
                                                            <th>Course Title</th>

                                                        </tr>
                                                        <tr>
                                                            <td>EETE-221</td>
                                                            <td>Electrical Machines-II</td>

                                                        </tr>
                                                        <tr>
                                                            <td>EETE-222</td>
                                                            <td>Electrical Machines-II Laboratory</td>

                                                        </tr>
                                                        <tr>
                                                            <td>EETE-223</td>
                                                            <td>Electronics-II</td>

                                                        </tr>
                                                        <tr>
                                                            <td>EETE-224</td>
                                                            <td>Electronics-II Laboratory</td>

                                                        </tr>
                                                        <tr>
                                                            <td>MAT-221</td>
                                                            <td>MAT-IV(Differential Equations & Vector Analysis)</td>

                                                        </tr>
                                                        <tr>
                                                            <td>HUM-221</td>
                                                            <td>Finacial & Management Accounting</td>

                                                        </tr>



                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading text-center">
                                                <h3>6th Semester</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-hover table-striped">
                                                        <tr>
                                                            <th>Code No.</th>
                                                            <th>Course Title</th>

                                                        </tr>
                                                        <tr>
                                                            <td>EETE-231</td>
                                                            <td>Digital Electronics</td>

                                                        </tr>
                                                        <tr>
                                                            <td>EETE-232</td>
                                                            <td>Digital Electronics Laboratory</td>

                                                        </tr>
                                                        <tr>
                                                            <td>EETE-233</td>
                                                            <td>Semiconductor Materials & Device</td>

                                                        </tr>
                                                        <tr>
                                                            <td>CSE-231</td>
                                                            <td>Structured Programming</td>

                                                        </tr>
                                                        <tr>
                                                            <td>CSE-232</td>
                                                            <td>Structured Programming Laboratory</td>

                                                        </tr>
                                                        <tr>
                                                            <td>MAT-231</td>
                                                            <td>Math-IV(Complex Variables & Transforms)</td>

                                                        </tr>


                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading text-center">
                                                <h3>7th Semester</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped table-hover">
                                                        <tr>
                                                            <th>Code No.</th>
                                                            <th>Course Title</th>

                                                        </tr>

                                                        <tr>
                                                            <td>EETE-311</td>
                                                            <td>Microprocessors & Micro Controllers</td>

                                                        </tr>
                                                        <tr>
                                                            <td>EETE-312</td>
                                                            <td>Microprocessors & Micro Controllers Laboratory</td>

                                                        </tr>
                                                        <tr>
                                                            <td>EETE-313</td>
                                                            <td>Signals & Systems</td>

                                                        </tr>
                                                        <tr>
                                                            <td>CHM-311</td>
                                                            <td>Chemistry</td>

                                                        </tr>
                                                        <tr>
                                                            <td>CHM-312</td>
                                                            <td>Chemistry laboratory</td>

                                                        </tr>

                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading text-center">
                                                <h3>8th Semester</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped table-hover">
                                                        <tr>
                                                            <th>Code No.</th>
                                                            <th>Course Title</th>

                                                        </tr>
                                                        <tr>
                                                            <td>EETE-321</td>
                                                            <td>Digital Signal Processing</td>

                                                        </tr>
                                                        <tr>
                                                            <td>EETE-322</td>
                                                            <td>Digital Signal Processing Laboraory</td>

                                                        </tr>
                                                        <tr>
                                                            <td>EETE-323</td>
                                                            <td>Fundamental of Communication Engineering</td>

                                                        </tr>

                                                        <tr>
                                                            <td>EETE-324</td>
                                                            <td>Fundamental of Communication Engineering Laboratory</td>
                                                        </tr>

                                                        <tr>
                                                            <td>EETE-325</td>
                                                            <td>Electromagnetic Fields and Waves</td>
                                                        </tr>

                                                        <tr>
                                                            <td>EETE-327</td>
                                                            <td>Transmission and Distributions of Electric Power</td>
                                                        </tr>

                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading text-center">
                                                <h3>9th Semester</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped table-hover">
                                                        <tr>
                                                            <th>Code No.</th>
                                                            <th>Course Title</th>

                                                        </tr>

                                                        <tr>
                                                            <td>EETE-331</td>
                                                            <td>Power Eletronics</td>

                                                        </tr>

                                                        <tr>
                                                            <td>EETE-332</td>
                                                            <td>Power Electronics Laboratory</td>

                                                        </tr>

                                                        <tr>
                                                            <td>EETE-333</td>
                                                            <td>Instrumentation and Measurement</td>

                                                        </tr>

                                                        <tr>
                                                            <td>EETE-334</td>
                                                            <td>Instrumentation and Measurement Laboratory</td>
                                                        </tr>

                                                        <tr>
                                                            <td>EETE-335</td>
                                                            <td>Control Systems</td>
                                                        </tr>

                                                        <tr>
                                                            <td>EETE-336</td>
                                                            <td>Control Systems Laoratory</td>
                                                        </tr>

                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading text-center"> 
                                                <h3>10th Semester</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped table-hover">
                                                        <tr>
                                                            <th>Code No.</th>
                                                            <th>Course Title</th>

                                                        </tr>
                                                        <tr>
                                                            <td>EETE-411</td>
                                                            <td>Microwave & Antenna Engineering</td>

                                                        </tr>
                                                        <tr>
                                                            <td>EETE-412</td>
                                                            <td>Microwave and Antenna Engineering Laboratory</td>

                                                        </tr>
                                                        <tr>
                                                            <td>EETE-413</td>
                                                            <td>Renewable Energy Technology</td>

                                                        </tr>
                                                        <tr>
                                                            <td>EETE-415</td>
                                                            <td> Power System Analysis</td>
                                                        </tr>

                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading text-center">
                                                <h3>11th Semester</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped table-hover">
                                                        <tr>
                                                            <th>Code No.</th>
                                                            <th>Course Title</th>

                                                        </tr>
                                                        <tr>
                                                            <td>EETE-421</td>
                                                            <td>Power Stations</td>

                                                        </tr>
                                                        <tr>
                                                            <td>EEE/ETE</td>
                                                            <td>Elective-I</td>

                                                        </tr>
                                                        <tr>
                                                            <td>EEE/ETE</td>
                                                            <td>Elective-II</td>

                                                        </tr>
                                                        <tr>
                                                            <td>EEE/ETE</td>
                                                            <td>Eletive-II Laboratory</td>
                                                        </tr>

                                                        <tr>
                                                            <td>EETE-433</td>
                                                            <td>Projects and Thesis</td>
                                                        </tr>

                                                    </table>

                                                </div> 
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading text-center">
                                                <h3>12th Semester(Internship/Project $ Viva-Voce)</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped table-hover">				
                                                        <tr>
                                                            <th>Code No.</th>
                                                            <th>Course Title</th>
                                                        </tr>

                                                        <tr>
                                                            <td>EEE/ETE</td>
                                                            <td>Elective-III</td>
                                                        </tr>

                                                        <tr>
                                                            <td>EEE/ETE</td>
                                                            <td>Elective-III Laboratory</td>
                                                        </tr>

                                                        <tr>
                                                            <td>EETE-433</td>
                                                            <td>Project and Thesis</td>
                                                        </tr>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>

                                        <!-- modal body div -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success close">Previous Page</button>
                                        <button type="button" class="btn btn-primary close" data-dismiss="modal">X</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- modal eete credit end-->
                        <!-- modal civil credit start-->
                        <div class="modal fade" id="civil_credit">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary close" data-dismiss="modal">X</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- modal civil credit end-->


                    </div>
                </div>




                <div class="col-lg-offset-2" style="height: auto;" >

                </div>
            </div>
        </div>

        <div class="row">
            <div class="container-fluid">
                <footer class="footer-distributed">

                    <div class="footer-right">

                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-github"></i></a>

                    </div>

                    <div class="footer-left">

                        <p class="footer-links">
                            <a href="#">Home</a>
                            |
                            <a href="#">Blog</a>
                            |
                            <a href="#">Faculty members</a>
                            |
                            <a href="#">Faq</a>
                            |
                            <a href="#">Contact</a>
                        </p>

                        <p class="text-center" style="color: blue">DIU &copy; 2015</p>
                    </div>

                </footer>
            </div>
        </div>


        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js "></script>
        <script>
            $(document).ready(function () {
                $('#example').DataTable();
            });
        </script>

    </body>
</html>
<?php } else
{
     header('location: login.php');
}