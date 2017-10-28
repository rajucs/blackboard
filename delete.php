<?php
require './lib/dbconfig.php';
$id=$_GET['id'];
                        $sql = "DELETE FROM tbl_uploads  WHERE id=$id";
                      	if(mysqli_query($conn, $sql)){
                      		header('location:index.php');
                      	}
                        