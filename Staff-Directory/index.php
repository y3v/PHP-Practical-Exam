<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Staff Directory</title>
</head>
<style>
label{
	display:inline-block;
	width:120px;
}

form{
	margin-top:20px;
}
input[type="submit"]{
	padding:10px;
	background-color:lightgreen;
	margin-bottom:10px;
}
button[name="delete"]{
	background-color:tomato;
}
button[name="updateShow"],button[name="update"]{
	background-color:lightblue;
}
button[name="show"]{
	background-color:#3f8;
}
</style>
<body>
<h1>STAFF DIRECTORY</h1>

	<?php 
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
	    $SQLcmd = "select firstname,lastname,address,salary,branch,property,description,phone from {$table_name}";
	    
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
	?>
	<form action="view/staff.php">
		<h2>QUERIES</h2>
		<button name="show">Queries</button>
	</form>
	<form action="view/login.php">
		<h2>INSERT</h2>
		<button name="show">INSERT</button>
	</form>
	<form action="view/staff-update.php">
		<h2>UPDATE</h2>
		<button name="show">UPDATE</button>
	</form>
	<form action="view/staff-delete.php">
		<h2>DELETE</h2>
		<button name="show">DELETE</button>
	</form>
</body>
</html>