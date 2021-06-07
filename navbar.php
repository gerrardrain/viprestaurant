<?php 
require_once "connection.php";
session_start();
error_reporting(0);
$id= $_SESSION['user_id'];
include "links/links.php"; ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">VIP Resturant !</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="menu.php">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="order.php">Online Order</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="reservation.php">Reservation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="parking.php">Parking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="contact.php">Contact Us</a>
        </li>
      </ul>
      <form class="d-flex">
      <?php
                            if(isset($_SESSION['user_id'])){
                                echo '<a type="button" class="btn btn-danger mx-2 text-light"><i class="fa fa-user-circle" aria-hidden="true"></i> Welcome ' .$_SESSION["user_name"]. '</a>&nbsp;
                                <a href="logout.php" type="button" class="btn mx-2 btn-danger"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a>';
                               
                         }
                         else{
                            echo'<a href="login.php" type="button" class="btn mx-2  btn-primary">Login</a>
                            <a href="signup.php" type="button" class="btn mx-2  btn-primary">Signup</a>';

                        }
                        ?>
      </form>
    </div>
  </div>
</nav>


<!-- <div class="box">
		<ul type="none">
			<li><a href=""> Home</a></li>
			<li><a href=""> Menu</a></li>
			<li><a href=""> Online Order</a></li>
			<li><a href="reservation.php"> Table Reservation</a></li>
			<li><a href=""> Parking</a></li>
			<li><a href=""> Contact Us</a></li>

		</ul>
	</div> -->