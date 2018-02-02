<?php

if(!isset($_SESSION)){
    session_start();
}

$server = 'localhost';
$user = 'root';
$pass = 'root';
$mydb = 'staff_master';
$table_name = 'staff';


if (isset($_GET['name'])){
    $connect = mysqli_connect($server, $user, $pass, $mydb);
    if (!$connect) {
        print("can't connect");
        die("Cannot connect to $server using $user");
    }
    else {
        $SQLcmd = "select firstname,lastname,address,salary,branch,property,description,phone from {$table_name} where firstname='{$_GET['name']}' or lastname='{$_GET['name']}'";
        
        mysqli_select_db($connect, $mydb);
        $results = mysqli_query($connect, $SQLcmd);
        echo "<table>
                <tr>
                    <th style='border:2px solid black'>First Name</th>
                    <th style='border:2px solid black'>Last Name</th>
                    <th style='border:2px solid black'>Address</th>
                    <th style='border:2px solid black'>Salary</th>
                    <th style='border:2px solid black'>Branch</th>
                    <th style='border:2px solid black'>Property</th>
                    <th style='border:2px solid black'>Description</th>
                    <th style='border:2px solid black'>Phone Number</th>
                </tr>";
        while ($row = mysqli_fetch_row($results)){
            echo "<tr>";
            foreach ($row as $field) {
                echo "<td style='border:1px solid black'>". $field ."</td>";
            }
        }
        echo "</table>";
       /*  else {
            die ("Table Select Failed SQLcmd=$SQLcmd");
        } */
    }
    mysqli_close($connect);
}

if (isset($_GET['lname'])){
    $connect = mysqli_connect($server, $user, $pass, $mydb);
    if (!$connect) {
        print("can't connect");
        die("Cannot connect to $server using $user");
    }
    else {
        $SQLcmd = "select firstname,lastname,address,phone from {$table_name} where lastname='{$_GET['lname']}'";
        
        mysqli_select_db($connect, $mydb);
        $results = mysqli_query($connect, $SQLcmd);
        echo "<table>
                <tr>
                    <th style='border:2px solid black'>First Name</th>
                    <th style='border:2px solid black'>Last Name</th>
                    <th style='border:2px solid black'>Address</th>
                    <th style='border:2px solid black'>Phone Number</th>
                </tr>";
        while ($row = mysqli_fetch_row($results)){
            echo "<tr>";
            foreach ($row as $field) {
                echo "<td style='border:1px solid black'>". $field ."</td>";
            }
        }
        echo "</table>";
        /*  else {
         die ("Table Select Failed SQLcmd=$SQLcmd");
         } */
    }
    mysqli_close($connect);
}

if (isset($_GET['salary'])){
    $connect = mysqli_connect($server, $user, $pass, $mydb);
    if (!$connect) {
        print("can't connect");
        die("Cannot connect to $server using $user");
    }
    else {
        if ($_GET['moreOrLess'] == "more"){
            $SQLcmd = "select id,firstname,lastname from {$table_name} where salary > {$_GET['salary']}";
        }
        else{
            $SQLcmd = "select id,firstname,lastname from {$table_name} where salary < {$_GET['salary']}";
        }
        
        mysqli_select_db($connect, $mydb);
        $results = mysqli_query($connect, $SQLcmd);
        echo "<table>
                <tr>
                    <th style='border:2px solid black'>Staff ID</th>
                    <th style='border:2px solid black'>First Name</th>
                    <th style='border:2px solid black'>Last Name</th>
                </tr>";
        while ($row = mysqli_fetch_row($results)){
            echo "<tr>";
            foreach ($row as $field) {
                echo "<td style='border:1px solid black'>". $field ."</td>";
            }
        }
        echo "</table>";
        /*  else {
         die ("Table Select Failed SQLcmd=$SQLcmd");
         } */
    }
    mysqli_close($connect);
}

if (isset($_GET['branch'])){
    $connect = mysqli_connect($server, $user, $pass, $mydb);
    if (!$connect) {
        print("can't connect");
        die("Cannot connect to $server using $user");
    }
    else {
        $SQLcmd = "select branch from {$table_name} where firstname='{$_GET['branch']}' or lastname='{$_GET['branch']}'";
        
        mysqli_select_db($connect, $mydb);
        $results = mysqli_query($connect, $SQLcmd);
        echo "<table>
                <tr>
                    <th style='border:2px solid black'>Branch</th>
                </tr>";
        while ($row = mysqli_fetch_row($results)){
            echo "<tr>";
            foreach ($row as $field) {
                echo "<td style='border:1px solid black'>". $field ."</td>";
            }
        }
        echo "</table>";
        /*  else {
         die ("Table Select Failed SQLcmd=$SQLcmd");
         } */
    }
    mysqli_close($connect);
}

