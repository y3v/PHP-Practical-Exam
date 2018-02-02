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
<h1>DELETE THE DESCRIPTION OF A MEMBER OF STAFF</h1>
<h2>Update Salary</h2>
	<form action="../controller/staff-delete.php">
		<div>
			<label>Staff Number: </label>
			<input type="text" name="id" value="" />
		</div>	
		<button name="show">Delete</button>
</form>
	
</body>
</html>