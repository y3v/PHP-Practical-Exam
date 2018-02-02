<?php

if(isset($_POST['login'])){
    
    if($_POST['uname'] == "admin" and $_POST['pword']=='admin'){
        header("location: ../view/staff-insert.php");
    }
    else{
        header("location: ../view/login.php");
    }
}