<?php
session_start();
include('../../Database/DbConnection.php');
$status = 'Enabled';
$cd = date('Y-m-d');

if(isset($_POST['Add'])){

    $file_name = $_FILES["avatar"]["name"];
    $file_tmp_name = $_FILES["avatar"]["tmp_name"];
    $num = 0;

    $ext = end(explode('.',$file_name));

    if($ext == "png" || $ext == "jpg" || $ext == "jpeg" || $ext == "") {

        $new_file_name = "IMG_" . $_POST['name'] . "_" . $num . "." . $ext;
        $upload_path = "../exams/avatar/" . $new_file_name;
        move_uploaded_file($file_tmp_name, $upload_path);


        $query = mysqli_query($db,"insert into exams(Name,Description,Avatar,Status,created_at) 
                values('$_POST[name]','$_POST[description]','$new_file_name','$status','$cd')") or die('Error - : '.mysqli_error($db));
        $num = $num+1;

        $_SESSION['flash'] = "Exam Added successfully";

        header("Location:../addExam.php");
    }
    else{
        $_SESSION['flash'] = "File format not supported";
    }
}





?>