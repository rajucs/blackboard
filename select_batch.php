<?php
require './lib/dbconfig.php';
$dept=$_POST['id'];
$prgm=$_POST['id2'];
$sql="SELECT std_batch  FROM tbl_batch WHERE std_dept='$dept' AND std_prgm='$prgm' ";

$dept=  mysqli_query($conn, $sql);
$output=' ';
$output.= '<option value="">Select  Batch</option>';
while($row=  mysqli_fetch_assoc($dept)){
    
     
            $output.='<option value="' . $row['std_batch'] . '">' . $row['std_batch'] . '</option>';
        
        
}
echo $output;