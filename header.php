<?php
include('Database/DbConnection.php');
session_start();
?>

<!Doctype HTML>
<html>
<head>
    <title>Online Examination</title>
    <link rel="stylesheet" href="resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js">
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
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Our Exams</a>
                    <div class="dropdown-menu">
                        <a href="ssc-cgl.php" class="dropdown-item">SSC CGL</a>
                        <a href="ssc-chsl.php" class="dropdown-item">SSC CHSL</a>
                        <a href="ibps-po.php" class="dropdown-item">IBPS Po</a>
                        <a href="bsf.php" class="dropdown-item">BSF</a>
                        <a href="all-exams-list.php" class="dropdown-item">see more...</a>

                    </div>
                </div>

            </div>
            <div class="navbar-nav mr-2">
                <a href="login.php" class="nav-item nav-link">Login</a>
                <a href="register.php" class="nav-item nav-link">Register</a>
            </div>
        </div>
    </nav>
</div>
<div class="container-fluid" style="margin-top: 50px;">