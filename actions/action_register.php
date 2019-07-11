<?php
    include ('../Database/DbConnection.php');
    session_start();
    $sql = mysqli_query($db,"select id from login ORDER BY id desc ");
    $fetch_id = mysqli_fetch_array($sql);
    $id = $fetch_id[0]+1;
    $status = 'Active';
    $role = 'User';
    $cd = date('Y-m-d');

    $chk_email = mysqli_query($db, "select * from login where email='$_POST[email]'");
    if(mysqli_num_rows($chk_email)>0){
        $_SESSION['flash'] = "Email already exist";
    }
    else{
        $chk_contact = mysqli_query($db,"select * from users where contact='$_POST[contact]'");
        if(mysqli_num_rows($chk_contact)>0){
            $_SESSION['flash'] = "Contact no. already exist";
        }
        else{
            $insert_login = mysqli_query($db,"insert into login (id,email,password,role,status) values('$id','$_POST[email]',
                                                    '$_POST[password]','$role','$status')");

            $insert_users = mysqli_query($db,"insert into users (id,name,contact,date_of_birth,gender,address,qualification,created_at)
                                                    values('$id','$_POST[name]','$_POST[contact]','$_POST[dob]','$_POST[gender]','$_POST[address]',
                                                    '$_POST[qualification]','$cd')");

            $_SESSION['flash'] = "User registered successfully";

            header('Location:../login.php');
        }
    }



?>