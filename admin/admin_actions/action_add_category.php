<?php
include('../../Database/DbConnection.php');
session_start();

if(isset($_POST['addCategory'])){

    $query = mysqli_query($db,"insert into categories (name) values('$_POST[name]')");
    $_SESSION['flash'] ="Category added successfully";
    header("Location:../addCategory.php");
}


?>