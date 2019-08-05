<?php 
include("header.php");
$sno = "";
if(isset($_GET['sno'])){
	$sno = $_GET['sno'];
}
else{
	$_SESSION['error'] = "Null value. Can't Open";
	header("Location:../error.php");
}
$query = mysqli_query($db,"select * from exams where id='$sno'");
$result = mysqli_fetch_array($query);
?>
<div class="cover"></div>
<div class="container">
	<div class="row" style="box-shadow:3px 3px 3px 3px lightgrey;margin-top:100px;">
		<div class="col-md-3">
			<img src="exams/avatar/<?php echo $result[3] ?>" style="margin:20px auto;width:80%;" class="img-responsive" alt="">
		</div>
		<div class="col-md-9">
			<h1 style="margin-top:50px;"><?php echo $result[1]?></h1>
		</div>
	</div>
</div>

<?php 
include("footer.php");
?>