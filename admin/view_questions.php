<?php
include('header.php');
if(isset($_SESSION['ft']))
	$filter=$_SESSION['ft'];
else
	$filter = "All";
$cond ="";

$fetch_categories = mysqli_query($db,"select * from categories ORDER BY name");

if($_POST){

    $filter = $_POST['filter_status'];
    $_SESSION['ft']=$filter;
    $page = 1;
}
else
{
    if(!isset($_GET['page'])){
        $page = 1;
    }
    else{
        $page = $_GET['page'];
    }
}
if($filter == 'All'){
        $cond="";
    }
    else{
        $cond = "where type='".$filter."'";
    }


//select * from questions where type='$filter';
$sql="select * from questions ".$cond;
$query1 = mysqli_query($db, $sql) or die('Error - : '.mysqli_error($db));
$per_page = 10;


$number_of_results = mysqli_num_rows($query1);
$number_of_pages = ceil($number_of_results/$per_page);

$start = ($page-1)*$per_page;

$query2 = mysqli_query($db,$sql." limit ".$start.','.$per_page) or die('Error - : '.mysqli_error($db));
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
                //echo $query2;
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
                for($p=$page;$p<=$number_of_pages;$p++)
                {
                    ?>
                    <li class="page-item"><a class="page-link" href="view_questions.php?page=<?php echo $p?>"><?php echo$p ?></a></li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</div>
<?php
include('footer.php');?>
