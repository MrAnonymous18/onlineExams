<?php
include('header.php');
$query = mysqli_query($db,"select * from contact_queries ORDER BY created_at desc");
?>
<div class="container">
    <div class="row" style="margin-top: 100px">
        <div class="col-md-8 offset-2">
            <table class="table table-striped">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th></th>
                </thead>
                <?php while($result = mysqli_fetch_array($query)){
                 ?>
                    <tr>
                        <td><?php echo $result[1]?></td>
                        <td><?php echo $result[2]?></td>
                        <td><?php echo substr($result[3],0,25)?></td>
                        <td><?php echo substr($result[4],0,50)?></td>
                        <td>
                            <a href="contact_query.php?sno=<?php echo $result[0]?>" class="btn btn-info">View</a>
                        </td>
                    </tr>
                <?php
                }?>
            </table>
        </div>
    </div>
</div>
<?php include('footer.php');?>
