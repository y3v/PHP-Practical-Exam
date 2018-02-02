<?php

if(!isset($_SESSION)){
    session_start();
}

$server = 'localhost';
$user = 'yev';
$pass = 'admin';
$mydb = 'ykantoro_mydb';
$table_name = 'staff';


if (isset($_GET['salary'])){
    $connect = mysqli_connect($server, $user, $pass, $mydb);
    if (!$connect) {
        print("can't connect");
        die("Cannot connect to $server using $user");
    }
    else {
        $SQLcmd = "update {$table_name}
        set salary={$_GET['salary']}
        where id={$_GET['id']}";
        
        mysqli_select_db($connect, $mydb);
        if (mysqli_query($connect, $SQLcmd)){
            print "Update was successful!";
        } else {
            die ("Table Update Failed SQLcmd=$SQLcmd");
        }
    }
    mysqli_close($connect);
}

if (isset($_GET['address'])){
    $connect = mysqli_connect($server, $user, $pass, $mydb);
    if (!$connect) {
        print("can't connect");
        die("Cannot connect to $server using $user");
    }
    else {
        $SQLcmd = "update {$table_name}
        set address='{$_GET['address']}'
        where id={$_GET['id']}";
        
        mysqli_select_db($connect, $mydb);
        if (mysqli_query($connect, $SQLcmd)){
            print "Update was successful!";
        } else {
            die ("Table Update Failed SQLcmd=$SQLcmd");
        }
    }
    mysqli_close($connect);
}

header("location: ../index.php");