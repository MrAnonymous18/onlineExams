<?php
include('Database/DbConnection.php');
session_start();
//if($_SESSION['role']!="User"){
//    $_SESSION['error'] = "You are not authorized to view this page";
//    header("Location:error.php");
//}
$name="";

if(isset($_SESSION['name'])){
$name = $_SESSION['name'];
}
?>
<!Doctype HTML>
<html>
<head>
    <title>Online Examination</title>
    <link rel="stylesheet" href="resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/css/style.css">
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
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="contact_us.php" class="nav-item nav-link">Contact Us</a>
<!--                <div class="nav-item dropdown">-->
<!--                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Messages</a>-->
<!--                    <div class="dropdown-menu">-->
<!--                        <a href="#" class="dropdown-item">Inbox</a>-->
<!--                        <a href="#" class="dropdown-item">Sent</a>-->
<!--                        <a href="#" class="dropdown-item">Drafts</a>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
            <div class="navbar-nav mr-2">
                <div class="navbar-nav mr-2">
                    <?php
                    if($name=="") { ?>
                        <a href="login.php" class="nav-item nav-link">Login</a>
                        <a href="register.php" class="nav-item nav-link">Register</a>

                    <?php
                    }
                    else{
                        ?>
                        <a href="" class="nav-item nav-link"><?php echo $name ?></a>
                        <a href="logout.php" class="nav-item nav-link">Logout</a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </nav>
</div>
<div class="container-fluid" style="margin-top: 60px;">