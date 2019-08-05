<?php include('header.php');
if($_GET['sno']){

    $sno = $_GET['sno'];
    $query = mysqli_query($db,"Select * from contact_queries where id='$sno'");
    $result = mysqli_fetch_array($query);
}
?>
<div class="container">
    <div class="row" style="margin-top: 100px;">
        <div class="col-md-8 offset-2">
            <div class="shadow_box">
                <h3><?php echo $result[3]?></h3>
                <span style="color:grey">
                    By <b><?php echo $result[1] ?></b>
                    (<?php echo $result[2] ?>)<br />
                    Date : <b><?php echo $result[5] ?></b>
                </span>
                <hr>
                <div style="padding:20px;text-align: justify-all;">
                    <?php echo $result[4]?>
                </div>
                <hr>
                <a href="reply.php?receiver=<?php echo $result[2] ?>">Reply</a>
                <a href="admin_actions/delete_contact_queries.php?sno=<?php echo $result[0] ?>" style="margin-left: 25px;">Delete</a>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>

