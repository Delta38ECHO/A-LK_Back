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

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="well col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Please enter username</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-4"> <!--beg user name-->
                                <div class="input-group">
                                    Username:<br> <input type="text" name="username" value="" style="width: 300px;"></br>
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-4 end user name-->
                        </div>
                    </div>
                </div>
            <div class="panel panel-default">
                <div class="panel-heading">Change Pin</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-4"> <!--beg old pin-->
                                <div class="input-group">
                                    Current Password:<br> <input type="text" name="currentpin" value="" style="width: 300px;"></br>
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-4 end old pin-->
                            
                            <div class="col-lg-4"> <!--beg new pin-->
                                <div class="input-group">
                                    New Password:<br> <input type="text" name="newpin" value="" style="width: 300px;"></br>
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-4 end new pin-->
                               
                            <div class="col-lg-4"> <!--beg check pin-->
                                <div class="input-group">
                                    Renter Password:<br> <input type="text" name="checkpin" value="" style="width: 300px;"></br>
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-4 end check pin-->
                            <div class="col-lg-6"> <!--sub button-->
                                <div class="input-group">
                                    <br> <input type ="submit" name="submit" value="SUBMIT"></br>
                                </div><!-- /input-group -->
                           </div><!-- /.col-lg-6 sub button -->
                        </div>                       
                    </div>
                </div>
            <div class="panel panel-default">
                <div class="panel-heading">Change Address</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-4"> <!--beg address street-->
                                <div class="input-group">
                                    Address:<br> <input type="text" name="address1" value="" style="width: 300px;"></br>
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-4 end address street-->
                            <div class="col-lg-4"> <!--beg city street-->
                                <div class="input-group">
                                    City:<br> <input type="text" name="city1" value="" style="width: 300px;"></br>
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-4 end city street-->
                            <div class="col-lg-4"> <!--beg state street-->
                                <div class="input-group">
                                    State:<br> <input type="text" name="state1" value="" style="width: 300px;"></br>
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-4 end address state-->
                            <div class="col-lg-4"> <!--beg zip-->
                                <div class="input-group">
                                    Zip:<br> <input type="text" name="zip1" value="" style="width: 300px;"></br>
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-4 end zip-->
                            <div class="col-lg-6"> <!--update button-->
                                <div class="input-group">
                                    <br> <input type ="submit" name="update" value="UPDATE"></br>
                                </div><!-- /input-group -->
                           </div><!-- /.col-lg-6 sub button -->
                        </div>
                    </div>
                </div>
</div> <!--change address end-->
            </div>
        </div>
    </div>
</div>
    <!--jin modify end-->
    

    </div>                          <!-- end Content -->
<?php }
//////////////////////////////// Information that can be shown if not logged in
else{ ?>
    <h1><strong><center>Login to enter settings.<center><strong></h1>
<?php }
?>


<?php
//change password function
if(isset($_POST['submit'])) {
//    <!--grab input value-->
    $cpin = $_POST['currentpin'];
    $newpin = $_POST['newpin'];
    $checkpin = $_POST['checkpin'];
    $username = $_POST['username'];
  //  <!--grab stored password-->
    $user=mysqli_real_escape_string($db,$_POST['user']);
    $password=mysqli_real_escape_string($db,$_POST['password']);
    $sql ="SELECT user_password ='$password' FROM Users WHERE user_email ='$user'";
    if($cpin != $password){
        echo "Wrong Password";
    }
    else if($checkpin != $newpin){
        echo "New passwords do not match please reenter your password";
    }
    else{
        //need updata query
    }
    }
?>

<?php
//change address
if(isset($_POST['update'])){
    //grab input value
    $address1 = $_POST('address1');
    $city1 = $_POST('city1');
    $state1 = $_POST('state1');
    $zip1 = $_POST('zip1');
    $suername = $_POST('username');
    //to update it need find the information regard the username .
}
?>
    
 <div class ='content'>          <!-- beg. Content -->

 </div>                          <!-- end Content -->
<?php
include('footer3.php');

