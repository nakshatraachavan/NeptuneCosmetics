<?php
session_start();

// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
//     header("location: index.php");
//     exit;
// }
// ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome - <?php echo $_SESSION['username']?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head> 
<body>
      <br>
      <!----NAVBAR--->
      <?php require 'partials/_navbar.html'?>
      <!----SLIDER---->
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="images/c1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/banner3.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/c3.jpg" alt="Third slide">
            </div>
        </div>
      </div> 
<br><br>

<!---SUBINTRO1-->
      <div class="container text-center bg-dark text-white" >
		<br> <br>
		<h2 class="thin">	We believe that all women are beautiful without makeup- and can be pretty powerful with right makeup.
		</h2>
	
	</div>
  <br><br>
  <img src="images/ad.png" class="img-fluid" alt="Responsive image">
  <br><br>
  <!---SUBINTRO2-->
  <div class="container text-center bg-dark text-white" >
		<br> <br>
		<h2 class="thin">	An Indian brand committed to provideand fulfill your preference of "Super Affordable & Super Effective"
products<BR></h2>
	</div>
  <br><br>
  <!---FEATURE--->
  <div class="container ">
  <div class="row">
  <div class="col-sm">
    <div class="card 1">
      <center>
        <div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
          <div class="card-header">
            <center><b>Free Shipping</b></center>
          </div>
          <div class="card-body">
          <br>
            <h1><center><i  class="bi bi-truck"></i></center></h1>
            <br>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        </center>
      </div>
  </div>
  <div class="col-sm">
    <div class="card 1">
    <center>
        <div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
          <div class="card-header">
            <center><b>Online Payment</b></center>
          </div>
          <div class="card-body">
          <br>
            <h1><center><i  class="bi bi-credit-card"></i></center></h1>
            <br>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
  </center>
      </div>
  </div>
  <div class="col-sm">
    <div class="card 1">
    <center>
        <div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
          <div class="card-header">
            <center><b>Easy Return</b></center>
          </div>
          <div class="card-body">
          <br>
          <h1><center><i class="bi bi-arrow-return-left"></i></center></h1>
          <br><br>
            <p class="text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
  </center>
      </div>
  </div>

</div>
<br><br><br><br>
  <!---FOOTER-->
  <?php require 'partials/footer.php'?>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>
