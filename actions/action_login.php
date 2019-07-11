<?php
    include('../Database/DbConnection.php');
    session_start();

    $login_query = mysqli_query($db,"select * from login where email='$_POST[username]'");
    if(mysqli_num_rows($login_query)<=0){
        $_SESSION['flash'] = "Email not registered";
    }
    else{
        $chk_password = mysqli_fetch_array($login_query);
        if($chk_password[2] == $_POST['password']){
            $user_query = mysqli_query($db,"SELECT * FROM login l, users u WHERE l.id =u.id AND l.id='$chk_password[0]' and l.status='Active'");
            $fetch_user = mysqli_fetch_array($user_query);
            if($chk_password[3] == "Admin"){

                $_SESSION['user'] = $fetch_user;
                header("Location:../admin/index.php");

            }
            elseif ($chk_password[3] == "User"){
                $_SESSION['user'] = $fetch_user;
                header("Location:../index.php");
            }
            else{
                $_SESSION['flash'] = "You are not authorized";
                header("Location:../error.php");
            }


        }
        else{
            $_SESSION['flash'] = "Username or password not matched";
        }
    }

?>