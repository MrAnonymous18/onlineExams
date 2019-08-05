<?php
include('../Database/DbConnection.php');
session_start();
if($_SESSION['user'][3]!="Admin"){
    $_SESSION['error'] = "You are not authorized to view this page";
    header("Location:../error.php");
}
$name = "";

if(isset($_SESSION['user'])){
    $name = $_SESSION['user'][6];
} 
?>

<!Doctype HTML>
<html>
<head>
    <title>Online Examination</title>
    <link rel="stylesheet" href="../resources/css/bootstrap.min.css">
<!--    <link rel="stylesheet" href="resources/css/bootstrap_3.min.css">-->
    <link rel="stylesheet" href="../resources/css/style.css">
<!--    <link rel="stylesheet" href="../resources/css/pagination.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.8/raphael.min.js">
</head>
<body>
<div class="row">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a href="#" class="navbar-brand"><b>?</b>repared</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="#" class="nav-item nav-link active">Home</a>
                <a href="addExam.php" class="nav-item nav-link">Add Exams</a>
                <a href="addQuestion.php" class="nav-item nav-link">Add Question</a>
                <a href="view_questions.php" class="nav-item nav-link">View Question</a>
                <a href="addCategory.php" class="nav-item nav-link">Add Category</a>
                <a href="users_list.php" class="nav-item nav-link">User List</a>
                <a href="contact_queries_list.php" class="nav-item nav-link">Contact Queries</a>
            </div>
            <div class="navbar-nav mr-2">
                <?php
                if($name=="") { ?>
                    <a href="../login.php" class="nav-item nav-link">Login</a>
                    <a href="#" class="nav-item nav-link">Register</a>

                <?php
                }
                else{
                ?>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo $name ?></a>
                    <div class="dropdown-menu" style="left: -30px">
                        <a href="#" class="dropdown-item">My Profile</a>
                        <a href="view_stats.php" class="dropdown-item">View Stats</a>
                        <a href="change_password.php" class="dropdown-item">Change Password</a>
                        <a href="edit_details.php" class="dropdown-item">Edit details</a>
                        <a href="../logout.php" class="dropdown-item">Logout</a>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </nav>
</div>
<div class="container-fluid" style="margin-top: 60px;">