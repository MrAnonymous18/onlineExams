
if($_SESSION['user'][3]!="Admin"){
    $_SESSION['error'] = "You are not authorized to view this page";
    header("Location:../error.php");
}