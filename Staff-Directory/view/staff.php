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
	<form action="../controller/staff_service.php">
		<h2>Search Staff by name</h2>
		<div>
			<label>Name:</label>
			<input type="text" name="name" value="<?php if(isset($_GET['jobCodeUpdate'])){echo $_GET['jobCodeUpdate'];} ?>" />
		</div>
		<button name="show">Search by name</button>
	</form>
	<form action="../controller/staff_service.php">
		<h2>Search for Address and Phone number of Staff memeber</h2>
		<div>
			<label>Last Name:</label>
			<input type="text" name="lname" value="<?php if(isset($_GET['jobCodeUpdate'])){echo $_GET['jobCodeUpdate'];} ?>" />
		</div>
		<button name="show">Search by Last name</button>
	</form>
	<form action="../controller/staff_service.php">
		<h2>See who makes more/less than a given salary</h2>
		<div>
			<label>Salary:</label>
			<input type="number" name="salary" value="<?php if(isset($_GET['jobCodeUpdate'])){echo $_GET['jobCodeUpdate'];} ?>" />
		</div>
		<div>
			<input type="radio" name="moreOrLess" value="more" checked><label>More</label>
			<input type="radio" name="moreOrLess" value="less"><label>Less</label>
		</div>
		<button name="show">Search by Salary</button>
	</form>
	<form action="../controller/staff_service.php">
		<h2>See which branch employee works at</h2>
		<div>
			<label>Employee name</label>
			<input type="text" name="branch" value="<?php if(isset($_GET['jobCodeUpdate'])){echo $_GET['jobCodeUpdate'];} ?>" />
		</div>
		<button name="show">Search by Branch</button>
	</form>
	<form action="../controller/staff_service.php">
		<h2>Search by which properties they administer</h2>
		<div>
			<label>Employee Name</label>
			<input type="text" name="property" value="<?php if(isset($_GET['jobCodeUpdate'])){echo $_GET['jobCodeUpdate'];} ?>" />
		</div>
		<button name="show">Search by Property</button>
	</form>
	<form action="../controller/staff_service.php">
		<h2>See All Staff Descriptions!</h2>
		<button name="description" value="see">See all Staff Descriptions!</button>
		<input type="hidden" name="id" value="0"/>
	</form>
	
</body>
</html>