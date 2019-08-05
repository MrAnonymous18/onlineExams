<?php
include('../../Database/DbConnection.php');
session_start();


$sno ="";
if($_GET){
    if($_SESSION['user'][3]!="Admin"){
        $_SESSION['error'] = "Aha! Caught you";
        header("Location:../../error.php");
    }
    else{
        $sno = $_GET['sno'];
        $query = mysqli_query($db,"delete from contact_queries where id='$sno'");
        header("Location:../contact_queries_list.php");
    }

}




?>