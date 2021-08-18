<style>

    .top-menu {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #ffffff;
    }
    
    .top-menu-item {
        float: left;
        text-align: center;
        margin: 30px 20px 20px 20px;
    }

    .top-menu-item-logo {
        float: left;
        max-width: 150px;
        margin: 15px 40px;
    }

    .top-menu-right {
        float: right;
        min-width: 20%;
        text-align: center;
        margin: 30px 20px 20px 20px;
    }

    .top-menu-right-img {
        float: right;
        max-width: 30px;
        margin: 30px 15px 10px 15px;
    }

    .right-menu-item {
        margin-right:40px;
    }

    .form-control:focus {
        background-color: #f5f5f5;
        border-color: transparent;
        outline: 0;
        box-shadow: 0 0 0 0 transparent;
    }

    .form-search-custom {
        width: 80% !important;
        background-color: #f5f5f5;
        border-radius: 25px;
    }

    .btn-outline-secondary {
        color: #6c757d;
        background-color: #f5f5f5;
        border: 1px solid #ced4da;
        border-radius: 25px;
    }

    .menu-link {
        display: block;
        font-weight: bold;
        font-size: 20px;
        color: #000000;
        background-color: transparent;
        text-align: center;
        text-decoration: none;
        
    }

    .menu-link:hover {
        display: block;
        color: #555555;
        text-decoration: none;
    }

    .login-label {
        width:70%;
        padding-right:10px;
    }

    .top-menu-right-img .dropdown-toggle::after {
        visibility: hidden;
    }

    .top-dropdown-menu {
        position: absolute;
        left: 5px !important;
        top: 22px !important;
        width: 265px !important;
        height: 175px !important;
        font-size: 20px;
    }

    .menu-responsive, .top-menu-500 {
        display: none;
    }

    @media only screen and (max-width: 1000px) {
        
        .top-menu-right, .login-label {
            display: none;
        }

        .menu-responsive {
            display: block;
        }

        .top-menu-right-img {
            max-width: 30px !important;
        }

        .top-menu-right-img img {
            width: 100% !important;
        }

        .top-dropdown-menu {
            position: absolute;
            left: 5px !important;
            top: 18px !important;
            width: 255px !important;
            height: 175px !important;
            font-size: 20px;
        }

    }

    @media only screen and (max-width: 800px) {
        
        .top-menu, .login-label {
            display: none;
        }

        .top-menu-500 {
            display: block;
        }

        .top-dropdown-menu {
            position: absolute;
            left: 5px !important;
            top: 15px !important;
            width: 230px !important;
            height: 175px !important;
            font-size: 20px;
        }

    }

    .top-menu-500 {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #ffffff;
    }

    .top-menu-500-item-logo {
        text-align: center;
        max-width: 500px;
        margin: 15px 40px;
    }
    
    .top-menu-500-item {
        float: left;
        text-align: center;
        margin: 30px 20px 20px 20px;
    }

    .top-menu-500-right {
        float: right;
        min-width: 20%;
        text-align: center;
        margin: 30px 20px 20px 20px;
    }

    .top-menu-500-right-img {
        float: right;
        max-width: 30px;
        margin: 30px 15px 10px 15px;
    }
    .top-menu-500-right-img .dropdown-toggle::after {
        visibility: hidden;
    }

</style>

<?php 
    session_destroy();
    $_SESSION["username"] = ""; 
?> 

