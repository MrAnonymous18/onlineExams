<?php
include('header.php');
$filter = "All";
$cond ="";

$fetch_categories = mysqli_query($db,"select * from categories ORDER BY name");

if($_POST){

    $filter = $_POST['filter_status'];

    if($filter == 'All'){
        $cond="";
    }
    else{
        $cond = "where type='".$filter."'";

    }
}
//select * from questions where type='$filter';
$sql="select * from questions ".$cond;

$query1 = mysqli_query($db, $sql) or die('Error - : '.mysqli_error($db));
$results_per_page = 5;


$number_of_results = mysqli_num_rows($query1);
$number_of_pages = ceil($number_of_results/$results_per_page);


if(!isset($_GET['page'])){
    $page = 1;
}
else{
    $page = $_GET['page'];
}

$this_page_first_result = ($page-1)*$results_per_page;

$query2 = mysqli_query($db,$sql." limit ".$this_page_first_result.','.$results_per_page) or die('Error - : '.mysqli_error($db));
?>
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-1" style="margin-top: 50px;">
            <form method="post" style="float:right;margin-bottom:15px;">
                Filter :
                <select name="filter_status" onchange="submit()" >
                    <option value="<?php echo $filter ?>"><?php echo $filter ?></option>
                    <?php if($filter != "All"){?><option value="All">All</option><?php } ?>
                    <?php
                        while($categories_result = mysqli_fetch_array($fetch_categories)){
                            if($filter != $categories_result[1]){
                    ?>
                                <option value="<?php echo $categories_result[1] ?>"><?php echo $categories_result[1] ?></option>
                    <?php
                            }
                        }
                    ?>
                </select>
            </form>
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                <th>#</th>
                <th>Type</th>
                <th>Question</th>
                <th> </th>
                </thead>
                <?php
                while($question_result = mysqli_fetch_array($query2)){
                    ?>
                    <tr>
                        <td><?php echo $question_result[0] ?></td>
                        <td><?php echo $question_result[1] ?></td>
                        <td><?php echo substr($question_result[2], 0,60)."..."?></td>
                        <td>
                            <a href="edit_question.php?sno=<?php echo $question_result[0] ?>" class="btn btn-info">Edit</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>

            <ul class="pagination">
                <?php
                for($page=1;$page<=$number_of_pages;$page++)
                {
                    ?>
                    <li class="page-item"><a class="page-link" href="view_questions.php?page=<?php echo $page?>"><?php echo $page ?></a></li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</div>
<?php
include('footer.php');?>
