<?php
include('header.php');   /////// implements header
include('navBar.php');   /////// implements navBar
include_once('lib.php'); /////// implements library
require_once('connect.php');

function clean($val){
    return(htmlspecialchars($val));
}
    ////////////////////////////sanitize for update and insert
    if(isset($_POST['id']) && !empty($_POST['id'])){
       $id=clean($_POST['id']);
    }
    if(isset($_POST['fname']) && !empty($_POST['fname'])){
       $fname=clean($_POST['fname']);
    }
    if(isset($_POST['lname']) && !empty($_POST['lname'])){
       $lname=clean($_POST['lname']);
    }
    if(isset($_POST['address']) && !empty($_POST['address'])){
       $adsress=clean($_POST['address']);
    }
    if(isset($_POST['city']) && !empty($_POST['city'])){
       $city=clean($_POST['city']);
    }
    if(isset($_POST['state']) && !empty($_POST['state'])){
       $state=clean($_POST['state']);
    }
    if(isset($_POST['zip']) && !empty($_POST['zip'])){
       $zip=clean($_POST['zip']);
    }
    if(isset($_POST['username']) && !empty($_POST['username'])){
       $username=clean($_POST['username']);
    }
    if(isset($_POST['email']) && !empty($_POST['email'])){
       $email=clean($_POST['email']);
    }
    if(isset($_POST['password']) && !empty($_POST['password'])){
       $password=clean($_POST['password']);
    }
    if(isset($_POST['department']) && !empty($_POST['department'])){
       $department=clean($_POST['department']);
    }
    if(isset($_POST['level']) && !empty($_POST['level'])){
       $level=clean($_POST['level']);
    }
    
if(isset($_POST['action']) && !empty($_POST['action'])){
    switch($_POST['action']){
    case"INSERT":
        $sql = "INSERT INTO employee (fname,lname,username,email,password,address,city,state,zip,department,level) VALUES('$fname','$lname','$username','$email','$password','$address','$city','$state','$zip','$department','$level')";
        if($db->query($sql) ===TRUE){
            echo"Recorded Succesful";
        }else{
            echo"Error updating record: ".$db->error;
        }
        break;
    case"UPDATE":
        $sql="UPDATE employee SET fname='$fname',lname='$lname',username='$username',email='$email',password='$password',address='$address',city='$city',state='$state',zip='$zip',department='$department',level='$level' WHERE id='$id'";     
        if($db->query($sql) ===TRUE){
            echo"Recorded Successful";
        }else{
            echo"Error updating record: ".$db->error;
        }
        break;
    case"DELETE":
        $sql="DELETE FROM employee WHERE id='$id'";
        if($db->query($sql) ===TRUE){
            echo"Recorded Successful";
        }else{
            echo"Error updating record: ".$db->error;
        }
        break;
    }
    //$db->query($sql);
}

if(isset($_GET['id'])){
    $id=htmlspecialchars($_GET['id']);
    $sql="select * from employee where id='{$id}'";
    include('showUser.php');
?>

<form action='employee.php' method='post'>
    <a href='employee.php' class='btn btn-success' role='button'>Return to Employee's</a>
</form>
</div>

<?php }
else{ ?>
    
 <div class ='content'>          <!-- beg. Content -->
    <div class= "container" id="ordersBox"> 
        <h1><strong><center>Employee's</center></strong></h1>
        <hr>
        <!-- New Projects -->
        <div class="row" id= "newProjects">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th></th>
                        <th>Id</th>
                        <th>First</th>
                        <th>Last</th>
                        <th>Department</th>
                        <th>Authority</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql="SELECT id, fname,lname,department, level FROM employee";
                        $stmt=$db->prepare($sql); 
                        if($stmt->execute()){
                            $stmt-> bind_result($id,$fname,$lname,$department,$level);
                            while($stmt->fetch()){
                                echo"<tr><td><a href='employee.php?id=$id'>Edit Employee </td><td>$id</td><td>$fname</td><td>$lname</td><td>$department</td><td>$level</td></tr>";
                            }
                        }
                    ?>
                </tbody>
            </table>
            
        </div>      
        <!--/New Projects -->
    </div>   
 </div>                          <!-- end Content -->
<?php }
include('footer.php');

