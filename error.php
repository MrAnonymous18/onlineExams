<?php
    session_start();
    $error = "";
    if(isset($_SESSION['error'])){
        $error = $_SESSION['error'];
    }

?>
    <h3><?php echo $error ?></h3>
