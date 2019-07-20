<?php
include('header.php');
$filter = "All";
$cond ="";

if($_POST){

    $filter = $_POST['filter_status'];

    if($filter == 'All'){
        $cond="";
    }
    else{
        $cond = " AND l.status='$filter'";
    }
}
//select * from questions where type='$filter';
//SELECT * FROM login l, users u WHERE l.id =u.id AND l.id='$chk_password[0]' and l.status='Active'
$sql="SELECT * FROM login l, users u WHERE l.id =u.id AND l.role='User'".$cond;

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
                    <?php if($filter != "Active"){?><option value="Active">Active</option><?php } ?>
                    <?php if($filter != "Blocked"){?><option value="Blocked">Blocked</option><?php } ?>
                </select>
            </form>
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Status</th>
                <th> </th>
                </thead>
                <?php
                while($user_result = mysqli_fetch_array($query2)){
                    ?>
                    <tr>
                        <td><?php echo $user_result[0] ?></td>
                        <td><?php echo $user_result[6] ?></td>
                        <td><?php echo $user_result[1] ?></td>
                        <td><?php echo $user_result[7] ?></td>
                        <td><?php echo $user_result[4] ?></td>
                        <td>
                            <a href="view_single_user.php?sno=<?php echo $user_result[0] ?>" class="btn btn-primary">View</a>
                            <a href="edit_question.php?sno=<?php echo $user_result[0] ?>" class="btn btn-info">Edit</a>
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
