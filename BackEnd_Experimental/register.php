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
                            <form action='register.php' method='post'>
                            <div class='form-group'>
                                <label for'user_fname'>First Name:</label>
                                <input type='text'class='form-control'name='user_fname'required >
                            </div>
                            <div class='form-group'>
                                <label for'user_name'>Username:</label>
                                <input type='text'class='form-control'name='user_name' required>
                            </div>
                            <div class='form-group'>
                                <label for'user_email'>Email:</label>
                                <input type='text'class='form-control'name='user_email' required>
                            </div>
                            <div class='form-group'>
                                <label for'user_passwaord'>Password:</label>
                                <input type='text'class='form-control'name='user_password' required>
                            </div>
                            <div class='form-group'>
                                <label for'user_confirm'>Confirm Password:</label>
                                <input type='text'class='form-control'name='user_confirm' required>
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
                $user_fname='';
                $user_name='';
                $user_email='';
                $user_password='';
                $user_confirm='';

                //cleaning the inputs/////////////////////////////////////////
                if(isset($_POST['user_fname']) && !empty($_POST['user_fname'])){
                    $user_fname=clean($_POST['user_fname']);
                }
                if(isset($_POST['user_name']) && !empty($_POST['user_name'])){
                    $user_name=clean($_POST['user_name']);
                }
                if(isset($_POST['user_email']) && !empty($_POST['user_email'])){
                    $user_email=clean($_POST['user_email']);
                }
                if(isset($_POST['user_password']) && !empty($_POST['user_password'])){
                    $user_password=clean($_POST['user_password']);
                }
                if(isset($_POST['user_confirm']) && !empty($_POST['user_confirm'])){
                    $user_confirm=clean($_POST['user_confirm']);
                }

                //Making sure there are no empty spots and passwords match//////
                $err='';
                if($user_fname==''){
                    $err.="<br>Please Enter A First Name";
                }
                if($user_name==''){
                    $err.="<br>Please Enter A Username";
                }
                if($user_email==''){
                    $err.="<br>Please Enter A Email";
                }
                if(filter_var($user_email, FILTER_VALIDATE_EMAIL)){
                  }else{
                      $err .="<br>Email Is Invalid";
                }
                if($user_password==''){
                    $err.="<br>Please Enter A Password";
                }
                if($user_confirm==''){
                    $err.="<br>Please Confrim Password";
                }
                if($user_password!= $user_confirm){
                    $err.="<br>Passwords Do Not Match";
                }
                if($err != ''){
                    echo $err;
                    exit;
                }

                //checking that there is not another
                $sql="SELECT user_id FROM Users WHERE user_email='{$user_email}'";
                if($res = $db->query($sql)){
                    if($res->num_rows !=0){
                        $err .= "<br>Email Is Already In Use";
                    }else{
                        //$hashedpassword = password_hash($user_password, PASSWORD_DEFAULT);
                        $sql="INSERT INTO Users(user_fname, user_uname, user_email, user_password)
                              VALUES('{$user_fname}','{$user_name}','{$user_email}','{$user_password}')";                

                //if successful 
                        if($db->query($sql)){
                            if(true){
                                header("Location: login.php");
                            }else{
                                //failed
                            }
                        }}
                        }else{
                        //dont allow to insert into user
                    }
                    
                }




include('footer.php');

