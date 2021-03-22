<?php

$stmt=$db->prepare($sql);
if($stmt->execute()){
    $stmt->bind_result($id, $city,$state,$address,$zip,$email,$password,$username,$fname,$lname,$department,$level);
    while($stmt->fetch()){
        $levelname='';
        if($level==2){
            $levelname='Manager';
        }elseif($level==1){
            $levelname='Department Head';
        }else{
            $levelname='Associate';
        }

            

        echo"
        <div class='container'>
           <form action='employee.php' method='POST'>
                <div class='form-row'>
                    <div class ='col-sm-2 col-md-2'>
                        <label for'id'>ID:</label>
                        <input type='text'class='form-control'name='id' value='$id'disabled>
                    </div>
                    <div class ='col-sm-5 col-md-5'>
                        <label for'fname'>First Name:</label>
                        <input type='text'class='form-control'name='fname' value='$fname'>
                    </div>
                    <div class ='col-sm-5 col-md-5'>
                        <label for'lname'>Last Name:</label>
                        <input type='text'class='form-control'name='lname' value='$lname'>
                    </div>
                </div>
                <div class='form-row'>
                    <div class ='col-sm-12 col-md-12'>
                        <label for'address'>Address:</label>
                        <input type='text'class='form-control'name='address' value='$address'>
                    </div>
                </div>
                <div class='form-row'>
                    <div class ='col-sm-4 col-md-4'>
                        <label for'city'>City:</label>
                        <input type='text'class='form-control'name='city' value='$city'>
                    </div>
                    <div class ='col-sm-4 col-md-4'>
                        <label for'state'>State:</label>
                        <input type='text'class='form-control'name='state' value='$state'>
                    </div>
                    <div class ='col-sm-4 col-md-4'>
                        <label for'zip'>Zip Code:</label>
                        <input type='text'class='form-control'name='zip' value='$zip'>
                    </div>
                </div>
                <div class='form-row'>
                    <div class ='col-sm-4 col-md-4'>
                        <label for'username'>Username:</label>
                        <input type='text'class='form-control'name='username' value='$username'>
                    </div>
                    <div class ='col-sm-4 col-md-4'>
                        <label for'email'>Email:</label>
                        <input type='text'class='form-control'name='email' value='$email'>
                    </div>
                    <div class ='col-sm-4 col-md-4'>
                        <label for'password'>Password:</label>
                        <input type='text'class='form-control'name='password' value='$password'>
                    </div>
                </div>
                <div class='form-row'>
                    <div class ='col-sm-3 col-md-3'>
                        <label for'department'>Department:</label>
                        <input type='text'class='form-control'name='department' value='$department'>
                    </div>
                    <div class ='col-sm-3 col-md-3'>
                        <label for'levelname'>Authority:</label>
                        <input type='text'class='form-control'name='levelname' value='$levelname'>
                    </div>
                </div>
                <div class='form-row'>
                            <h8> What would you like to do?</h8><br>
                    <div class='col-sm-12 col-md-12 btn-group btn-group-justified'>
                            <input type='submit' class='btn btn-primary' value='INSERT' name='action'>
                            <input type='submit' class='btn btn-primary' value='UPDATE' name='action'>
                            <input type='submit' class='btn btn-primary' value='DELETE' name='action'>
                    </div>
                </div>
    </form>";


    }
}
?>
