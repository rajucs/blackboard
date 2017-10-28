<?php
session_start();
if (isset($_SESSION['login_std']) || isset($_SESSION['login_tch'])) {
    

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
                                <img class="img-round" style="max-width:50px;; height: 30px; margin-top: -7px;float: left"
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
                        <a class="btn btn-success btn-block" href="#">Fees</a>
                        <a class="btn btn-success btn-block" href="batchlist.php">Batch Group</a>
                        <!-- <a class="btn btn-success btn-block" href="notice.php">Notice Board</a> -->
                        <a class="btn btn-success btn-block" href="courses_credits.php">Courses & Credit Info</a>
                        <a class="btn btn-success btn-block" href="facultymem.php">Faculty Members</a>
                    </div>

                </div>
                <div class="col-lg-10" style="height: auto;background-color: #F2F9EA">
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
                                <h3>Tution Fees :</h3>
                                <table class="table table-bordered table-responsive table-hover table-stripe">
                                    <tr>
                                        <th style="background-color: purple;color: white" class="text-center">Programs</th>
                                        <th style="background-color: purple;color: white" class="text-center">Fees (TK)</th>
                                    </tr>
                                    <tr>
                                        <td>BBA (Day)</td>
                                        <td>3,81000</td>
                                    </tr>
                                    <tr>
                                        <td>BBA (Evening)</td>
                                        <td>3,01000</td>
                                    </tr>
                                    <tr>
                                        <td> MBA (1 Year )</td>
                                        <td>1,00000</td>
                                    </tr>
                                    <tr>
                                        <td>MBA (2 Year )</td>
                                        <td>1,20000</td>
                                    </tr>

                                </table>
                                <h4 class="text-center">Internship / Project Report / Research Monograph  fee will be fixed by the department.</h4>
                                <div class="panel  panel-default">
                                    <div class="panel-heading">
                                        <h4 class="text-center">Financial Assistance</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tr>
                                                    <td style="color: #06F">Waiver :</td>
                                                    <td>
                                                        <p>
                                                            Sibling and Spouse  <br>
                                                            Freedom Fighter      <br/>
                                                            Physically Disabled   <br/>
                                                            Indigenous                <br/>
                                                        </p>
                                                    </td>

                                                    <td>
                                                        <p>
                                                            : 10% of Tuition Fees.<br/>
                                                            : 10% of Tuition Fees.<br/>
                                                            : 10% of Tuition Fees.<br/>
                                                            : 10% of Tuition Fees. <br/>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="color: maroon">Result :</td>
                                                    <td>
                                                        <p>
                                                            GPA 5.00 (Both in SSC & HSC) <br/>
                                                            GPA 4.50 (Both in SSC & HSC) <br/>
                                                            GPA 4.00 (Both in SSC & HSC) <br/>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p>
                                                            : 50% of Tuition Fees. <br/>
                                                            : 25% of Tuition Fees. <br/>
                                                            : 10% of Tuition Fees.<br/>
                                                        </p>
                                                    </td>

                                                </tr>
                                                <hr/>
                                            </table>
                                        </div>
                                        <h5 style="color: green">Female Students :<small> <strong>15% of Tuition Fees.</strong></small></h5>
                                        <h3 style="color: red">N.B : </h3>
                                        <ul class="text-center">
                                            <li>Only one type of waiver will be given.</li>
                                            <li>Applicable only for 4 Years Honours Courses</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div id="LAW" class="tab-pane">
                                <h3>Tution Fees :</h3>
                                <table class="table table-bordered table-responsive table-hover table-stripe">
                                    <tr>
                                        <th style="background-color: purple;color: white" class="text-center">Programs</th>
                                        <th style="background-color: purple;color: white" class="text-center">Fees (TK)</th>
                                    </tr>
                                    <tr>
                                        <td>LL.B ( Hons. Day )</td>
                                        <td>3,50000</td>
                                    </tr>
                                    <tr>
                                        <td>LL.B ( Hons. Evening )</td>
                                        <td>2,80000</td>
                                    </tr>
                                    <tr>
                                        <td>LL.B ( Pass )</td>
                                        <td>90,000</td>
                                    </tr>
                                    <tr>
                                        <td>LL.M (1 Year )</td>
                                        <td>70,000</td>
                                    </tr>
                                    <tr>
                                        <td>LL.M (2 Year )</td>
                                        <td>85,000</td>
                                    </tr>
                                    <tr>
                                        <td>MHRL ( 2 Year )</td>
                                        <td>60,000</td>
                                    </tr>
                                </table>
                                <h4 class="text-center">Internship / Project Report / Research Monograph  fee will be fixed by the department.</h4>
                                <div class="panel  panel-default">
                                    <div class="panel-heading">
                                        <h4 class="text-center">Financial Assistance</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tr>
                                                    <td style="color: #06F">Waiver :</td>
                                                    <td>
                                                        <p>
                                                            Sibling and Spouse  <br>
                                                            Freedom Fighter      <br/>
                                                            Physically Disabled   <br/>
                                                            Indigenous                <br/>
                                                        </p>
                                                    </td>

                                                    <td>
                                                        <p>
                                                            : 10% of Tuition Fees.<br/>
                                                            : 10% of Tuition Fees.<br/>
                                                            : 10% of Tuition Fees.<br/>
                                                            : 10% of Tuition Fees. <br/>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="color: maroon">Result :</td>
                                                    <td>
                                                        <p>
                                                            GPA 5.00 (Both in SSC & HSC) <br/>
                                                            GPA 4.50 (Both in SSC & HSC) <br/>
                                                            GPA 4.00 (Both in SSC & HSC) <br/>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p>
                                                            : 50% of Tuition Fees. <br/>
                                                            : 25% of Tuition Fees. <br/>
                                                            : 10% of Tuition Fees.<br/>
                                                        </p>
                                                    </td>

                                                </tr>
                                                <hr/>
                                            </table>
                                        </div>
                                        <h5 style="color: green">Female Students :<small> <strong>15% of Tuition Fees.</strong></small></h5>
                                        <h3 style="color: red">N.B : </h3>
                                        <ul class="text-center">
                                            <li>Only one type of waiver will be given.</li>
                                            <li>Applicable only for 4 Years Honours Courses</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div id="CIVIL" class="tab-pane">
                                <h3>Tution Fees :</h3>
                                <table class="table table-bordered table-responsive table-hover table-stripe">
                                    <tr>
                                        <th style="background-color: purple;color: white" class="text-center">Programs</th>
                                        <th style="background-color: purple;color: white" class="text-center">Fees (TK)</th>
                                    </tr>
                                    <tr>
                                        <td>B,Sc. in CIVIL Eng. (Day)</td>
                                        <td>3,20000</td>
                                    </tr>
                                    <tr>
                                        <td>B.Sc. in CIVIL Eng. (Evening)</td>
                                        <td>2,50000</td>
                                    </tr>
                                </table>
                                <h4 class="text-center">Internship / Project Report / Research Monograph  fee will be fixed by the department.</h4>
                                <div class="panel  panel-default">
                                    <div class="panel-heading">
                                        <h4 class="text-center">Financial Assistance</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tr>
                                                    <td style="color: #06F">Waiver :</td>
                                                    <td>
                                                        <p>
                                                            Sibling and Spouse  <br>
                                                            Freedom Fighter      <br/>
                                                            Physically Disabled   <br/>
                                                            Indigenous                <br/>
                                                        </p>
                                                    </td>

                                                    <td>
                                                        <p>
                                                            : 10% of Tuition Fees.<br/>
                                                            : 10% of Tuition Fees.<br/>
                                                            : 10% of Tuition Fees.<br/>
                                                            : 10% of Tuition Fees. <br/>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="color: maroon">Result :</td>
                                                    <td>
                                                        <p>
                                                            GPA 5.00 (Both in SSC & HSC) <br/>
                                                            GPA 4.50 (Both in SSC & HSC) <br/>
                                                            GPA 4.00 (Both in SSC & HSC) <br/>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p>
                                                            : 50% of Tuition Fees. <br/>
                                                            : 25% of Tuition Fees. <br/>
                                                            : 10% of Tuition Fees.<br/>
                                                        </p>
                                                    </td>

                                                </tr>
                                                <hr/>
                                            </table>
                                        </div>
                                        <h5 style="color: green">Female Students :<small> <strong>15% of Tuition Fees.</strong></small></h5>
                                        <h3 style="color: red">N.B : </h3>
                                        <ul class="text-center">
                                            <li>Only one type of waiver will be given.</li>
                                            <li>Applicable only for 4 Years Honours Courses</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div id="CSE" class="tab-pane fade in active">
                                <h3>Tution Fees :</h3>
                                <table class="table table-bordered table-responsive table-hover table-stripe">
                                    <tr>
                                        <th style="background-color: purple;color: white" class="text-center">Programs</th>
                                        <th style="background-color: purple;color: white" class="text-center">Fees (TK)</th>
                                    </tr>
                                    <tr>
                                        <td>B,Sc. in CSE (Day)</td>
                                        <td>3,50000</td>
                                    </tr>
                                    <tr>
                                        <td>B.Sc. in CSE (Evening)</td>
                                        <td>2,70000</td>
                                    </tr>
                                    <tr>
                                        <td>M.Sc. in (Thesis)</td>
                                        <td>1,20000</td>
                                    </tr>
                                    <tr>
                                        <td>M.Sc. in CSE (Project)</td>
                                        <td>1,00000</td>
                                    </tr>
                                </table>
                                <h4 class="text-center">Internship / Project fee will be fixed by the department.</h4>
                                <div class="panel  panel-default">
                                    <div class="panel-heading">
                                        <h4 class="text-center">Financial Assistance</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tr>
                                                    <td style="color: #06F">Waiver :</td>
                                                    <td>
                                                        <p>
                                                            Sibling and Spouse  <br>
                                                            Freedom Fighter      <br/>
                                                            Physically Disabled   <br/>
                                                            Indigenous                <br/>
                                                        </p>
                                                    </td>

                                                    <td>
                                                        <p>
                                                            : 10% of Tuition Fees.<br/>
                                                            : 10% of Tuition Fees.<br/>
                                                            : 10% of Tuition Fees.<br/>
                                                            : 10% of Tuition Fees. <br/>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="color: maroon">Result :</td>
                                                    <td>
                                                        <p>
                                                            GPA 5.00 (Both in SSC & HSC) <br/>
                                                            GPA 4.50 (Both in SSC & HSC) <br/>
                                                            GPA 4.00 (Both in SSC & HSC) <br/>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p>
                                                            : 50% of Tuition Fees. <br/>
                                                            : 25% of Tuition Fees. <br/>
                                                            : 10% of Tuition Fees.<br/>
                                                        </p>
                                                    </td>

                                                </tr>
                                                <hr/>
                                            </table>
                                        </div>
                                        <h5 style="color: green">Female Students :<small> <strong>15% of Tuition Fees.</strong></small></h5>
                                        <h3 style="color: red">N.B : </h3>
                                        <ul class="text-center">
                                            <li>Only one type of waiver will be given.</li>
                                            <li>Applicable only for 4 Years Honours Courses</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div id="ENGLISH" class="tab-pane">
                                <h3>Tution Fees :</h3>
                                <table class="table table-bordered table-responsive table-hover table-stripe">
                                    <tr>
                                        <th style="background-color: purple;color: white" class="text-center">Programs</th>
                                        <th style="background-color: purple;color: white" class="text-center">Fees (TK)</th>
                                    </tr>
                                    <tr>
                                        <td>BA (hons.) in English </td>
                                        <td>2,00000</td>
                                    </tr>
                                    <tr>
                                        <td>MA in English(1 Year)</td>
                                        <td>2,70000</td>
                                    </tr>
                                    <tr>
                                        <td>MA in English (2.5 Year)</td>
                                        <td>70,000</td>
                                    </tr>
                                </table>
                                <h4 class="text-center">Internship / Project Report / Research Monograph fee will be fixed by the department.</h4>
                                <div class="panel  panel-default">
                                    <div class="panel-heading">
                                        <h4 class="text-center">Financial Assistance</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tr>
                                                    <td style="color: #06F">Waiver :</td>
                                                    <td>
                                                        <p>
                                                            Sibling and Spouse  <br>
                                                            Freedom Fighter      <br/>
                                                            Physically Disabled   <br/>
                                                            Indigenous                <br/>
                                                        </p>
                                                    </td>

                                                    <td>
                                                        <p>
                                                            : 10% of Tuition Fees.<br/>
                                                            : 10% of Tuition Fees.<br/>
                                                            : 10% of Tuition Fees.<br/>
                                                            : 10% of Tuition Fees. <br/>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="color: maroon">Result :</td>
                                                    <td>
                                                        <p>
                                                            GPA 5.00 (Both in SSC & HSC) <br/>
                                                            GPA 4.50 (Both in SSC & HSC) <br/>
                                                            GPA 4.00 (Both in SSC & HSC) <br/>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p>
                                                            : 50% of Tuition Fees. <br/>
                                                            : 25% of Tuition Fees. <br/>
                                                            : 10% of Tuition Fees.<br/>
                                                        </p>
                                                    </td>

                                                </tr>
                                                <hr/>
                                            </table>
                                        </div>
                                        <h5 style="color: green">Female Students :<small> <strong>15% of Tuition Fees.</strong></small></h5>
                                        <h3 style="color: red">N.B : </h3>
                                        <ul class="text-center">
                                            <li>Only one type of waiver will be given.</li>
                                            <li>Applicable only for 4 Years Honours Courses</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div id="EETE" class="tab-pane">
                                <h3>Tution Fees :</h3>
                                <table class="table table-bordered table-responsive table-hover table-stripe">
                                    <tr>
                                        <th style="background-color: purple;color: white" class="text-center">Programs</th>
                                        <th style="background-color: purple;color: white" class="text-center">Fees (TK)</th>
                                    </tr>
                                    <tr>
                                        <td>B,Sc. in EETE (Day)</td>
                                        <td>3,90000</td>
                                    </tr>
                                    <tr>
                                        <td>B.Sc. in EETE (Evening)</td>
                                        <td>2,50000</td>
                                    </tr>
                                </table>
                                <div class="panel  panel-default">
                                    <div class="panel-heading">
                                        <h4 class="text-center">Financial Assistance</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tr>
                                                    <td style="color: #06F">Waiver :</td>
                                                    <td>
                                                        <p>
                                                            Sibling and Spouse  <br>
                                                            Freedom Fighter      <br/>
                                                            Physically Disabled   <br/>
                                                            Indigenous                <br/>
                                                        </p>
                                                    </td>

                                                    <td>
                                                        <p>
                                                            : 10% of Tuition Fees.<br/>
                                                            : 10% of Tuition Fees.<br/>
                                                            : 10% of Tuition Fees.<br/>
                                                            : 10% of Tuition Fees. <br/>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="color: maroon">Result :</td>
                                                    <td>
                                                        <p>
                                                            GPA 5.00 (Both in SSC & HSC) <br/>
                                                            GPA 4.50 (Both in SSC & HSC) <br/>
                                                            GPA 4.00 (Both in SSC & HSC) <br/>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p>
                                                            : 50% of Tuition Fees. <br/>
                                                            : 25% of Tuition Fees. <br/>
                                                            : 10% of Tuition Fees.<br/>
                                                        </p>
                                                    </td>

                                                </tr>
                                                <hr/>
                                            </table>
                                        </div>
                                        <h5 style="color: green">Female Students :<small> <strong>15% of Tuition Fees.</strong></small></h5>
                                        <h3 style="color: red">N.B : </h3>
                                        <ul class="text-center">
                                            <li>Only one type of waiver will be given.</li>
                                            <li>Applicable only for 4 Years Honours Courses.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div id="SOCIOLOGY" class="tab-pane">
                                <h3>Tution Fees :</h3>
                                <table class="table table-bordered table-responsive table-hover table-stripe">
                                    <tr>
                                        <th style="background-color: purple;color: white" class="text-center">Programs</th>
                                        <th style="background-color: purple;color: white" class="text-center">Fees (TK)</th>
                                    </tr>
                                    <tr>
                                        <td>BSS  (Hons.) in SOCIOLOGY</td>
                                        <td>1,70000/-</td>
                                    </tr>
                                    <tr>
                                        <td>MSS  in SOCIOLOGY (1 Year)</td>
                                        <td>55000/-</td>
                                    </tr>
                                    <tr>
                                        <td>MSS  in SOCIOLOGY (2 Year)</td>
                                        <td>65000/-</td>
                                    </tr>
                                </table>
                                <h4 class="text-center">Internship / Project Report / Research Monograph  fee will be fixed by the department.</h4>
                                <div class="panel  panel-default">
                                    <div class="panel-heading">
                                        <h4 class="text-center">Financial Assistance</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tr>
                                                    <td style="color: #06F">Waiver :</td>
                                                    <td>
                                                        <p>
                                                            Sibling and Spouse  <br>
                                                            Freedom Fighter      <br/>
                                                            Physically Disabled   <br/>
                                                            Indigenous                <br/>
                                                        </p>
                                                    </td>

                                                    <td>
                                                        <p>
                                                            : 10% of Tuition Fees.<br/>
                                                            : 10% of Tuition Fees.<br/>
                                                            : 10% of Tuition Fees.<br/>
                                                            : 10% of Tuition Fees. <br/>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="color: maroon">Result :</td>
                                                    <td>
                                                        <p>
                                                            GPA 5.00 (Both in SSC & HSC) <br/>
                                                            GPA 4.50 (Both in SSC & HSC) <br/>
                                                            GPA 4.00 (Both in SSC & HSC) <br/>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p>
                                                            : 50% of Tuition Fees. <br/>
                                                            : 25% of Tuition Fees. <br/>
                                                            : 10% of Tuition Fees.<br/>
                                                        </p>
                                                    </td>

                                                </tr>
                                                <hr/>
                                            </table>
                                        </div>
                                        <h5 style="color: green">Female Students :<small> <strong>15% of Tuition Fees.</strong></small></h5>
                                        <h3 style="color: red">N.B : </h3>
                                        <ul class="text-center">
                                            <li>Only one type of waiver will be given.</li>
                                            <li>Applicable only for 4 Years Honours Courses</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>


                            <div id="PHARMACY" class="tab-pane">
                                <h3>Tution Fees :</h3>
                                <table class="table table-bordered table-responsive table-hover table-stripe">
                                    <tr>
                                        <th style="background-color: purple;color: white" class="text-center">Programs</th>
                                        <th style="background-color: purple;color: white" class="text-center">Fees (TK)</th>
                                    </tr>
                                    <tr>
                                        <td>B Pharma (Hons.)</td>
                                        <td>4,50000</td>
                                    </tr>
                                </table>
                                <h4 class="text-center">Internship / Project Report / Research Monograph  fee will be fixed by the department.</h4>
                                <div class="panel  panel-default">
                                    <div class="panel-heading">
                                        <h4 class="text-center">Financial Assistance</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tr>
                                                    <td style="color: #06F">Waiver :</td>
                                                    <td>
                                                        <p>
                                                            Sibling and Spouse  <br>
                                                            Freedom Fighter      <br/>
                                                            Physically Disabled   <br/>
                                                            Indigenous                <br/>
                                                        </p>
                                                    </td>

                                                    <td>
                                                        <p>
                                                            : 10% of Tuition Fees.<br/>
                                                            : 10% of Tuition Fees.<br/>
                                                            : 10% of Tuition Fees.<br/>
                                                            : 10% of Tuition Fees. <br/>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="color: maroon">Result :</td>
                                                    <td>
                                                        <p>
                                                            GPA 5.00 (Both in SSC & HSC) <br/>
                                                            GPA 4.50 (Both in SSC & HSC) <br/>
                                                            GPA 4.00 (Both in SSC & HSC) <br/>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p>
                                                            : 50% of Tuition Fees. <br/>
                                                            : 25% of Tuition Fees. <br/>
                                                            : 10% of Tuition Fees.<br/>
                                                        </p>
                                                    </td>

                                                </tr>
                                                <hr/>
                                            </table>
                                        </div>
                                        <h5 style="color: green">Female Students :<small> <strong>15% of Tuition Fees.</strong></small></h5>
                                        <h3 style="color: red">N.B : </h3>
                                        <ul class="text-center">
                                            <li>Only one type of waiver will be given.</li>
                                            <li>Applicable only for 4 Years Honours Courses</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>

                </div><!-- End of main content div -->

            </div>
        </div>
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
                            <a href="http://www.diu.ac/" target="_blank">WebSite</a>
                        </p>

                        <p align="center" style="color: blue">DIU &copy; 2015</p>
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
<?php }
else{
     header('location: login.php');
}