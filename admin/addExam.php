<?php
    include('header.php');

?>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3">
            <div class="card" style="margin-top: 50px;box-shadow:4px 2px 3px 3px lightgrey;">
                <div class="card-header black">
                    <h4>Add Exam</h4>
                </div>
                <div class="card-body" style="border: 1px solid black;padding:20px;">
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

                    <form action="admin_actions/action_add_exam.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name" class="form-label">Exam Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description" class="form-label">Exam Description</label>
                            <textarea rows="4" style="resize:none;" name="description" id="description" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="avatar" class="form-label">Icon</label>
                            <input type="file" name="avatar" id="avatar" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="Add" class="btn btn-block btn-primary">Add Exam</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>