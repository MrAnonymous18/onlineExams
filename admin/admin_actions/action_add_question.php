<?php
include('../../Database/DbConnection.php');
session_start();
$cd = date('Y-m-d');

    if(isset($_POST['addQuestion'])){
        $query = mysqli_query($db,"insert into questions (type,question,option_a,option_b,option_c,option_d,answer,created_at) 
                                    values('$_POST[type]','$_POST[question]','$_POST[a]','$_POST[b]','$_POST[c]','$_POST[d]','$_POST[answer]','$cd')")
                                    or die("Error:- ".mysqli_error($db));

        $_SESSION['flash'] = "Question added successfully";

        header("Location:../addQuestion.php");
    }
?>