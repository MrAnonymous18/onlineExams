<?php
include('../../Database/DbConnection.php');
session_start();
$value="";
$id="";
if(isset($_GET)){

    $value = $_GET['val'];
    $id=$_GET['id'];

    if($value=="block"){
        $query = mysqli_query($db,"update login set status = 'Blocked' where id='$id'");
        $_SESSION['flash'] = "User blocked";
        header("Location:../users_list.php");
    }
    elseif ($value=="active"){
        $query = mysqli_query($db,"update login set status = 'Active' where id='$id'");
        $_SESSION['flash'] = "User unblocked";
        header("Location:../users_list.php");
    }
    else{

    }


}

?>