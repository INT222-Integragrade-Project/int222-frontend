<style>

    .top-menu {
        list-style-type: none;
        max-height: 60px;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #ffffff;
    }

    .top-menu-item {
        float: left;
        text-align: center;
        margin: 15px 20px 20px 20px;
    }

    .top-menu-item-logo {
        float: left;
        max-width: 110px;
        margin: 10px 40px;
    }

    .top-menu-right {
        float: right;
        min-width: 20%;
        text-align: center;
        margin: 10px 20px 20px 20px;
    }

    .top-menu-right-label {
        float: right;
        max-width: 5%;
        text-align: center;
        max-width: 30px;
        margin: 10px 15px 10px 15px;
        overflow: hidden;
    }

    .top-menu-right-img {
        float: right;
        max-width: 5%;
        text-align: center;
        max-width: 30px;
        margin: 10px 15px 10px 15px;
        overflow: hidden;
    }

    .top-menu-right-img img {
        width: 30px;
    }

    .right-menu-item {
        margin-right:40px;
    }

    .form-control {
        padding: .375rem .5rem .375rem 1.25rem;
        border: 1px solid transparent;
    }

    .form-control:focus {
        background-color: #f5f5f5;
        border: 1px solid transparent;
        outline: 0;
        box-shadow: 0 0 0 0 transparent;
        
    }

    .form-search-custom {
        width: 80% !important;
        background-color: #f5f5f5;
        border-radius: 25px;
    }

    /* .input-group-text {
        background-color: #f5f5f5;
        border: 0px solid transparent;
        border-top-left-radius: 0px;
        border-top-right-radius: 25px;
        border-bottom-right-radius: 25px;
        border-bottom-left-radius: 0px;
        height: calc(1.5em + .75rem + 1px);
        
    } */

    .btn-outline-secondary {
        color: #6c757d;
        background-color: #f5f5f5;
        /* border: 1px solid #ced4da; */
        border: 1px solid transparent;
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
        line-height: 10px;
        /* margin: 15px 20px 20px 20px; */
    }

    .login-label-username {
        padding-left: 1.5rem;
        padding-top: 1.5rem;
        font-size: 1.15vw;
        text-transform:uppercase;
        font-weight: bold;
    }

    .top-menu-right-img .dropdown-toggle::after {
        visibility: hidden;
    }

    .top-dropdown-menu {
        position: absolute;
        left: -75px !important;
        top: 15px !important;
        width: 300px;
        height: 195px;
        font-size: 20px;
    }

    .menu-responsive, .top-menu-500 {
        display: none;
    }

</style>

<!-- สำหรับ Zoom 200% -->
<style>
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
            left: -60px !important;
            top: 15px !important;
            width: 300px !important;
            height: 175px !important;
            font-size: 20px;
        }

        .login-label-username {
            padding-left: 1.5rem;
            padding-top: 1.5rem;
            font-size: 2.2vw;
            text-transform:uppercase;
            font-weight: bold;
        }

    }

</style>

<!-- สำหรับ จอเล็กสุด / Zoom 250% -->
<style>

    @media only screen and (max-width: 800px) {
        
        .top-menu, .login-label {
            display: none;
        }

        .top-menu-500 {
            display: block;
        }

        .top-dropdown-menu {
            position: absolute;
            left: -65px !important;
            top: 15px !important;
            width: 300px !important;
            height: 175px !important;
            font-size: 20px;
        }

        .login-label-username {
            padding-left: 1.5rem;
            padding-top: 1.5rem;
            font-size: 2.25vw;
            text-transform:uppercase;
            font-weight: bold;
        }

    }

    @media only screen and (max-width: 600px) {
        .login-label-username {
            padding-left: 1.5rem;
            padding-top: 1.5rem;
            font-size: 3.1vw;
            text-transform:uppercase;
            font-weight: bold;
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

<!-- สำหรับ Hamburger -->
<style>

    #hamburger-menu {
        width: 400px;
        height: 100%;
        top: 0;
        right: -400px;
        overflow: hidden;
        background-color: #ffffff;
        /* box-shadow: 0px 5px 10px grey; */
        position: absolute;
        z-index: 2000;
        opacity: 0;
        transition: all .3s ease-in;
    }

    #hamburger-menu.show {
        opacity: 1;
        right: 0px;
        box-shadow: 0px 5px 10px grey;
    }

    #hamburger-menu a {
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        padding-left: 40px;
        margin-bottom: 25px;
    }

    #hamburger-menu a i {
        margin-right: 15px;
    }


    #hamburger-menu a:hover {
        color: #f1f1f1;
    }

    .close-hambuger {
        margin-right: 10px;
    }

</style>


<!-- สำหรับ Search Panel -->
<style>

    #search-panel {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0px;
        overflow: hidden;
        background-color: #ffffff;
        z-index: -1;
        opacity: 0;
        transition: all .4s ease;
    }

    #search-panel.show {
        opacity: 1;
        z-index: 3000;
    }

</style>

<script>

    $(document).ready(function(){

        // Sidebar
        $('#menu-button, #menu-button-500').click(function(e){
            e.stopPropagation();
            $('#hamburger-menu').toggleClass('show');
        });

        $('#hamburger-menu').click(function(e){
            e.stopPropagation();
        });

        $('body, html, .close-hambuger').click(function(e){
            $('#hamburger-menu').removeClass('show');
        });

        // Search 
        $('#btn-search-panel, #btn-search-panel-500').click(function(e){
            e.stopPropagation();
            $('#search-panel').toggleClass('show');
        });

        $('#search-panel').click(function(e){
            e.stopPropagation();
        });

        $('.close-search').click(function(e){
            $('#search-panel').removeClass('show');
        });

    });

