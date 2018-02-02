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