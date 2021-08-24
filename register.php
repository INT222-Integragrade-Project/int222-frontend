<!DOCTYPE html>
<html lang="en">

<?php include("web_assets.php"); ?>

<style>
.login-form {
    margin: 13% auto;
}

@media only screen and (max-width: 1200px) {
    .login-form {
        margin: -5% auto;
    }
}

</style>

<body>

    <div class="container-fluid">

        <div id="login-panel"> 
            <div class="row">
                <div class="col-xl" style="text-align: center;">
                    <div class="login-logo">
                    <img src="image/app/Logo.png" style="width:100%; margin:-15%">
                        <p class="login-logo-desc">The Dora website has bags from a variety of brands. <br> For the convenience of shopping.</p>
                    </div>
                </div>

                <div class="col-xl" style="text-align: center;">
                    <div class="login-form">
                        <div style="color:#8966D7;margin:20px auto;font-weight:bold;font-size:20px;">REGISTER A NEW ACCOUNT</div>
                        <form action="dologin.php" method="post">
                            <input type="text" class="form-control login-input" name="txtUserName" placeholder="User Name">
                            <input type="text" class="form-control login-input" name="txtName" placeholder="Name">
                            <input type="text" class="form-control login-input" name="txtLName" placeholder="Last Name">
                            <input type="password" class="form-control login-input" name="txtPassword" placeholder="Password">
                            <input type="password" class="form-control login-input" name="txtConfirmPassword" placeholder="Confirm Password">
                            <button type="submit" class="btn btn-login">Register</button><br>
                            <hr style="margin-top:50px">
                            <div style="margin-top:30px; margin-bottom:20px">
                                <a>Already have an account?</a><a href="login.php"> Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="login-panel-mobile">

            <div class="row">
                <div class="col-md" style="text-align: center;">
                    <div class="login-logo">
                        <img src="image/app/Logo.png">
                        <p class="login-logo-desc">The Dora website has bags from a variety of brands. <br> For the convenience of shopping.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md">
                    <div class="login-form">
                        <div style="color:#8966D7;margin:10px auto;font-weight:bold;font-size:18px;">REGISTER A NEW ACCOUNT</div>
                        <form action="dologin.php" method="post">
                            <input type="text" class="form-control login-input" name="txtUserName" placeholder="User Name">
                            <input type="text" class="form-control login-input" name="txtName" placeholder="Name">
                            <input type="text" class="form-control login-input" name="txtLName" placeholder="Last Name">
                            <input type="password" class="form-control login-input" name="txtPassword" placeholder="Password">
                            <input type="password" class="form-control login-input" name="txtConfirmPassword" placeholder="Confirm Password">
                            <button class="btn btn-login">Register</button><br>
                            <hr style="margin-top:50px">
                            <div style="margin-top:30px; margin-bottom:20px">
                                <a>Already have an account?</a><a href="login.php"> Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

</body>
</html>