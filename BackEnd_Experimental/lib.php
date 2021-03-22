<?php 
session_start();

function isActive(){
    if(isset($_SESSION['active'])){
        return($_SESSION['active']);
    }
    return(false);
}
function redirHom(){
    header('Location: home.php');
    exit();
}
?>
