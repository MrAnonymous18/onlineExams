<?php include('templates/header.php');
if(isset($_SESSION['name'])){
    if($_SESSION['name']!=null){
        $_SESSION['error'] = "You are not authorized to view this page";
        header("Location:error.php");
    }
}
?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                <div class="card"  style="margin-top:50px;box-shadow:4px 2px 3px 3px lightgrey;">
                    <div class="card-header black">
                        <h4>Register</h4>
                    </div>
                    <div class="card-body" style="border: 1px solid black;padding:20px;">
                        <form action="actions/action_register.php" method="post">
                            <div class="form-group">
                                <label for="name">Name : </label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Email : </label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="contact">Contact : </label>
                                <input type="text" name="contact" id="contact" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="address">Address : </label>
                                <input type="text" name="address" id="address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Password : </label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="conPassword">Confirm Password : </label>
                                <input type="text" name="conPassword" id="conPassword" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="dob">Date of birth : </label>
                                <input type="date" name="dob" id="dob" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="gender">Gender : </label>
                                <select name="gender" id="gender" class="form-control">
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="qualification">Qualification : </label>
                                <input type="text" name="qualification" id="qualification" class="form-control">
                            </div>
                            <hr />
                            <div class="form-group">
                                <button type="submit" name="Register" class="btn btn-block btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('templates/footer.php') ?>
