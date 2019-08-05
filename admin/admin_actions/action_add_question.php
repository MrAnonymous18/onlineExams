<?php
include('../../Database/DbConnection.php');
session_start();
include ('admin_validate.php');

$cd = date('Y-m-d');

    if(isset($_POST['addQuestion'])){
        $query = mysqli_query($db,"insert into questions (type,question,option_a,option_b,option_c,option_d,answer,created_at) 
                                    values('$_POST[type]','$_POST[question]','$_POST[a]','$_POST[b]','$_POST[c]','$_POST[d]','$_POST[answer]','$cd')")
                                    or die("Error:- ".mysqli_error($db));

        $_SESSION['flash'] = "Question added successfully";

        header("Location:../addQuestion.php");
    }

    if(isset($_POST['updateQuestion'])){
        $query = mysqli_query($db,"update questions set type='$_POST[type]', question='$_POST[question]',
                                        option_a='$_POST[a]', option_b='$_POST[b]', option_c='$_POST[c]', option_d='$_POST[d]',
                                        answer='$_POST[answer]' where id='$_POST[id]'");

        $_SESSION['flash'] = "Question update successfully";

        header("Location:../view_questions.php");
    }
?>