<ul class="top-menu">
    
    <!-- left -->
    <li class="top-menu-item-logo">
        <a href="index.php"><img src="image/app/Logo.png" style="width: 100%;"></a>
    </li>
    <li class="top-menu-item">
        <a class="menu-link" href="product.php">PRODUCT</a>
    </li>
    <li class="top-menu-item">
        <a class="menu-link" href="team.php">TEAM</a>
    </li>

    <!-- right -->
    <?php if(isset($_SESSION["username"])){ ?>
        <li class="top-menu-right-img right-menu-item" style="max-width: 30px;">
            <a class="menu-link" href="#hamburger">
                <img src="image/icon/Hamburger.png" style="width: 100%;">
            </a>
        </li>
    <?php } ?>
    
    <?php $right_menu_item = isset($_SESSION["username"]) ? "" : "right-menu-item"; ?>
    <li class="top-menu-right-img <?= $right_menu_item ?>" style="max-width: 30px;">
        <a class="menu-link" href="#like">
            <img src="image/icon/Heart-2-icon.png" style="width: 100%;">
        </a>
    </li>
    <li class="top-menu-right-img" style="max-width: 110px;">
        <?php if(isset($_SESSION["username"])){ ?>
            <a href="#" class="menu-link dropdown-toggle" data-toggle="dropdown">
                <span class="login-label" style="text-transform:uppercase"><?= $_SESSION["username"] ?></span>
                <img src="image/icon/User-icon.png" style="width: 30%;">
            </a>
            <div class="dropdown-menu top-dropdown-menu">
                <label style="padding-left: 1.5rem;padding-top: 1rem;font-size:25px;"><b>NOPPHASORN</b></label>
                <a class="dropdown-item" href="profile.php">Profile</a>
                <a class="dropdown-item" href="logout.php">Log out <i class="bi bi-box-arrow-right"></i></a>
            </div>
        <?php } else { ?>

            <a class="menu-link" href="login.php">
                <span class="login-label">LOGIN</span>
                <img src="image/icon/User-icon.png" style="width: 30%;">
            </a>
        <?php } ?>
    </li>
    <li class="top-menu-right-img menu-responsive">
        <a class="menu-link" href="#search">
            <img src="image/icon/Very-Basic-Search-icon.png" style="width: 100%;">
        </a>
    </li>
    <li class="top-menu-right">
        <div class="input-group">
            <input type="text" class="form-control form-search-custom" id="txtSearch" name="txtSearch" value="">
            <span class="input-group-append">
                <button type="button" class="btn btn-outline-secondary border-left-0">
                    <i class="bi bi-search"></i>
                </button>
            </span>
        </div>
    </li>

</ul>

<ul class="top-menu-500">
    <!-- Left -->
    <li class="top-menu-500-item-logo">
        <a href="index.php"><img src="image/app/Logo.png" style="width: 40%;"></a>
    </li>
    <li class="top-menu-500-item">
        <a class="menu-link" href="product.php">PRODUCT</a>
    </li>
    <li class="top-menu-500-item">
        <a class="menu-link" href="team.php">TEAM</a>
    </li>

    <!-- Right -->
    <?php if(isset($_SESSION["username"])){ ?>
        <li class="top-menu-500-right-img right-menu-item">
            <a class="menu-link" href="#hamburger">
                <img src="image/icon/Hamburger.png" style="width: 100%;">
            </a>
        </li>
    <?php } ?>
    
    <?php $right_menu_item = isset($_SESSION["username"]) ? "" : "right-menu-item"; ?>
    <li class="top-menu-500-right-img <?= $right_menu_item ?>">
        <a class="menu-link" href="#like">
            <img src="image/icon/Heart-2-icon.png" style="width: 100%;">
        </a>
    </li>
    <li class="top-menu-500-right-img">
        <?php if(isset($_SESSION["username"])){ ?>
            <a href="#" class="menu-link dropdown-toggle" data-toggle="dropdown">
                <span class="login-label" style="text-transform:uppercase"><?= $_SESSION["username"] ?></span>
                <img src="image/icon/User-icon.png" style="width: 100%;">
            </a>
            <div class="dropdown-menu top-dropdown-menu">
                <label style="padding-left: 1.5rem;padding-top: 1rem;font-size:25px;"><b>Account</b></label>
                <a class="dropdown-item" href="profile.php">Profile</a>
                <a class="dropdown-item" href="logout.php">Log out <i class="bi bi-box-arrow-right"></i></a>
            </div>
        <?php } else { ?>
            <a class="menu-link" href="login.php">
                <img src="image/icon/User-icon.png" style="width: 100%;">
            </a>
        <?php } ?>
    </li>
    <li class="top-menu-500-right-img">
        <a class="menu-link" href="#search">
            <img src="image/icon/Very-Basic-Search-icon.png" style="width: 100%;">
        </a>
    </li>

</ul>