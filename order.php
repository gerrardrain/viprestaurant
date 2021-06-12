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
        <h1>Order Online !</h1>
    </div>


    <div class="container bg-light p-3">

    <form action="confirmation.php" method="post">
    <input type="text" class="form-control" name="user_id" value="<?php  echo $id; ?>" hidden required>
        <div class="mb-3">
            <label  class="form-label">Name:</label>
            <input type="text" class="form-control" name="name" required>
        </div>

        <div class="mb-3">
            <label  class="form-label">Mobile no:</label>
            <input type="text" class="form-control" name="mobile" required>
        </div>

        <div class="mb-3">
            <label  class="form-label">Select dish:</label>
            <select class="form-select" name="mid" required>
                <?php
$sql="SELECT * FROM menu";
$result = mysqli_query($con, $sql);
$no=mysqli_num_rows($result);
$output = "";
if(mysqli_num_rows($result)>0){
while($row = mysqli_fetch_assoc($result)){
                    echo '<option value="'.$row['mid'].'">'.$row['title'].' @Price ₹ '.$row['price'].'</option>';
}
}
else {
    echo 'No items found';
}
                    ?>
            </select>

        </div>

        <div class="mb-3">
            <label  class="form-label">No. of plates:</label>
            <select class="form-select" name="plates" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </div>

        <div class="mb-3">
            <label  class="form-label">Address:</label>
            <textarea type="text" class="form-control" name="address" required> </textarea>
        </div>


        <input class="btn btn-primary" type="submit" value="Place order" name="submit" <?php if(!isset($_SESSION['user_id'])){echo 'disabled';}?> ><br><br>

        <?php if(!isset($_SESSION['user_id'])){echo '<div class="alert alert-danger text-align-center" role="alert">
	 Please Login to place an order !!</div>';}?>
</form>
</div>

<div class="container bg-light p-3">
 	<h3>Your Orders</h3>
	 <div class="row">
	 <?php

$sql="SELECT o.name, o.mobile, o.plates, o.address, o.orderdate, m.title, m.price FROM orders o
inner join menu m on m.mid=o.mid
 where uid = '$id' ORDER BY oid DESC";
$result = mysqli_query($con, $sql);
$no=mysqli_num_rows($result);
$output = "";
$output = "<div class='h6'>Total orders: <span class='badge bg-success'>$no </span> </div>";
if(mysqli_num_rows($result)>0){
 $output.='<br>';
while($row = mysqli_fetch_assoc($result)){
  $output.='<div class="col-4 mt-2  border border-dark rounded text-light p-3 bg-primary">
  <h4 class="">Name: '.$row['name'].'</h4>
  <p >Mobile: '.$row['mobile'].'</p>
  <p >Dish: '.$row['title'].'</p>
  <p >Price: '.$row['price'].'</p>
  <p >Plates: '.$row['plates'].'</p>
  <p >Address: '.$row['address'].'</p>
  <p >Time: '.$row['orderdate'].'</p>
</div>';
}
$output.= '<br>';
mysqli_close($con);
echo $output;
}
else{
    echo '<div class="alert alert-danger text-center h4" role="alert">No orders found!</div>';
}


?>
	 </div>

	</div>
    <?php include "footer.php"; ?>

</body>

</html>