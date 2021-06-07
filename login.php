<?php
if(!isset($_SESSION['user_id'])){
 	include("connection.php");
  	include("functions.php");
	
?>  

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
	$password = $_POST['password'];

	if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
	{

		//read to database
		$query = "select * from users where user_name = '$user_name' limit 1";
		$result = mysqli_query($con, $query);

		if($result)
		{
			if($result && mysqli_num_rows($result) > 0)
			{
				$user_data = mysqli_fetch_assoc($result);

				if($user_data['password'] === $password)
				{
					$_SESSION['user_id'] = $user_data['user_id'];
					$_SESSION['user_name'] = $user_data['user_name'];
					

					echo '<div class="alert alert-success text-align-center" role="alert">
					Login Successful ! Redirecting to homepage...</div>
					<script>setTimeout(function(){location.href="index.php"} , 2000); </script>';
				}
			}
		}
	}else
	{
		echo "Please enter valid information!";
	}
}

?>
		<form method="post">
			<div style="font-size: 15px;margin: 10px;color: white">Login</div>
			Username: <input id="text" type="text" name="user_name" required><br><br>
			Password: <input id="text" type="password" name="password" required><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php">Click here to Signup</a><br><br>
		</form>
	</div>
</body>
</html>
<?php
	}
	else{
		header("location: index.php");
	}
	?>