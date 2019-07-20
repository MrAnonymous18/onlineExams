<?php
include('header.php');
$sno = "";
if($_GET){
    $sno = $_GET['sno'];
}

$fetch_question = mysqli_query($db,"select * from questions where id='$sno'");
$question_result = mysqli_fetch_array($fetch_question);
$fetch_category_query = mysqli_query($db,"Select * from categories ORDER BY name ");

$type = $question_result[1];
?>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3">
            <div class="card" style="margin-top:50px">
                <div class="card-header black">
                    <h3>Edit Question</h3>
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
                                <option value=""><?php echo $type ?></option>
                                <?php
                                while($category_result = mysqli_fetch_array($fetch_category_query)){
                                    if($type != $category_result[1]) {
                                        ?>
                                        <option
                                            value="<?php echo $category_result[1] ?>"><?php echo $category_result[1] ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="question">Question</label>
                            <textarea rows="3" style="resize: none" class="form-control" name="question" id="question" ><?php echo $question_result[2]?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="a">Option A</label>
                            <input type="text" name="a" id="a" class="form-control" value="<?php echo $question_result[3]?>">
                        </div>
                        <div class="form-group">
                            <label for="b">Option B</label>
                            <input type="text" name="b" id="b" class="form-control" value="<?php echo $question_result[4]?>">
                        </div>
                        <div class="form-group">
                            <label for="c">Option C</label>
                            <input type="text" name="c" id="c" class="form-control" value="<?php echo $question_result[5]?>">
                        </div>
                        <div class="form-group">
                            <label for="d">Option D</label>
                            <input type="text" name="d" id="d" class="form-control" value="<?php echo $question_result[6]?>">
                        </div>
                        <div class="form-group">
                            <label for="answer">Answer</label>
                            <input type="text" name="answer" id="answer" class="form-control" value="<?php echo $question_result[7]?>">
                        </div>
                        <div class="form-group">
                            <input type="text" value="<?php echo $question_result[0]  ?>" name="id" style="display: none" />
                        </div>
                        <div class="form-group">
                            <button class="btn btn-block btn-primary" name="updateQuestion">Update Question</button>
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
