<?php
include('templates/header.php');
$exam_query = mysqli_query($db, "Select * from exams");
?>

<?php include('templates/carousel.php'); ?>

<div class="container" style="margin-top: 40px">
    <div class="row">
        <div class="col-md-12">
            <h2>Our Exam Sets</h2>
            <div class="row">
                <?php
                while($exam_results = mysqli_fetch_array($exam_query)){
                ?>
                    <div class="col-md-3">
                        <a href="<?php echo $exam_results[3] ?>.php">
                        <div class="card" style="margin-top: 20px;box-shadow:4px 2px 3px 3px lightgrey;">
                            <div class="card-body">
                                <img src="admin/exams/avatar/<?php echo $exam_results[4] ?>" width="100%" height="150px" />
                            </div>
                            <div class="card-footer">
                                <h5><?php echo $exam_results[1]?></h5>
                            </div>

                        </div>
                        </a>
                    </div>
                <?php
                }
                ?>
            </div>

        </div>
    </div>
</div>


<?php
include('templates/footer.php');
?>

