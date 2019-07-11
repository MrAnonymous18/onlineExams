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
            <div class="card" style="margin-top:50px;box-shadow:4px 2px 3px 3px lightgrey;">
                <div class="card-header black">
                    <h4>Login</h4>
                </div>
                <div class="card-body" style="border: 1px solid black;padding:20px;">
                    <form action="actions/action_login.php" method="post">
                        <div class="form-group">
                            <label for="username">Username or Email : </label>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password : </label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="checkbox" name="remember" id="remember" class="form-check-inline">Remember Me
                        </div>
                        <div class="form-group">
                            <button type="submit" name="Login" class="btn btn-block btn-primary">Login</button>
                        </div>
                        <hr />
                        <a href="#"> Forgot Password?</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('templates/footer.php')?>
