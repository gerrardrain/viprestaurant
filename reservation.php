<html>
<title>This page will be used to reserve the tables.</title>

<head>

    <style type="text/css">
    body {
        font-family: cursive;
        color: yellow;
        background: linear-gradient(rgba(0, 0, 0, 0.60), rgba(0, 0, 0, 0.60), rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0)), url(newariset.jpg)no-repeat;
        background-size: cover;
    }


    .box {
        width: 950px;
        float: right;
        border: 1px solid black;
    }

    .box ul li {
        width: 120px;
        float: right;
        margin: 20px auto;
        text-align: center;
    }

    .box ul li a {
        text-decoration: none;
        color: darkgray;
    }

    .box ul li:hover {
        background-color: green;
    }

    .box ul li a:hover {
        color: white;
    }

    .wd {
        width: 100%;
        height: 70px;
        background-color: black;
        opacity: 0.8;
        padding: 55px;
    }

    .wd h1 {
        text-align: center;
        text-transform: uppercase;
        font-weight: 100px;
        color: white;
    }

    #text {

        height: 25px;
        border-radius: 5px;
        padding: 4px;
        border: solid thin #aaa;
        width: 100%;

    }
    </style>

</head>

<body>
    <?php
    include "navbar.php";
?>

    <div class="wd">
        <h1>Enter the details for booking.</h1>
    </div>

    <?php
 if(isset($_POST['submit'])){
	 $user_id = $_POST['user_id'];
	 $name=$_POST['name'];
	 $email=$_POST['email'];
	 $table=$_POST['table'];
	 $people=$_POST['people'];
	 $date=$_POST['date'];
	 $time=$_POST['time'];
	 $sql= mysqli_query($con, "INSERT INTO `reservationtable`(`user_id`, `name`, `email`, `table`, `people`, `date`, `restime`) VALUES ('$user_id', '$name','$email','$table','$people','$date','$time') ");
	 if($sql){
		 echo ' <div class="alert alert-success text-align-center" role="alert">
		 Rservation form submitted !! Please be on time.</div>';
	 }
	 else ' <div class="alert alert-danger text-align-center" role="alert">
	 Rservation form not submitted !!</div>';

 }

?>

    <div class="container bg-light p-3">
        <form action="" method="post">
		<input type="text" class="form-control" name="user_id" value="<?php  echo $id; ?>" hidden required>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name of Reserver:</label>
                <input type="text" class="form-control" name="name" required>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address:</label>
                <input type="email" class="form-control" name="email" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">No. of table:</label>
                <select class="form-select" name="table" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>


            <div class="mb-3">
                <label class="form-label">No. of people:</label>
                <select class="form-select" name="people" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Starting time:</label>
                <input type="date" class="form-control" name="date" required>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Starting time:</label>
                <input type="time" class="form-control" name="time" required>
            </div>

            <input class="btn btn-primary" type="submit" value="reserve" name="submit" <?php if(!isset($_SESSION['user_id'])){echo 'disabled';}?> ><br><br>

			<?php if(!isset($_SESSION['user_id'])){echo '<div class="alert alert-danger text-align-center" role="alert">
	 Please Login to reserve a table !!</div>';}?>
        </form>
    </div>
	<div class="container bg-light p-3">
 	<h3>Your reservations</h3>
	 <div class="row">
	 <?php

$sql="SELECT * FROM reservationtable where user_id = '$id' ORDER BY rid DESC";
$result = mysqli_query($con, $sql);
$no=mysqli_num_rows($result);
$output = "";
$output = "<div class='h6'>Total reservations: <span class='badge bg-success'>$no </span> </div>";
if(mysqli_num_rows($result)>0){
 $output.='<br>';
while($row = mysqli_fetch_assoc($result)){
  $output.='<div class="col-4 mt-2  border border-dark rounded text-light p-3 bg-primary">
  <h4 class="">Name: '.$row['name'].'</h4>
  <p >Email: '.$row['email'].'</p>
  <p >Table: '.$row['table'].'</p>
  <p >People: '.$row['people'].'</p>
  <p >Date: '.$row['date'].'</p>
  <p >Time: '.$row['restime'].'</p>
</div>';
}
$output.= '<br>';
mysqli_close($con);
echo $output;
}
else{
    echo '<div class="alert alert-danger text-center h4" role="alert">No reservation found!</div>';
}


?>
	 </div>

	</div>
    <?php include "footer.php"; ?>

</body>

</html>