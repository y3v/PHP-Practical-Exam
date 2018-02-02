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
	<form action="../controller/staff-insert.php">
		<div>
			<label>Firstname: </label>
			<input type="text" name="firstname" value="<?php if(isset($_GET['firstname'])){echo $_GET['firstname'];} ?>" />
		</div>
		<div>
			<label>Lastname: </label>
			<input type="text" name="lastname" value="<?php if(isset($_GET['lastname'])){echo $_GET['lastname'];} ?>"/>
		</div>
		<div>
			<label>Address: </label>
			<input type="text" name="address" value="<?php if(isset($_GET['address'])){echo $_GET['address'];} ?>"/>
		</div>
		<div>
			<label>Salary: </label>
			<input type="number" step="0.01" name="salary" value="<?php if(isset($_GET['salary'])){echo $_GET['salary'];} ?>" />
		</div>
		<div>
			<label>Branch: </label>
			<input type="text" name="branch" value="<?php if(isset($_GET['branch'])){echo $_GET['branch'];} ?>" />
		</div>
		<div>
			<label>Property: </label>
			<input type="text" name="property" value="<?php if(isset($_GET['property'])){echo $_GET['property'];} ?>" />
		</div>
		<div>
			<label>Description: </label>
			<input type="text" name="description" value="<?php if(isset($_GET['description'])){echo $_GET['description'];} ?>" />
		</div>
		<div>
			<label>Phone Number: </label>
			<input type="number" name="phone" value="<?php if(isset($_GET['phone'])){echo $_GET['phone'];} ?>" />
		</div>
		<button name="show">Insert</button>
	</form>
	
</body>
</html>