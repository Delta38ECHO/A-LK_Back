<?php
session_start();
include('header.php');
include('navBar.php');
require_once('connect.php');
require_once('lib.php');
?>
        
        <div class ='login_registerbg'><!--content 1-->
            <!-- Main Box -->
            <div class= "col-md-5" id='LR_Box'>
                    <!-- LR_Header-->
                    <div id='LR_Header'>
                        <h3>Register</h3>
                        <hr>
                    </div><!-- LR_Header End-->
                    <!-- LR_Body-->
                    <div id='LR_Body'>
                            <!--Form login -->
                            <form action='newregister.php' method='post' class="needs-validation" nonvalidate>
                            <div class='form-row'>
<!-- First Name -->             <div class="form-group col-md-4 col-sm-4">
                                     <label for'fname'>First:</label>
                                     <input type='text'class='form-control'name='fname'required >
                                     <div class="valid-feedback">Valid.</div>
                                     <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
<!-- Last Name -->              <div class="form-group col-md-4 col-sm-4">
                                     <label for'lname'>Last:</label>
                                     <input type='text'class='form-control'name='lname'required >
                                     <div class="valid-feedback">Valid.</div>
                                     <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                            </div>
                            <div class='form-row'>
<!-- Adress -->                  <div class='form-group col-md-12 col-sm-12'>
                                     <label for'adress'>Adress:</label>
                                     <input type='text'class='form-control'name='adress' required>
                                     <div class="valid-feedback">Valid.</div>
                                     <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                            </div>
                            <div class='form-row'>
<!-- City -->                   <div class='form-group col-md-6 col-sm-6'>
                                     <label for'city'>City:</label>
                                     <input type='text'class='form-control'name='city' required>
                                     <div class="valid-feedback">Valid.</div>
                                     <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
<!-- State -->                  <div class='form-group col-md-2 col-sm-2'>
                                     <label for'state'>State:</label>
                                     <input type='text'class='form-control'name='state' required>
                                     <div class="valid-feedback">Valid.</div>
                                     <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
<!-- Zip Code -->               <div class='form-group col-md-4 col-sm-4'>
                                     <label for'zip'>Zip Code:</label>
                                     <input type='text'class='form-control'name='zip' required>
                                     <div class="valid-feedback">Valid.</div>
                                     <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                            </div>
                            <div class='form-row'>
<!-- UserName -->               <div class='form-group col-md-4 col-sm-4'>
                                     <label for'username'>Username:</label>
                                     <input type='text'class='form-control'name='username' required>
                                     <div class="valid-feedback">Valid.</div>
                                     <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
<!-- Email -->                  <div class='form-group col-md-8 col-sm-8'>
                                     <label for'email'>Email:</label>
                                     <input type='text'class='form-control'name='email' required>
                                     <div class="valid-feedback">Valid.</div>
                                     <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                            </div>
                            <div class='form-row'>
<!-- Password -->               <div class='form-group col-md-6 col-sm-6'>
                                     <label for'password'>Password:</label>
                                     <input type='text'class='form-control'name='password' required>
                                     <div class="valid-feedback">Valid.</div>
                                     <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                            </div>
                               <button type='submit'class='btn btn-primary' value='Submit'>Sign Up
                               </button>
                            </form> <!--Form end -->
                    </div><!-- LR_Body End-->
<?php //

?>


                    <!-- LR_Footer-->
                    <div id='LR_Footer'>
                        <br>
                        <h6><center>All Ready Registered? <a href=login.php>Login</a><center></h6>
                    </div><!-- LR_Footer End-->
            </div><!-- Main Box End -->
                <br>
                <br>
                <br>
                <br>
                <br>
            </div><!--content 1 end --> 
        <?php
            function clean($val){
                return(htmlspecialchars($val));
            }
            if(isset($_POST)){
                $Fname='';
                $Lname='';
                $Adress='';
                $City='';
                $State='';
                $Zip='';
                $Username='';
                $Email='';
                $Password='';

//cleaning the inputs/////////////////////////////////////////
                if(isset($_POST['fname']) && !empty($_POST['fname'])){
                    $Fname=clean($_POST['fname']);
                }
                if(isset($_POST['lname']) && !empty($_POST['lname'])){
                    $Lname=clean($_POST['lname']);
                }
                if(isset($_POST['adress']) && !empty($_POST['adress'])){
                    $Adress=clean($_POST['adress']);
                }
                if(isset($_POST['city']) && !empty($_POST['city'])){
                    $City=clean($_POST['city']);
                }
                if(isset($_POST['state']) && !empty($_POST['state'])){
                    $State=clean($_POST['state']);
                }
                if(isset($_POST['zip']) && !empty($_POST['zip'])){
                    $Zip=clean($_POST['zip']);
                }
                if(isset($_POST['username']) && !empty($_POST['username'])){
                    $Username=clean($_POST['username']);
                }
                if(isset($_POST['email']) && !empty($_POST['email'])){
                    $Email=clean($_POST['email']);
                }
                if(isset($_POST['password']) && !empty($_POST['password'])){
                    $Password=clean($_POST['password']);
                }

                /*Making sure there are no empty spots and passwords match//////
                if($Password!= $ConfirmPass){
                    $err.="<br>Passwords Do Not Match";
                }
                if($err != ''){
                    echo $err;
                    exit;
                }*/

//checking that there is not another
                $sql="SELECT email FROM employee WHERE email='{$Email}'";
                if($res = $db->query($sql)){
                    if($res->num_rows !=0){
                        $err .= "<br>Email Is Already In Use";
                    }else{
                        //$hashedpassword = password_hash($user_password, PASSWORD_DEFAULT);
$sql="INSERT INTO employee (fname, lname, address, city, state, zip, username, email, password)
      VALUES('{$Fname}','{$Lname}','{$Adress}','{$City}','{$State}','{$Zip}','{$Username}','{$Email}','{$Password}')"; 
                //if successful 
                        if($db->query($sql)){
                            if(true){
                                header("Location: login.php");exit;
                            }else{
                             echo "Error"; //failed
                            }
                        }
                        }
                        }else{
                        //dont allow to insert into user
                    }
                    
                }




include('footer.php');

