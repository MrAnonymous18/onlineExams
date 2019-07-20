<?php include('header.php');

    $sno = "";
    if(isset($_GET)){
        $sno = $_GET['sno'];
    }

    $query = mysqli_query($db,"SELECT * FROM login l, users u where l.id=u.id and l.id='$sno'");
    $rs = mysqli_fetch_array($query);
?>

<div class="container">
    <div class="row" style="margin-top:170px;border: 1px solid grey;padding:5px;">
        <div class="col-md-4" style="border-right: 1px solid lightgrey">
            <img src="../resources/images/user_avatar/<?php echo $rs[12] ?>" width="100%" height="250vh" style="margin-bottom: 10px;">

            <hr />
            <h3><?php echo $rs[6]?></h3>
        </div>
        <div class="col-md-8" style="padding-top: 20px;">
            <div class="row" style="margin-bottom:10px">
                <div class="col-md-4"><h5>Email</h5></div>
                <div class="col-md-8"><?php echo $rs[1]?></div>
            </div>
            <div class="row" style="margin-bottom:10px">
                <div class="col-md-4"><h5>Contact</h5></div>
                <div class="col-md-8"><?php echo $rs[7]?></div>
            </div>
            <div class="row" style="margin-bottom:10px">
                <div class="col-md-4"><h5>Date of birth</h5></div>
                <div class="col-md-8"><?php echo $rs[8]?></div>
            </div>
            <div class="row" style="margin-bottom:10px">
                <div class="col-md-4"><h5>Gender</h5></div>
                <div class="col-md-8"><?php echo $rs[9]?></div>
            </div>
            <div class="row" style="margin-bottom:10px">
                <div class="col-md-4"><h5>Qualification</h5></div>
                <div class="col-md-8"><?php echo $rs[11]?></div>
            </div>
            <div class="row" style="margin-bottom:10px">
                <div class="col-md-4"><h5>Address</h5></div>
                <div class="col-md-8"><?php echo $rs[10]?></div>
            </div>
            <div class="row" style="margin-bottom:10px">
                <div class="col-md-6">
                    <?php
                    if($rs[4]=="Active"){
                    ?>
                    <a href="admin_actions/change_user_status.php?val=block&id=<?php echo $rs[0] ?>">
                        <button class="btn btn-block btn-danger">Block</button>
                    </a>
                    <?php
                    }
                    else{
                     ?>
                     <a href="admin_actions/change_user_status.php?val=active&id=<?php echo $rs[0] ?>">
                         <button class="btn btn-block btn-success">Active</button>
                     </a>
                    <?php
                    }
                    ?>

                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php');?>
