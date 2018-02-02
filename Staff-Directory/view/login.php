
<!DOCTYPE html>
<html>
  <head lang="en">
    <title>PHP FINAL</title>
    <meta charset="utf-8">
    <meta name="author" content="Yev Kantorovich">
    <meta name="description" content="description of this pages content">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- for responsive websites -->

    <meta name="robots" content="index,follow"> <!-- default behavior: index and follows all links on page. -->
    <!-- Other behaviors: *noindex,nofollow* || *index,nofollow* || *noindex, follow* -->
    <link rel="stylesheet" href="http://<?php echo $GLOBALS['path'];?>/src\view\style\style.css">
    <link rel="canonical" href="">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->

  </head>
  <body>
    <header>
    </header>
    <main>
     <h1 id="loginh1">LOGIN TO INSTACHAT</h1>
     <h4>username and password is admin</h4>
      <form action="..\controller\login.php" method="POST">
        <label>Username:</label><input type="text" id="" name="uname" value=""><?php if(isset($_POST['login'])){ echo "INCORRECT!"; }?>
        <br>
        <label>Password:</label><input type="password" id="" name="pword" value="">
        <br>
        <input type="submit" name="login" value="Login"><br>
        <br>
      </form>
    </main>
  </body>
</html>
