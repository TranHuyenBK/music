<?php
$img_picceo = $this->Html->image('feed_logo.png', array(
    'alt' => 'picceo logo',
));
?>
<nav class="bar navbar">
    <a href="#"><?php echo $img_picceo ?></a>
    <button class="btn no-bg" id="sidebarToggle">
        <i class="fa fa-bars"></i>
    </button>
    <div class="smusicleft"></div>
    <ul class="bar navbar">
        <li>
            <p class="text-italic">Hello ...,</p>
        </li>
        <li class="contain">
            <button class="btn no-bg contain" id="navbell-toggle">  
                <i class="fa fa-bell"></i>
                <span class="alert alert-danger circle">3</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right inside" id="navbell">
                <div class="contain" id="dropdown-toggle">
                    <a href="#" class="item-link text-black">Users
                        <span class="alert alert-danger radius right">4</span>
                    </a>
                </div>
                <div class="contain" id="dropdown-toggle">
                    <a href="#" class="item-link-list text-black">New Users
                        <span class="alert alert-danger radius right">2</span>
                    </a>
                </div>
                <div class="contain" id="dropdown-toggle">
                    <a href="#" class="item-link-list text-black">Inactive Users
                        <span class="alert alert-danger radius right">0</span>
                    </a>
                </div>
              
            </div>
        </li>
        <li class="contain">
            <button class="btn no-bg contain" id="navuser-toggle">  
                <i class="fa fa-user-circle"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right inside" id="navuser">
                <div class="inline" id="dropdown-toggle">
                    <a href="#" class="item-link text-black" >Profile
                        <i class="fa fa-info-circle inside right"></i>
                    </a> 
                </div>
                <div class="inline" id="dropdown-toggle">
                    <a href="#" class="item-link text-black" id="delete">Delete    
                        <i class="fa fa-trash inside right" ></i>
                    </a> 
                </div>
                <div class="inline" id="dropdown-toggle">
                    <a href="#" class="item-link text-black" id="logout">Logout  
                        <i class="fa fa-sign-out-alt inside right"></i>
                    </a>
                </div>
            </div>
        </li>
    </ul>
</nav>
<div id="wrapper">
    <ul class="bar sidebar bg-dark">
        <li class="contain li-sidebar">
            <a href="#" class="item-link" id="nav-dashboard"><i class="fa fa-tachometer-alt" ></i>Dashboard</a>
        </li>
        <li class="contain li-sidebar">
            <a href="#" class="item-link" id="nav-manager"><i class="fa fa-user-tie" ></i>Manager</a>
            <div class="dropdown-divider"></div>
            <div class="contain" >
                <a href="/music/admins/users" class="item-link-list" id="nav-users-manager">
                    <i class="fa fa-users" ></i>Users
                    <span class="alert alert-danger radius right">10</span>
                </a>
            </div>
            <div class="contain" >
                <a href="/music/admins/audio" class="item-link-list" id="nav-pictures-manager">
                    <i class="far fa-file-audio"></i>Audio
                    <span class="alert alert-danger radius right">10</span>
                </a>
            </div>
            <div class="contain" >
                <a href="/music/admins/video" class="item-link-list" id="nav-tags-manager">
                    <i class="fa fa-play-circle" aria-hidden="true"></i>Video
                    <span class="alert alert-danger radius right">10</span>
                </a>
            </div>
            <div class="contain" >
                <a href="#" class="item-link-list" id="nav-reports-manager">
                    <i class="fa fa-flag" ></i>Reports
                    <span class="alert alert-danger radius right">10</span>
                </a>
            </div>
        </li>
        <li class="contain li-sidebar">
            <a href="#" class="item-link" id="nav-account"><i class="fa fa-id-card" ></i>Account</a>
        </li>
        <li class="contain li-sidebar">
            <a href="#" class="item-link" id="logout"><i class="fa fa-sign-out-alt" ></i>Logout</a>
        </li>
    </ul>
