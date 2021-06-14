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
        height: 350px;
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
        <h1> Welcome to VIP Fast food restaurant!</h1>
        <h3> Connect with us to taste the authentic nepali cuisine that are delivered quickly to your table with great
            custoimer service. Our main concern is to provide you the dishes with quality of taste, texture and
            fasicinating presentation done by our highly professional chefs. </h3>
    </div>

    <div class="container my-4 ">
        <div class="row">
            <div class="col-lg-4 mt-2   text-light bg-primary p-3">
                <img class="bd-placeholder-img rounded-circle d-flex m-auto" width="140" height="140" src="img/logo11.png"
                    alt="img1">
                <h2 class="text-center">Experience Our Dishes</h2>
                <p class="text-center">Great foods that are available in VIP resturant. Food that is near to your heart</p>
                <a href="menu.php"><button type="button" class="btn btn-success d-flex m-auto">Click here</button></a>
            </div>
			<div class="col-lg-4 mt-2  text-dark bg-warning p-3">
                <img class="bd-placeholder-img rounded-circle d-flex m-auto" width="140" height="140" src="img/logo11.png"
                    alt="img1">
                <h2 class="text-center">Order online now</h2>
                <p class="text-center">Hungry ? Order online and get the food on your doorstep with just some clicks.</p>
                <a href="order.php"><button type="button" class="btn btn-success d-flex m-auto">Click here</button></a>
            </div>
			<div class="col-lg-4 mt-2  text-light bg-primary p-3">
                <img class="bd-placeholder-img rounded-circle d-flex m-auto" width="140" height="140" src="img/logo11.png"
                    alt="img1">
                <h2 class="text-center">Reserve a table</h2>
                <p class="text-center">Want to visit our resturant and enjoy variety of foods book your table now</p>
                <a href="reservation.php"><button type="button" class="btn btn-success d-flex m-auto">Click here</button></a>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>
</body>

</html>