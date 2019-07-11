<?php
include('templates/header.php');
?>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3">
            <div class="card" style="margin-top: 50px;box-shadow:4px 2px 3px 3px lightgrey;">
                <div class="card-header black">
                    <h4>Contact Us</h4>
                </div>
                <div class="card-body">
                    <form action="actions/action_contact_us.php" method="post">
                        <?php
                        if(isset($_SESSION['flash'])){
                            ?>
                            <div class="alert-info" style="padding:5px 10px">
                                <?php
                                echo $_SESSION['flash'];
                                unset($_SESSION['flash']);
                                ?>
                            </div>
                            <?php
                        }?>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="msg">Message</label>
                            <textarea rows="4" style="resize: none;" class="form-control" name="msg" id="msg"></textarea>
                        </div>
                        <div class="form-group">
                            <button name="send" class="btn btn-block btn-primary" >Send</button>
                        </div>


                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<?php
include('templates/footer.php');
?>