if (isset($_GET['property'])){
    $connect = mysqli_connect($server, $user, $pass, $mydb);
    if (!$connect) {
        print("can't connect");
        die("Cannot connect to $server using $user");
    }
    else {
        $SQLcmd = "select property from {$table_name} where firstname='{$_GET['property']}' or lastname='{$_GET['property']}'";
        
        mysqli_select_db($connect, $mydb);
        $results = mysqli_query($connect, $SQLcmd);
        echo "<table>
                <tr>
                    <th style='border:2px solid black'>Branch Description</th>
                </tr>";
        while ($row = mysqli_fetch_row($results)){
            echo "<tr>";
            foreach ($row as $field) {
                echo "<td style='border:1px solid black'>". $field ."</td>";
            }
        }
        echo "</table>";
        /*  else {
         die ("Table Select Failed SQLcmd=$SQLcmd");
         } */
    }
    mysqli_close($connect);
}

if (isset($_GET['description'])){
    $connect = mysqli_connect($server, $user, $pass, $mydb);
    if (!$connect) {
        print("can't connect");
        die("Cannot connect to $server using $user");
    }
    else {
        $SQLcmd = "select count(*) from staff;";
        mysqli_select_db($connect, $mydb);
        $results = mysqli_query($connect, $SQLcmd);
        $count;
        $id = $_GET['id'];
        
        while ($row = mysqli_fetch_row($results)){
            foreach ($row as $field) {
                $count = $field; //number of employees
            }
        }
        
        
        if (isset($_GET['next'])){
           //echo $GLOBALS['id'] . " asdf " . $GLOBALS['count'] . "dafa";
           if ($GLOBALS['id'] < $GLOBALS['count'] and $GLOBALS['id'] >= 0){
               $GLOBALS['id'] += $_GET['next'];
            }
            else if ($GLOBALS['id'] == $GLOBALS['count'] and $_GET['next']=='1'){
                $GLOBALS['id'] = 1;
            }
            else if ($GLOBALS['id'] < 0 and $_GET['next']=='-1'){
                $GLOBALS['id'] = 0;
            }
        }
        
        $SQLcmd = "select firstname,lastname, description from {$table_name} where id={$id}";
        $results = mysqli_query($connect, $SQLcmd);
        
        echo "<table>
                <tr>
                    <th style='border:2px solid black'>First Name</th>
                    <th style='border:2px solid black'>Last Name</th>
                    <th style='border:2px solid black'>Description</th>
                </tr>";
        while ($row = mysqli_fetch_row($results)){
            echo "<tr>";
            foreach ($row as $field) {
                echo "<td style='border:1px solid black'>". $field ."</td>";
            }
        }
        echo '</table>
        <form action="../controller/staff_service.php">
    		<button name="next" value="1">NEXT</button>
            <button name="next" value="-1">PREVIOUS</button>
            <input type="hidden" name="description" value="see"/>
            <input type="hidden" name="id" value="'. $GLOBALS["id"] .'"/>
	    </form>
        ' 
            ;
    }
    mysqli_close($connect);
}


/*

if (isset($_GET['delete'])){
    $connect = mysqli_connect($server, $user, $pass, $mydb);
    if (!$connect) {
        print("can't connect");
        die("Cannot connect to $server using $user");
    }
    else {
        $SQLcmd = "delete from {$table_name} where job_code = {$_GET['delete']}";
        mysqli_select_db($connect, $mydb);
        if (mysqli_query($connect, $SQLcmd)){
            print "Record Deleted!";
        } else {
            die ("Table Insertion Failed SQLcmd=$SQLcmd");
        }
    }
    mysqli_close($connect);
}

if (isset($_GET['update'])){
    $connect = mysqli_connect($server, $user, $pass, $mydb);
    if (!$connect) {
        print("can't connect");
        die("Cannot connect to $server using $user");
    }
    else {
        $SQLcmd = "update {$table_name}
        set company_name=\"{$_GET['companyName']}\",designation=\"{$_GET['designation']}\",salary={$_GET['salary']},interview_date=". (string)$_GET['dateInterview'] .",vacancies={$_GET['vacancy']}
        where job_code={$_GET['jobCode']}";
        
        mysqli_select_db($connect, $mydb);
        if (mysqli_query($connect, $SQLcmd)){
            print "Update was successful!";
        } else {
            die ("Table Update Failed SQLcmd=$SQLcmd");
        }
    }
    mysqli_close($connect);
}

include "job_master.html";
*/

?>