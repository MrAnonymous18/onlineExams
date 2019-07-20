<?php
include('../Database/DbConnection.php');
session_start();

if(isset($_SESSION['user'])){
    $data = $_SESSION['user'];
}

if(isset($_POST['upload'])){

    $file_name = $_FILES["avatar"]["name"];
    $file_tmp_name = $_FILES["avatar"]["tmp_name"];

    $ext = end(explode('.',$file_name));

    if($ext == "png" || $ext == "jpg" || $ext == "jpeg" || $ext == "") {

        $new_file_name = "IMG_" . $data[0] . "." . $ext;
        $upload_path = "../resources/images/user_avatar/" . $new_file_name;
        move_uploaded_file($file_tmp_name, $upload_path);

        $query = mysqli_query($db, "update users set avatar ='$new_file_name' where id='$data[0]'");
        //$_SESSION['flash'] = "Image updated successfully";
        if($data[3]=="Admin"){
            header("Location:../admin/index.php");
        }
        elseif($data[3]=="User"){
            header("Location:../user/index.php");
        }


    }
    else{

    }
}
?>