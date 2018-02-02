<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
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
<h1>INSERT A STAFF MEMBER</h1>
<h2>Update Salary</h2>
	<form action="../controller/staff-update.php">
		<div>
			<label>Staff Number: </label>
			<input type="text" name="id" value="" />
		</div>
		<div>
			<label>Salary: </label>
			<input type="number" name="salary" value=""/>
		</div>		
		<button name="show">Update</button>
</form>
<h2>Update Address</h2>
	<form action="../controller/staff-update.php">
		<div>
			<label>Staff Number: </label>
			<input type="text" name="id" value="" />
		</div>
		<div>
			<label>Address: </label>
			<input type="number" name="address" value=""/>
		</div>		
		<button name="show">Update</button>
</form>
	
</body>
</html>