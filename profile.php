<!DOCTYPE html>
<html lang="en">

<?php include("web_assets.php"); ?>
<?php error_reporting(0); ?>
<style>

    .my-profile {
        background-color: #ffffff;
        max-width: 675px;
        margin: 2% auto;
        padding: 40px;
        border: 15px solid #F2F2F2;
        border-radius: 10px;
    }

    .input-group-profile {
        max-width: 100px;
    }

    .input-group-text-profile {
        background-color: #C7BBE2;
        color: #2a2a2a;
        border-radius: 20px;
    }

    .form-profile {
        border-radius: 20px;
    }

    .btn-profile-custom {
        background-color: #C7BBE2;
        margin-top: 30px;
        border-radius: 10px;
        color: #2a2a2a;
        min-width: 120px;
        padding: .325rem .75rem;
    }

    .btn-profile-custom:hover {
        background-color: #b1a2d7;
    }

    .btn-profile-password {
        background-color: #C7BBE2;
        margin-top: 50px;
        margin-bottom: 50px;
        border-radius: 10px;
        color: #2a2a2a;
        min-width: 120px;
        padding: .325rem .75rem;
    }


    @media (min-width: 500px){
        
        .col-sm-4-custom {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }
    }
    

</style>

<script>

    $(document).ready(function(){
        

    });

    function toggleEdit(tmp = ''){

        if (tmp == "cancel") {
            $("#txtUsername").attr('disabled', true);
            $("#txtFirstName").attr('disabled', true);
            $("#txtLastName").attr('disabled', true);
        } else {
            $("#txtUsername").attr('disabled', false);
            $("#txtFirstName").attr('disabled', false);
            $("#txtLastName").attr('disabled', false);
        }

        $("#changePassword").toggle();
        $("#editButton").toggle();
        $("#updateButton").toggle();

    }

    function submitType(type){
        $("#txtSubmitType").val(type);
    }

</script>

<body>
    <?php include("navbar.php");?>
    <div class="container">
        
        <div class="row">
            <div class="col-md" style="text-align: center;">
                <b><p class="topic" style="padding-top:2%;">MY PROFILE</p></b>
            </div>
        </div>
        <div class="row">
            <div class="col-md" style="text-align: center;">

                <div class="my-profile">
                    <!-- action ไปหน้า update profile  -->
                    <form action="#" method="post">
                        
                        <div class="row">
                            <div class="col-md">
                                <!-- รูป Account -->
                                <span class="material-icons-outlined" style="font-size:120px;color:#888888;">account_circle</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md">
                                <div style="text-align: centet;">
                                    <label>User Id : <?= $userid ?></label>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-md-center">
                            <div class="col-md-8">
                                <div class="input-group" style="margin:10px auto;">
                                    <div class="input-group-prepend input-group-profile">
                                        <span class="input-group-text input-group-text-profile">Username</span>
                                    </div>
                                    <input type="text" class="form-control form-profile" id="txtUsername" name="txtUsername" value="" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-md-center">
                            <div class="col-md-8">
                                <div class="input-group" style="margin:10px auto;">
                                    <div class="input-group-prepend input-group-profile"><span class="input-group-text input-group-text-profile">First Name</span></div>
                                    <input type="text" class="form-control form-profile" id="txtFirstName" name="txtFirstName" value="" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-md-center">
                            <div class="col-md-8">
                                <div class="input-group" style="margin:10px auto;">
                                    <div class="input-group-prepend input-group-profile"><span class="input-group-text input-group-text-profile">Last Name</span></div>
                                    <input type="text" class="form-control form-profile" id="txtLastName" name="txtLastName" value="" disabled>
                                </div>
                            </div>
                        </div>

                        <div id="changePassword" class="row" style="display: none;">
                            <div class="col-md" style="margin-top: 10px;">
                                <a href="#" data-toggle="modal" data-target="#changePasswordModal">Change Password</a>
                            </div>
                        </div>

                        <div id="editButton" class="row">
                            <div class="col-md">
                                <button type="button" class="btn btn-profile-custom" onclick="toggleEdit()">Edit Profile</button>
                            </div>
                        </div>

                        <div id="updateButton" class="row justify-content-sm-center" style="display: none;">
                            <div class="col-sm-4 col-sm-4-custom" style="display: inline-block;">
                                <button class="btn btn-profile-custom">Update</button>
                            </div>
                            <div class="col-sm-4 col-sm-4-custom" style="display: inline-block;">
                                <button type="button" class="btn btn-profile-custom" onclick="toggleEdit('cancel')">Cancel</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>  
    </div>

</body>
</html>

<div class="modal fade" id="changePasswordModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

                <form action="update_profile_password.php" method="get">

                    <input type="hidden" id="txtSubmitType" name="txtSubmitType" value="">

                    <div class="row">
                        <div class="col-md" style="margin:30px auto; text-align: center;">
                            <!-- รูป Account -->
                            <span class="material-icons-outlined" style="font-size:120px;color:#888888;">account_circle</span>
                            <br>
                            <label><?= $userName ?></label>
                        </div>
                    </div>

                    <div class="row justify-content-md-center">
                        <div class="col-md-8" style="margin-bottom:25px;">
                            <label style="margin-bottom: 0px;">Password</label>
                            <input type="text" class="form-control" id="txtOldPassword" name="txtOldPassword" value="<?= $oldPassword ?>">
                        </div>
                    </div>

                    <div class="row justify-content-md-center">
                        <div class="col-md-8" style="margin-bottom:25px;">
                            <label style="margin-bottom: 0px;">New Password</label>
                            <input type="password" class="form-control" id="txtNewPassword" name="txtNewPassword" value="">
                        </div>
                    </div>

                    <div class="row justify-content-md-center">
                        <div class="col-md-8" style="margin-bottom:25px;">
                            <label style="margin-bottom: 0px;">New Password Confirm</label>
                            <input type="password" class="form-control" id="txtVerifyPassword" name="txtVerifyPassword" value="">
                        </div>
                    </div>

                    <div class="row justify-content-sm-center">
                        <div class="col-sm-4" style="text-align: center;">
                            <button class="btn btn-profile-password" onclick="submitType('update')">Update</button>
                        </div>
                        <div class="col-sm-4" style="text-align: center;">
                            <button class="btn btn-profile-password" style="background-color: #FFA5A5;" onclick="submitType('delete')">Delete Account</button>
                        </div>
                    </div>
                    
                </form>
            
            </div>
        </div>
    </div>
</div>
