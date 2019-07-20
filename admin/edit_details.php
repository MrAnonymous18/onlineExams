<?php include('header.php');

if(isset($_SESSION['user'])){
    $data = $_SESSION['user'];
}
if(isset($_GET['modal'])){
    $label = $_GET['label'];
    $val = $_GET['val'];
}

?>
<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin-top: 50px;">
            <h3>Edit details : </h3>
            <div class="card" style="margin-top: 30px;box-shadow:4px 2px 3px 3px lightgrey;">
                <div class="card-header black">
                    <h5>Personal Details</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">Name : </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-5">
                            <?php echo $data[6] ?>
                            <a href="#" data-target="#my_modal" data-toggle="modal" class="identifyingClass btn btn-default"
                               data-id="my_id_value" style="margin-left: 10px;margin-top: -5px;" name="modal"> Edit</a>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-3">Contact no : </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-5">
                            <?php echo $data[7] ?>
                            <a href="edit_details.php?label='contact'&val='<?php echo $data[7]?>'" data-target="#my_modal" data-toggle="modal" class="identifyingClass btn"
                               data-id="my_id_value" style="margin-left: 10px;margin-top: -5px;"> Edit</a>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-3">Email : </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-5">
                            <?php echo $data[1] ?>
                            <a href="#" data-target="#my_modal" data-toggle="modal" class="identifyingClass btn disabled"
                               data-id="my_id_value" style="margin-left: 10px;margin-top: -5px;"> Edit</a>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-3">Date of birth : </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-5">
                            <?php echo $data[8] ?>
                            <a href="#" data-target="#my_modal" data-toggle="modal" class="identifyingClass btn disabled"
                               data-id="my_id_value" style="margin-left: 10px;margin-top: -5px;"> Edit</a>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-3">Address : </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-5">
                            <?php echo $data[10] ?>
                            <a href="#" data-target="#my_modal" data-toggle="modal" class="identifyingClass btn"
                               data-id="my_id_value" style="margin-left: 10px;margin-top: -5px;"> Edit</a>
                        </div>
                    </div>
                    <hr />
                    <div style="margin-top: 20px">
                    <h4>Change Image : </h4>
                        <div class="row">
                            <div class="col-md-6">
                                <form action="../actions/upload_image.php" method="post" enctype="multipart/form-data" id="upload" style="display:none">
                                    <div class="form-group">
                                        <label for="avatar"></label>
                                        <input type="file" class="form-control" name="avatar" id="avatar" />
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button type="submit" class="btn btn-block btn-primary" name="upload">Upload Image</button>
                                            </div>
                                            <div class="col-md-6">
                                                <button class="btn btn-block btn-danger" onclick="cancel()">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <button class="btn btn-dark" id="change" onclick="change()" style="margin-top: 20px;">Change Image</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="my_modal" tabindex="-1" role="dialog" aria-labelledby="my_modalLabel">
    <div class="modal-dialog" role="dialog" style="top:15em">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Edit</h4>
                <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form action="" method="post">
            <div class="modal-body">
                <div class="form-group">
                    <label for="edit"><?php echo $label ?></label>
                    <input type="text" name="edit" id="name" class="form-control" value="<?php echo $val ?>">
                </div>
            </div>
            <div class="modal-footer">
                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-primary"> Update</button>
                </div>
            </div>
            </form>
        </div>
    </div>

    <script type="text/javascript">
        $(function () {
            $(".identifyingClass").click(function () {
                var my_id_value = $(this).data('id');
                $(".modal-body #hiddenValue").val(my_id_value);
            })
        });
    </script>
    <script>
        function change(){
            document.getElementById('change').style="display:none";
            document.getElementById('upload').style="display:block";
        }
        function cancel(){
            document.getElementById('change').style="display:block";
            document.getElementById('upload').style="display:none";
        }

    </script>
<?php include('footer.php');?>
