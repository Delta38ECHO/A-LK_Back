<?php
    session_start();
    include('header.php');
    include('navBar.php');
    require_once('connect.php');
    require_once('lib.php');

    <!-- This section verifs the login credintials with the database --> 
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $email=mysqli_real_escape_string($db,$_POST['email']);
        $password=mysqli_real_escape_string($db,$_POST['password']);

        $sql ="SELECT * FROM employee WHERE email ='$email' and password='$password'";
        $result=mysqli_query($db,$sql);
        $row= mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active=$row['active'];

        $count=mysqli_num_rows($result);

        if($count==1){
            $_SESSION['active']=true;
            $_SESSION['email']=$email;
            
            header("Location: orders.php");
            exit;
        }else{
        $loginerr='Invalid Credintials';
        } 
    }
?>

<script src="js/main.js"></script>
<div class ='login_registerbg'><!-- Content Box -->
    <div class= "col-md-5" id='LR_Box'><!-- Main Box-->
        <div id='LR_Header'><!-- LR_Header-->
            <h3>Login</h3>
            <hr>
        </div><!-- LR_Header End-->
        <div id='LR_Body'><!-- LR_Body-->
            <form action='' method='post'><!--Form Login-->
                <?php echo $loginerr; ?>
                    <div class='form-group'>
                        <label for'email'>Email</label>
                        <input type='text'class='form-control'name='email' required >
                    </div>

                    <div class='form-group'>
                        <label for'password'>Password</label>
                        <input type='text'class='form-control'name='password'required >
                    </div>

                    <button type='submit'class='btn btn-primary' value='Submit'>Login
                    </button>
            </form> <!--Form end -->
        </div><!-- LR_Body End-->
        <div id='LR_Footer'><!-- LR_Foorter-->
            <br>
            <h6><center>Not Registered yet? <a href=newregister.php>Sign Up</a><center></h6>
        </div><!-- LR_Footer End-->
    </div><!-- Main Box End -->
    <br>
    <br>
    <br>
    <br>
    <br>
</div><!--content 1 end -->               



<?php
include('footer.php');

