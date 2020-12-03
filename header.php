  <!-- Navigation Bar-->
  <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">
                    <!-- Logo container-->
                    <div class="logo">
                        <!-- Text Logo --><!--<a href="index.php" class="logo">--><!--Zoter--><!--</a>--><!-- Image Logo--> 
                        <a href="index.php" class="logo"><img src="images/logo.png" alt="" class=""></a>
                    </div>
                    <!-- End Logo container-->
                    <div class="menu-extras topbar-custom">
                        <ul class="list-inline float-right mb-0">
                            <li class="list-inline-item hide-phone app-search">
                                <h4 id="username"></h4>
                            </li>
                            <!-- language-->
                            
                           
                            <!-- User-->
                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="images/avatar-1.jpg" alt="user" class="rounded-circle" />
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title"><h5>Welcome</h5></div>
                                    <a class="dropdown-item" href="#"><i class="fa fa-user-o m-r-5 text-muted"></i>Profile</a> 
                                    <span id="createEmployeebutton">

                                    </span>
                                    <div class="dropdown-divider"></div>
                                    <button class="dropdown-item" id="logoutButton"><i class="fa fa-sign-out m-r-5 text-muted"></i>Logout</button>
                                </div>
                            </li>
                            <li class="menu-item list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines"><span></span> <span></span> <span></span></div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>
                        </ul>
                    </div>
                    <!-- end menu-extras -->
                    <div class="clearfix"></div>
                </div>
                <!-- end container -->
            </div>
            <!-- end topbar-main --><!-- MENU Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu text-center">
                            <li class="has-submenu">
                                <a href="dashboard.php"><i class="fa fa-plane"></i>Dashboard</a>
                            </li>
                            <li class="has-submenu" >

                            </li>
                             <li class="has-submenu">
                                <a href="#"><i class="fa fa-product-hunt"></i>Daily Report</a>
                                <ul class="submenu">
                                <li><a class="dropdown-item" href="cashDiscrepancyReport.php">Cash Discrepancy report</a></li>
                                <li><a class="dropdown-item" href="creditCardDiscrepancyReport.php">Credit card Discrepancy report</a></li>
                                <li><a class="dropdown-item" href="ePayDiscrepancyReport.php">EPay Discrepancy report</a></li>
                                <li><a class="dropdown-item" href="gPReport.php">GP Report</a></li>
                                </ul>
                            </li> 
                            <li class="has-submenu">
                                <a href="#"><i class="fa fa-product-hunt"></i>Weekly Report</a>
                                <ul class="submenu">
                                <li><a class="dropdown-item" href="#">Aged Inventory Report</a></li>
                                <li><a class="dropdown-item" href="#">Sales Trend report</a></li>
                                </ul>
                            </li> 
                            <li class="has-submenu">
                                <a href="#"><i class="fa fa-product-hunt"></i> Monthly Report</a>
                                <ul class="submenu">
                                <li><a class="dropdown-item" href="#">Commission Recon Summary</a></li>
                                <li><a class="dropdown-item" href="#">Disqualified summary report</a></li>
                                <li><a class="dropdown-item" href="#">Sales Tax report</a></li>
                                </ul>
                            </li> 
                        
                           
                        </ul>
                        <!-- End navigation menu -->
                    </div>
                    <!-- end #navigation -->
                </div>
                <!-- end container -->
            </div>
            <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->


        
 
<div class="left side-menu">
    <!--<button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect"><i class="ion-close"></i></button>
    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <!--<a href="index.html" class="logo"><i class="mdi mdi-assistant"></i>Zoter</a>-->
            <a href="index.html" class="logo"><img src="assets/images/logo-lg.png" alt="" class="logo-large" /></a>
        </div>
    </div>
    <div class="sidebar-inner niceScrollleft" style="overflow: hidden; outline: currentcolor none medium;" tabindex="5000">
        <div id="sidebar-menu" class="active">
        <li>
            <span class="caret caret-margin-top">
                <span class="h-g"><a href="dashboard.php">Dashboard</a></span>
            </span>
        </li>
        <span  id="uploadButtonInHeader">

        </span>

  <li><span class="caret caret-margin-top"><span class="h-g">Daily Report</span></span>
    <ul class="nested">
        <li><a class="dropdown-item" href="cashDiscrepancyReport.php">Cash Discrepancy report</a></li>
        <li><a class="dropdown-item" href="creditCardDiscrepancyReport.php">Credit card Discrepancy report</a></li>
        <li><a class="dropdown-item" href="ePayDiscrepancyReport.php">EPay Discrepancy report</a></li>
        <li><a class="dropdown-item" href="gPReport.php">GP Report</a></li>
        </li>  
    </ul>
  </li>




  <li><span class="caret caret-margin-top"><span class="h-g">Weekly Report</span></span>
    <ul class="nested">
        <li><a class="dropdown-item" href="cashDiscrepancyReport.php">Aged Inventory Report</a></li>
        <li><a class="dropdown-item" href="salesTrendReport.php">Sales Trend report</a></li>
       
    </ul>
  </li>
  <li><span class="caret caret-margin-top"><span class="h-g">Monthly Report</span></span>
    <ul class="nested">
    <li><a class="dropdown-item" href="cashDiscrepancyReport.php">Commission Recon </a></li>
    <li><a class="dropdown-item" href="creditCardDiscrepancyReport.php">Disqualified report</a></li>
    <li><a class="dropdown-item" href="ePayDiscrepancyReport.php">Sales Tax report</a></li>
      </li>  
    </ul>
  
  
  
  
  
  
  </li>


        
    </div>
</div>
</div>

<script>
let username = document.querySelector('#username');
username.innerHTML = localStorage.getItem('userName')
console.log()
console.log(username)
</script>