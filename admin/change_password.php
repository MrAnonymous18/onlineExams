<?php
    include('header.php');
?>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card" style="margin: 50px;">
                <div class="card-header black"><h3>Change Password</h3></div>
                <div class="card-body">
                    <form action="admin_actions/action_edit_details.php" method="post">
                        <div class="form-group">
                            <label for="old_password" class="form-label">Old Password</label>
                            <input type="password" name="old_password" id="old_password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="new_password" class="form-label">Old Password</label>
                            <input type="password" name="new_password" id="new_password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="confirm_password" class="form-label">Old Password</label>
                            <input type="password" name="confirm_password" id="confirm_password" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary" name="change_pass">Change</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('footer.php');
?>
