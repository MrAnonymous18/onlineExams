<?php
include('header.php');

$fetch_category_query = mysqli_query($db,"Select * from categories ORDER BY name ");

?>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3">
            <div class="card" style="margin-top:50px">
                <div class="card-header black">
                    <h3>Add Question</h3>
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
                    <form action="admin_actions/action_add_question.php" method="post">
                        <div class="form-group">
                            <label for="type"></label>
                            <select name="type" id="type" class="form-control">
<!--                                <option value="">---Select a category---</option>-->
                                <?php
                                while($category_result = mysqli_fetch_array($fetch_category_query)){
                                ?>
                                    <option value="<?php echo $category_result[1]?>"><?php echo $category_result[1]?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="question">Question</label>
                            <textarea rows="2" style="resize: none" class="form-control" name="question" id="question"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="a">Option A</label>
                            <input type="text" name="a" id="a" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="b">Option B</label>
                            <input type="text" name="b" id="b" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="c">Option C</label>
                            <input type="text" name="c" id="c" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="d">Option D</label>
                            <input type="text" name="d" id="d" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="answer">Answer</label>
                            <input type="text" name="answer" id="answer" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-block btn-primary" name="addQuestion">Add Question</button>
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
