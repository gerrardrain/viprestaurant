<html>
<title> This is homepage of the Website></title>

<head>
    <style>
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

    .wd h3 {
        text-align: justify;
        color: darkgrey;
        font-weight: normal;
    }
    </style>

</head>

<body>
    <?php include"navbar.php"; ?>


    <div class="wd">
        <h1>Order Confirmation !</h1>
    </div>

    <input type="text" class="form-control" name="user_id" value="<?php  echo $id; ?>" hidden required>

    <div class="container bg-light p-3">

    <?php
    
 if(isset($_POST['submit'])){
	 $user_id = $_POST['user_id'];
	 $name=$_POST['name'];
	 $mobile=$_POST['mobile'];
	 $mid=$_POST['mid'];
	 $plates=$_POST['plates'];
	 $address=$_POST['address'];
	 $sql= mysqli_query($con, "INSERT INTO `orders`(`uid`, `name`, `mobile`, `mid`, `plates`, `address`) VALUES ('$user_id', '$name','$mobile','$mid','$plates','$address') ");
	 if($sql){
        echo '<h4>Hi '.$_SESSION['user_name'].' ! </h4><br>
        <h5 class="text-success">Your order has been confirmed !!</h5>
        <p>Please find the delivery details below:</p><h4>';
        echo 'Name: '.$name.'<br>';
        echo 'Mobile: '.$mobile.'<br>';
        echo 'Address: '.$address.'<br>';
        echo '</h4><br><br><br>';

        echo '<h5>Your order will reach you by 30 min sit back and relax <br> Please receive call when our partner will reach your destination </h5> 
        <br><br><p>Redirecting to orders page............</p> <script>setTimeout(function(){location.href="order.php"} , 7000); </script>';
        
	 }
	 else ' <div class="alert alert-danger text-align-center" role="alert">
	 Rservation form not submitted !!</div>';

 }

?>
</div>
</body>

</html>
