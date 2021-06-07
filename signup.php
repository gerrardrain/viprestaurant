<?php
 	include("connection.php");
  	include("functions.php");
?>  

<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
	<style type="text/css">
	#text{
		border-radius: 5px;
		padding:4px;
		border:solid thin #aaa;
		width:100%;
	}

	#button{

		padding:15px;
		width:90px;
		color: white;
		background-color:blue;
		border:none;
	}


    #box{

    	background-color:grey;
    	margin:auto;
    	width:500px;
    	padding:25px;
    }
	</style>
<body>

<?php include "navbar.php"; ?>

	<div id="box">
<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
	//something was posted
	$user_name = $_POST['user_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	

	if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
	{
		//save to database
		$user_id = random_num(25);
		$query = "insert into users 
		(user_id,user_name,password,email) values ('$user_id','$user_name','$password','$email')";

		mysqli_query($con, $query);

		header("Location: login.php");
		die;

	}else
	{
		echo "Please enter valid information!";
	}
}

?>
		<form method="post">
			<div style="font-size: 15px;margin: 10px;color: white">Signup</div>
			Username: <input id="text" type="text" name="user_name" required><br><br>
			Email: <input id="text" type="string" name="email" required><br><br>
			Password: <input id="text" type="password" name="password" required><br><br>
			

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click here to Login</a><br><br>
		</form>
	</div>
</body>
</html>