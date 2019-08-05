<?php 
include('header.php');

$query = mysqli_query($db,"select * from exams order by name");
?>
<div class="container">
	<div class="row" style="margin-top:100px;">
		<div class="col-md-10 offset-1">
			<h3 style="text-align:center">Exams List</h3>
			<table class="table table-striped" style="box-shadow:3px 3px 3px 3px lightgrey;">
				<thead>
					<th>Name</th>
					<th>Description</th>
					<th></th>
				</thead>
				<?php 
				while($result = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $result[1]?></td>
					<td><?php echo substr($result[2],0,50)."..."?></td>
					<td>
						<div class="row">
							<div class="col-md-6">
								<a href="view_exam.php?sno=<?php echo $result[0] ?>" class="btn btn-block btn-info">View</a>
							</div>
							<div class="col-md-6">
								<a href="edit_exam.php?sno=<?php echo $result[0]?>" class="btn btn-block btn-primary"> Edit</a>
							</div>
						</div>
					</td>
				</tr>
				<?php 
				}
				?>
			</table>
		</div>
	</div>
</div>
<?php 
include('footer.php');
?>