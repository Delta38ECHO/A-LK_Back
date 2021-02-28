<?php
include('header.php');   /////// implements header
include('navBar.php');   /////// implements navBar
include_once('lib.php'); /////// implements library 
?>
<?php
//////////////////////////////// Information you can show if logged in
if(isactive()){ 
?>
      <!-- <h1><strong><center>Welcome <?php echo $user; ?><center><strong></h1> -->
       <h1><strong><center>Ex <center><strong></h1>
       <h1><center>Example.<center></h1>
//////////////////////////////// Information that can be shown if not logged in
else{ ?>
    <h1><strong><center>Welcome Guest<center><strong></h1>
    <h4><strong><center>Login to start using app.<center><strong></h4>
    <br>
   
   
<?php }
?>

    
 <div class ='content'>          <!-- beg. Content -->
    <div class='row'>
        <div class='col-sm-2 col-md-2 '>
        </div>
        <div class='col-sm-8 col-md-8 '>
        
        </div>
        <div class='col-sm-2 col-md-2 '>
        </div>
    <div class='row'>
    </div>
    <div class='row'>
    </div>
 </div>                          <!-- end Content -->
<?php
include('footer.php');

