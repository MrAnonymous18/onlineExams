<?php
include('header.php');
$user_query = mysqli_query($db,"select * from login where role='User'");
$user_count = mysqli_num_rows($user_query);

$question_query = mysqli_query($db,"select * from questions");
$quiz_count = mysqli_num_rows($question_query);
//$chart_data = '';
//while($row = mysqli_fetch_array($user_query)){
//    $chart_data .="{ year:'".$row['created_at']."',user:".$user_count."}";
//}

?>

<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-4" style="padding:20px;font-size: 25px;border: 1px solid lightgrey;box-shadow: 3px 3px 3px 5px lightgrey">
            Number of total users : <?php echo $user_count ?>
        </div>
        <div class="col-md-4" style="padding:20px;font-size: 25px;border: 1px solid lightgrey;box-shadow: 3px 3px 3px 5px lightgrey">
            Number of total questions : <?php echo $quiz_count ?>
        </div>
    </div>
</div>
<script>
    //Morris.Bar({
    //    element : 'chart',
    //    data:[//],
    //    xkey:'year',
    //    ykey:user,
    //    label:user,
    //    hideHover:'auto',
    //});
</script>
<?php
include('footer.php');
?>
