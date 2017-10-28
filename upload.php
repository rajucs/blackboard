<?php
  session_start();
include './lib/dbconfig.php';
if (isset($_POST['btn-upload'])) {

    $file = rand(1000, 100000) . "-" . $_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $folder = "uploads/";

    // new file size in KB
    $new_size = $file_size / 1024;
    // new file size in KB
    // make file name in lower case
    $new_file_name = strtolower($file);
    // make file name in lower case

    $final_file = str_replace(' ', '-', $new_file_name);
     if (!move_uploaded_file($file_loc, $folder . $final_file)) {
         $file_size = ' ';
    $file_type =' ';
    $folder = "uploads/";

    // new file size in KB
    $new_size = ' ';
    // new file size in KB
    // make file name in lower case
    $final_file = ' ';
    // make file name in lower case
     }

    $prgm=$_POST['program'];
    $dept=$_POST['depart'];
    $batch=$_POST['batch'];
    $shift=$_POST['shift'];

     $sql="SELECT * FROM tbl_batch WHERE std_prgm='$prgm' AND std_dept='$dept' AND std_batch='$batch' AND std_shift='$shift'";
    $batch_id=  mysqli_query($conn,$sql);
   $batch_id=  mysqli_fetch_assoc($batch_id);
    $batch_id=$batch_id['id'];
    $text_link=$_POST['text'];
    if(!isset($text_link)){
        $text_link=' ';
    }

    $tch_id=$_SESSION['login_tch'];
    

   
       $sql = "INSERT INTO tbl_uploads(tch_id,batch_id,file,text,type,size) VALUES('$tch_id','$batch_id','$final_file','$text_link','$file_type','$new_size')";
        if(mysqli_query($conn, $sql)){
        ?>
        <script>
            alert('successfully uploaded');
            window.location.href = 'index.php';
        </script>


    } else {
    ?>

        <script>
            alert('error while uploading file');
            window.location.href = 'index.php';
        </script>
        <?php

    }
}


