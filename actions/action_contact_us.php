<?php
    include ('../Database/DbConnection.php');
    session_start();
    $created_at = date("Y-m-d H:i:s");

    if(isset($_POST['send'])){

        $contact_query = mysqli_query($db,"insert into contact_queries (name,email,subject,message,created_at) 
                                                values('$_POST[name]','$_POST[email]','$_POST[subject]','$_POST[msg]','$created_at')")
                                                or die("Error :- ".mysqli_error($db));

        $_SESSION['flash'] = "Query submitted successfully";

        header("Location:../contact_us.php");

    }
?>