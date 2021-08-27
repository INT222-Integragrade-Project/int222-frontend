<!DOCTYPE html>
<html lang="en">

<?php include("web_assets.php"); ?>

<body class="bg-login">
  
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
                        <form action="dologin.php" method="post">
                            <input type="text" class="form-control login-input" name="txtUserName" placeholder="User Name">
                            <input type="password" class="form-control login-input" name="txtPassword" placeholder="Password">
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
                    <div class="login-form ">
                        <form action="dologin.php" method="post">
                            <input type="text" class="form-control login-input" name="txtUserName" placeholder="User Name">
                            <input type="password" class="form-control login-input" name="txtPassword" placeholder="Password">
                            <button type="submit" class="btn btn-login">Log In</button><br>
                            <hr style="margin-top:50px">
                            <div style="margin-top:30px; margin-bottom:20px">
                                <a>Don’t have an account?</a><a href="register.php"> Register</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
   




  


</body>
</html>