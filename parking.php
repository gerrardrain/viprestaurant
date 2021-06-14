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
        height: 200px;
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
        <h1>Parking !</h1>
        <h3 class="text-center">VIP fast food resturant gives facility to park your vehicle with great safety.</h3>
    </div>
    <div class="container bg-light p-5">
    <h4>Parking charges </h4>


    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Category</th>
      <th scope="col">Rate</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>	Tempo / SUV / Mini Bus</td>
      <td>	Rs. 40/-</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Car </td>
      <td>Rs. 40/-</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>	Two Wheeler </td>
      <td>Rs. 20/-</td>
    </tr>
  </tbody>
</table>
<p>** please note: Vehicle safety is our responsibility</p>
<p>** parking charges shown is only for one hour of parking</p>




    </div>

    <?php include "footer.php"; ?>

</body>

</html>