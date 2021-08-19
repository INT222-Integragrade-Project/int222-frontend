<script>

    $(document).ready(function(){

        // Sidebar
        $('#menu-button, #menu-button-500').click(function(e){
            e.stopPropagation();
            $('#sidebar-menu').toggleClass('show');
        });

        $('#sidebar-menu').click(function(e){
            e.stopPropagation();
        });

        $('body, html, .close-sidebar').click(function(e){
            $('#sidebar-menu').removeClass('show');
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
            $("#txtSearchPanel").val("");
        });

    });

</script>

<ul class="nav-menu">
    
    <!-- left -->
    <li class="nav-menu-item-logo">
        <a href="index.php"><img src="image/app/Logo.png" style="width: 100%;"></a>
    </li>
    <li class="nav-menu-item">
        <a class="menu-link" href="product.php">PRODUCT</a>
    </li>
    <li class="nav-menu-item">
        <a class="menu-link" href="team.php">TEAM</a>
    </li>

    <!-- right -->
    <?php if(isset($_SESSION["username"])){ ?>
        <li class="nav-menu-item-right-link margin-right-menu">
            <div id="menu-button" >
                <a class="menu-link" href="#sidebar">
                    <span class="material-icons">menu</span>
                </a>
            </div>
        </li>
    <?php } ?>
    
    <?php $right_menu_item = isset($_SESSION["username"]) ? "" : "margin-right-menu"; ?>
    <li class="nav-menu-item-right-link <?= $right_menu_item ?>">
        <a class="menu-link" href="#like">
            <span class="material-icons">favorite_border</span>
        </a>
    </li>

    <?php if(isset($_SESSION["username"])){ ?>
        <li class="nav-menu-item-right-link">
            <a href="#" class="menu-link dropdown-toggle" data-toggle="dropdown">
                <span class="material-icons">account_circle</span>
            </a>
            <div class="dropdown-menu dropdown-menu-custom">
                <label class="login-label-username">
                    <?= $_SESSION["username"] ?>
                </label>
                <a class="dropdown-item nav-dropdown-item" href="profile.php">Profile</a>
                <a class="dropdown-item nav-dropdown-item" href="logout.php">
                    Log out 
                    <span class="material-icons material-icons-logout">logout</span>
                </a>
            </div>
        </li>
    <?php } else { ?>
        <li class="nav-menu-item-right-link" style="max-width:105px;"> 
            <a class="menu-link" href="login.php">
                <span class="login-label">Login</span>
                <span class="material-icons">account_circle</span>
            </a>
        </li>
    <?php } ?>

    <li class="nav-menu-item-right-link menu-responsive">
        <div id="btn-search-panel">
            <a class="menu-link" href="#search">
                <span class="material-icons">search</span>
            </a>
        </div>
    </li>

    <li class="nav-menu-item-right">
        <form action="index.php" method="get">
            <div class="input-group">
                <input type="text" class="form-control form-search-custom" id="txtSearch" name="txtSearch" value="">
                <span class="input-group-append">
                    <button class="btn btn-outline-secondary border-left-0">
                        <i class="bi bi-search"></i>
                    </button>
                </span>
            </div>
        </form>
    </li>

</ul>

<!-- สำหรับ จอเล็กสุด / Zoom 250% -->
<ul class="nav-menu-mobile">
    <!-- Left -->
    <li class="nav-menu-mobile-item-logo">
        <a href="index.php"><img src="image/app/Logo.png" style="width: 40%;"></a>
    </li>
    <li class="nav-menu-mobile-item">
        <a class="menu-link" href="product.php">PRODUCT</a>
    </li>
    <li class="nav-menu-mobile-item">
        <a class="menu-link" href="team.php">TEAM</a>
    </li>

    <!-- Right -->
    <?php if(isset($_SESSION["username"])){ ?>
        <li class="nav-menu-mobile-right-img margin-right-menu">
            <div id="menu-button-500" >
                <a class="menu-link" href="#sidebar">
                    <span class="material-icons">menu</span>
                </a>
            </div>
        </li>
    <?php } ?>
    
    <?php $right_menu_item = isset($_SESSION["username"]) ? "" : "margin-right-menu"; ?>
    <li class="nav-menu-mobile-right-img <?= $right_menu_item ?>">
        <a class="menu-link" href="#like">
            <span class="material-icons">favorite_border</span>
        </a>
    </li>

    <?php if(isset($_SESSION["username"])){ ?>
        <li class="nav-menu-mobile-right-img">
            <a href="#" class="menu-link dropdown-toggle" data-toggle="dropdown">
                <span class="material-icons">account_circle</span>
            </a>
            <div class="dropdown-menu dropdown-menu-custom">
                <label class="login-label-username">
                    <?= $_SESSION["username"] ?>
                </label>
                <a class="dropdown-item nav-dropdown-item" href="profile.php">Profile</a>
                <a class="dropdown-item nav-dropdown-item" href="logout.php">
                    Log out 
                    <span class="material-icons material-icons-logout">logout</span>
                </a>
            </div>
        </li>
    <?php } else { ?>
        <li class="nav-menu-mobile-right-img">
            <a class="menu-link" href="login.php">
                <span class="material-icons">account_circle</span>
            </a>
        </li>
    <?php } ?>
    
    <li class="nav-menu-mobile-right-img">
        <div id="btn-search-panel-500">
            <a class="menu-link" href="#search">
                <span class="material-icons">search</span>
            </a>
        </div>
    </li>
</ul>

<!-- Side bar Menu -->
<div id="sidebar-menu">
    <div class="row">
        <div class="col-md" style="text-align: right;">
            <a href="javascript:void(0)" class="close-sidebar"><i class="bi bi-x" style="font-size: 40px;"></i></a>
        </div>
    </div>
    <a href="#add_product">
        <div class="sidebar-icon">
            <span class="material-icons-round">grid_view</span>
            Add Product
        </div>
    </a>
    <a href="#my_product">
        <div class="sidebar-icon">
            <span class="material-icons-round">ballot</span>
            My Product
        </div>
    </a>
    <a href="#members">
        <div class="sidebar-icon">
            <span class="material-icons">people_alt</span>
            Members
        </div>
    </a>
 
</div>

<!-- Search Panel -->
<div id="search-panel">
    <div class="row">
        <div class="col-md" style="text-align: center;">

            <form action="index.php" method="get">
                <div class="input-group-search">

                    <div class="prefix-search-input">
                        <button class="btn btn-search-custom btn-light">
                            <span class="material-icons material-icons-500">search</span>
                        </button>
                    </div>

                    <input type="text" class="form-control form-search-panel-custom" id="txtSearchPanel" name="txtSearch" placeholder="ค้นหา" value="" autocomplete="off">

                    <button type="button" class="btn btn-close-custom btn-light close-search" ><i class="bi bi-x" style="font-size: 1.5rem;"></i></button>
                </div>
                    

            </form>

        </div>
    </div>
</div>
        