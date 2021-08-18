<!DOCTYPE html>
<html lang="en">

<?php include("web_assets.php"); ?>

<center>
<body>
  
    <div class="container-fluid">
        <div class="row">
            <div class="col-md" style="text-align: center">
                <div class="login-logo">
                    <img src="image/app/Dora.png" style="width:60%">
                    <p class="login-logo-desc">The Dora website has bags from a variety of brands. <br> For the convenience of shopping.</p>
                </div>
            </div>
            <div class="col-md"  style="text-align:center">
                <div class="login-form">
                    <form action="login.php" method="post">
                        <input type="text" class="form-control login-input" name="txtUserName" placeholder="User Name">
                        <input type="text" class="form-control login-input" name="txtPassword" placeholder="Password">
                        <button class="btn btn-login">Log In</button><br>
                        <hr style="margin-top:50px">
                        <div style="margin-top:30px; margin-bottom:20px">
                        <a>Don’t have an account?</a><a href="register.php"> Register</a>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

    </center>  

</body>
</html>