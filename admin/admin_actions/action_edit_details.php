<?php
include('../../Database/DbConnection.php');
session_start();
include ('admin_validate.php');

if(isset($_SESSION['user'])){
    $data = $_SESSION['user'];
}

if(isset($_POST['change_pass'])){

    if($data[2] == $_POST['old_password']){

        $query = mysqli_query($db,"update login set password='$_POST[new_password]' where id='$data[0]'");
        $_SESSION['flash'] = "Password updated successfully";
        session_destroy();
        header("Location:../../login.php");

    }
    else{
        $_SESSION['flash'] = "Old Password does not match";
    }


}


?>