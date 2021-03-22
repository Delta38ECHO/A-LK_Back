<?php //navBar.php

include_once('lib.php');
//members nav 
?>

<!--Nav Begining -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <!-- Container -->
    <div class="container-fluid">
             <!-- Nav Bar Brand -->
                <a class="navbar-brand" href="#">AntiLockOut</a>
<?php
/////////////////////////////// What will be shown once logged in ////////////////////////
if(isActive()){
?>
  <ul class='navbar-nav'>
    <li class='nav-item'>
        <a class='nav-link' href='orders.php'>Logs</a>
    </li>
    <li class='nav-item'>
        <a class='nav-link' href='users.php'>Users's</a>
    </li>
    <li>
        <a class='nav-link' href='settings.php'>Settings</a>
    </li>

  </ul>
    <ul class='navbar-nav navbar-right'>
        <li class='nav-item'>
            <a class='nav-link' href='logout.php'>Logout
                <i class="glyphicon glyphicon-user"></i>
            </a>
        </li>
    </ul> 
    </div>
    <!--/container-->
</nav>
<!-- End of nav if logged in-->
<?php }

/////////////////////////////// What will be shown if not logged in  ////////////////////////
else{ ?>

  <ul class='navbar-nav'>
    <li class='nav-item'>
        <a class='nav-link' href='home.php'>Home</a>
    </li>
    </ul> 
    <ul class='navbar-nav navbar-right'>
        <li class='nav-item'>
            <a class='nav-link' href='login.php'>Login
                <i class="glyphicon glyphicon-user"></i>
            </a>
        </li>
    </ul> 
    </div>
    <!--/container-->
</nav>
<!--End of Nav if looged out -->

<?php } //end of nav.php ?>

