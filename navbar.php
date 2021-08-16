 <style>

.top-menu {
    list-style-type: none;
    margin: 10;
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

.menu-responsive {
    display: none;
}

@media only screen and (max-width: 768px) {
    
    .menu-responsive {
        display: block;
    }

    .top-menu-right {
        display: none;
    }
}

</style>

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
<li class="top-menu-right-img" style="margin-right:40px;">
    <a class="menu-link" href="#like">
        <img src="image/icon/Heart-2-icon.png" style="width: 100%;">
    </a>
</li>
<li class="top-menu-right-img" style="max-width: 110px;">
    <a class="menu-link" href="login.php">
        <span style="width:70%;padding-right:10px;">LOGIN</span>
        <img src="image/icon/User-icon.png" style="width: 30%;">
    </a>
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