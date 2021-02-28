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
                <div class="panel-heading">Please enter:</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-4"> <!--beg old pin-->
                                <div class="input-group">
                                    Order Number:<br> <input type="text" name="id" value="" style="width: 300px;"></br>
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-4 end old pin-->
                            
                            <div class="col-lg-4"> <!--beg new pin-->
                                <div class="input-group">
                                    Last Name:<br> <input type="text" name="lname" value="" style="width: 300px;"></br>
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-4 end new pin-->
                            <div class="col-lg-6"> <!--sub button-->
                                <div class="input-group">
                                    <br> <input type ="submit" name="submit" value="SUBMIT"></br>
                                </div><!-- /input-group -->
                           </div><!-- /.col-lg-6 sub button -->
                           <div class="well col-lg-12"><!--start to show the table-->
                            <div class="panel panel-default">
                                <div call="panel-heading"><center>Invoice<center></div>
                                    <div class="panel-body">
                                        <div class = "table-responsive">
                                            <table class="table table-striped table-borderd table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Phone Number</th>
                                                        <th>Address</th>
                                                        <th>City</th>
                                                    </tr>
                                                    <tr>
                                                        <th>State</th>
                                                        <th>Zip</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Year</th>
                                                        <th>Make</th>
                                                        <th>Model</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Vin</th>
                                                        <th>Laboramt</th>
                                                        <th>Progress</th>
                                                    </tr>
                                                </thead>
                                            </div>
                                        </div>
                                    </div>
                            </div> 
                           </div><!--end show table-->

                        </div>                       
                    </div>
                </div>
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
//search Function
if(isset($_POST['submit'])) {
    $id = htmlspecialchars($_GET['id']);
    $lname= $_POST['lname'];
    $sql="SELCT * FROM project where id = '{$id}' and lanme = '{$lname}'";
    $stmt = $db->prepare($sql);
    if($stmt->execute()){
        $stmt->blind_result($id, $fname,$lname,$number, $year, $make, $model, $vin, $laboramt, $progress);
        while($stmt->fetch()){
            echo"<tr><td>
        }
}
?>

    
 <div class ='content'>          <!-- beg. Content -->

 </div>                          <!-- end Content -->
<?php
include('footer3.php');

