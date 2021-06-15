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
        <h1> Our Menu !</h1>
    </div>
      <div class="container bg-light">
        <?php
// include"db/config.php";
$sql="SELECT * FROM menu";
$result = mysqli_query($con, $sql);
$no=mysqli_num_rows($result);
$output = "";
if(mysqli_num_rows($result)>0){
//  $output = '<div class="row" >';
 $output='<div class="row border rounded mb-5">';
while($row = mysqli_fetch_assoc($result)){
$output.= '<div class="col-11 d-flex flex-row mb-4 p-2">';
$output.= '<div class="col-3 text-center" ><img src="img/logo11.png" alt="" width="100" height="100"></div>';
$output.= "<div class='col-8'>
<h3 class='mb-0'>{$row['title']}</h3>
<p class='card-text mb-auto'>{$row['description']}</p>
<p class='card-text mb-auto'>Type: {$row['type']}</p>
<div>
<button class='btn btn-danger edit-btn'>price: ₹ {$row['price']}</button>
</div></div>";
    $output.= '</div><hr>';
}
$output.= '</div>';
mysqli_close($con);
echo $output;
}
else{
    echo '<div class="alert alert-danger text-center h4" role="alert">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No Activities found!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </div>';
}

?>

</div>

<?php include "footer.php"; ?>

</body>

</html>