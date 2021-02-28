<?php
include('header.php');   /////// implements header
include('navBar.php');   /////// implements navBar
include_once('lib.php'); /////// implements library 
?>
<?php
//////////////////////////////// Information you can show if logged in
if(isactive()){ 
?>
    <h1><strong><center>Welcome <?php echo $user; ?><center><strong></h1>
    <div class ='content'>          <!-- beg. Content -->
    <!-- jin modify manage-->
    <div class = "container">
    <div class="row">
        <div class = "well col-lg-12">
            <div class ="panel panel-default">
                <div class="panel-heading">Change Password</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class = "col-lg-4"><!--current password-->
                                <div class="input-group">
                                  <center><br>Current Password:<input type="text" name="OPIN" value="" style="width: 300px;"></br><center>
                                </div>
                            </div> <!--end current password-->
                            <div class = "col-lg-4"><!--new password-->
                                <div class="input-group">
                                   <br> New Password:<input type="text" name="NPIN" value="" style="width: 300px;"></br>
                                </div>
                            </div> <!--end new password-->
                            <div class = "col-lg-4"><!--check password-->
                                <div class="input-group">
                                   <br> Current Password:<input type="text" name="id" value="" style="width: 300px;"></br>
                                </div>
                            </div> <!--end check password-->
                        </div><!--end row-->
                    </div><!--end panel-body-->
             </div><!--end panel default-->
        </div><!--end wellcol-log12 -->
    </div><!--end row-->
    </div><!--end container-->
    </div>                          <!-- end Content -->
<?php }
//////////////////////////////// Information that can be shown if not logged in
else{ ?>
    <h1><strong><center>Login to enter settings.<center><strong></h1>
<?php }
?>

    
 <div class ='content'>          <!-- beg. Content -->

 </div>                          <!-- end Content -->
<?php
include('footer3.php');

