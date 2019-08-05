<?php
include('header.php');
$receiver = "";
if(isset($_GET['receiver'])){
    $receiver = $_GET['receiver'];
}
?>
<div class="container">
    <div class="row" style="margin-top: 100px;">
        <div class="col-md-6 offset-3">
            <h3 style="margin-bottom: 20px">Reply Contact Query</h3>
            <div class="shadow_box br-10">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="receiver">Receiver</label>
                        <input type="text" name="receiver" id="receiver" class="form-control" value="<?php echo $receiver ?>">
                    </div>
                    <div class="form-group">
                        <label for="msg">Message</label>
                        <textarea name="msg" id="msg" class="form-control" style="resize: none" rows="6"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" name="reply">Reply</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php');?>
