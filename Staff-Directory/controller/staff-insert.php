<?php

if(!isset($_SESSION)){
    session_start();
}

$server = 'localhost';
$user = 'yev';
$pass = 'admin';
$mydb = 'ykantoro_mydb';
$table_name = 'staff';

$connect = mysqli_connect($server, $user, $pass, $mydb);
if (!$connect) {
    print("can't connect");
    die("Cannot connect to $server using $user");
}
else {
    $SQLcmd = "insert into staff(firstname, lastname, address, salary, branch, property, description, phone)
        values('{$_GET['firstname']}',\"{$_GET['lastname']}\",\"{$_GET['address']}\",{$_GET['salary']},'{$_GET['branch']}','{$_GET['property']}','{$_GET['description']}',{$_GET['phone']})" ;
    
    echo $SQLcmd;
    mysqli_select_db($connect, $mydb);
    if (mysqli_query($connect, $SQLcmd)){
        print "Insert was successful!";
    } else {
        die ("Table Insertion Failed SQLcmd=$SQLcmd");
    }
}
mysqli_close($connect);

header("location: ../index.php");
