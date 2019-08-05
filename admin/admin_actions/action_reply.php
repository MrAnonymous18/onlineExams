<?php
include('../../Database/DbConnection.php');
session_start();
if($_SESSION['user'][3]!="Admin"){
    $_SESSION['error'] = "You are not authorized to view this page";
    header("Location:../error.php");
}

if(isset($_POST['reply'])){

}

?>