</script>

<?php 
    session_destroy();
    // $_SESSION["username"] = "Wisanu"; 
    $_SESSION["username"] = "Wisanu Ksan oh-Yah!"; 
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
        <li class="top-menu-right-img right-menu-item">
            <div id="menu-button" >
                <a class="menu-link" href="#hamburger">
                    <img src="image/icon/Hamburger.png">
                </a>
            </div>
        </li>
    <?php } ?>
    
    <?php $right_menu_item = isset($_SESSION["username"]) ? "" : "right-menu-item"; ?>
    <li class="top-menu-right-img <?= $right_menu_item ?>">
        <a class="menu-link" href="#like">
            <img src="image/icon/Heart-2-icon.png">
        </a>
    </li>

    <?php if(isset($_SESSION["username"])){ ?>
        <li class="top-menu-right-img">
            <a href="#" class="menu-link dropdown-toggle" data-toggle="dropdown">
                <img src="image/icon/User-icon.png">
            </a>
            <div class="dropdown-menu top-dropdown-menu">
                <label class="login-label-username">
                    <?= $_SESSION["username"] ?>
                </label>
                <a class="dropdown-item" href="profile.php">Profile</a>
                <a class="dropdown-item" href="logout.php">Log out <i class="bi bi-box-arrow-right"></i></a>
            </div>
        </li>
    <?php } else { ?>
        <li class="top-menu-right-img" style="max-width:105px;"> 
            <a class="menu-link" href="login.php">
                <span class="login-label">LOGIN</span>
                <img src="image/icon/User-icon.png" style="width: 30%;">
            </a>
        <li class="top-menu-right-img">
    <?php } ?>

    <li class="top-menu-right-img menu-responsive">
        <div id="btn-search-panel">
            <a class="menu-link" href="#search">
                <img src="image/icon/Very-Basic-Search-icon.png">
            </a>
        </div>
    </li>

    <li class="top-menu-right">
        <form action="index.php" method="get">
            <div class="input-group">
                <input type="text" class="form-control form-search-custom" id="txtSearch" name="txtSearch" value="">
                <span class="input-group-append">
                    <button class="btn btn-outline-secondary border-left-0">
                        <i class="bi bi-search"></i>
                    </button>
                </span>
                <!-- <span class="input-group-text">
                    <button class="btn btn-outline-secondary border-left-0">
                        <i class="bi bi-search"></i>
                    </button>
                </span> -->
            </div>
        </form>
    </li>

</ul>



<!-- สำหรับ จอเล็กสุด / Zoom 250% -->
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
            <div id="menu-button-500" >
                <a class="menu-link" href="#hamburger">
                    <img src="image/icon/Hamburger.png" style="width: 100%;">
                </a>
            </div>
        </li>
    <?php } ?>
    
    <?php $right_menu_item = isset($_SESSION["username"]) ? "" : "right-menu-item"; ?>
    <li class="top-menu-500-right-img <?= $right_menu_item ?>">
        <a class="menu-link" href="#like">
            <img src="image/icon/Heart-2-icon.png" style="width: 100%;">
        </a>
    </li>

    <?php if(isset($_SESSION["username"])){ ?>
        <li class="top-menu-500-right-img">
            <a href="#" class="menu-link dropdown-toggle" data-toggle="dropdown">
                <img src="image/icon/User-icon.png" style="width: 100%;">
            </a>
            <div class="dropdown-menu top-dropdown-menu">
                <label class="login-label-username">
                    <?= $_SESSION["username"] ?>
                </label>
                <a class="dropdown-item" href="profile.php">Profile</a>
                <a class="dropdown-item" href="logout.php">Log out <i class="bi bi-box-arrow-right"></i></a>
            </div>
        </li>
    <?php } else { ?>
        <li class="top-menu-500-right-img">
            <a class="menu-link" href="login.php">
                <img src="image/icon/User-icon.png" style="width: 100%;">
            </a>
        </li>
    <?php } ?>
    
    <li class="top-menu-500-right-img">
        <div id="btn-search-panel-500">
            <a class="menu-link" href="#search">
                <img src="image/icon/Very-Basic-Search-icon.png" style="width: 100%;">
            </a>
        </div>
    </li>

</ul>

<div id="hamburger-menu">
    <div class="row">
        <div class="col-md" style="text-align: right;">
            <a href="javascript:void(0)" class="close-hambuger"><i class="bi bi-x" style="font-size: 40px;"></i></a>
        </div>
    </div>

    <a href="#home">
        <i class="bi bi-grid-fill"></i>
        Home
    </a>
    <a href="#clients">
        <i class="bi bi-people-fill"></i> 
        Clients
    </a>
    <a href="#contact">
        <i class="bi bi-gear"></i> 
        Configulation
    </a>
</div>

<div id="search-panel">
    
    <div class="row">
        <div class="col-md" style="text-align: right;">

            <form action="index.php" method="get">
                <div class="input-group">
                    <span class="input-group-prepend">
                        <button class="btn btn-outline-secondary border-left-0">
                            <i class="bi bi-search"></i>
                        </button>
                    </span>
                    <input type="text" class="form-control form-search-custom" id="txtSearch" name="txtSearch" value="">

                    <a href="javascript:void(0)" class="close-search"><i class="bi bi-x" style="font-size: 40px;"></i></a>
                </div>
            </form>

        </div>
    </div>
    
    
    

</div>
        