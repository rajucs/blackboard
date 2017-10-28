<?php
require './lib/dbconfig.php';
$prgm=$_POST['id'];
$sql="SELECT DISTINCT(std_dept)  FROM tbl_batch WHERE std_prgm='$prgm' ";

$dept=  mysqli_query($conn, $sql);
$output=' ';
$output.= '<option value="">Select  dept</option>';
while($row=  mysqli_fetch_assoc($dept)){
    
     
            $output.='<option value="' . $row['std_dept'] . '">' . $row['std_dept'] . '</option>';
        
        
}
echo $output;