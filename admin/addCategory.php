<?php
include("header.php");
?>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3">
            <div class="card" style="margin-top: 50px;box-shadow:4px 2px 3px 3px lightgrey;">
                <div class="card-header black">
                    <h3>Add Category</h3>
                </div>
                <div class="card-body">
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
                    <form action="admin_actions/action_add_category.php" method="post">
                        <div class="form-group">
                            <label for="name">Category Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="addCategory" class="btn btn-block btn-primary">Add Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
