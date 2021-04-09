<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="css/page.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Online SBI</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-flex">
      <!-- Introduction section -->
            <div class="row intro text-center"> <!-- py-1-->
              <div class="col-sm-12 col-md">
                <div class="container services" > <!--my-5-->
                  <h3 class="text-dark ">Welcome to</h3>
                  <h1 class="text-dark font-weight-bold">SBI BANK</h1>
                  <h2 class="text-dark">Personal Banking</h2>
                </div>
              </div>
              <div class="connect col-sm-12 col-md text-center">
                <a href="login.php"><button class="">Register</button></a>
                <br>
                <a href="transfermoney.php"><button class="">Transfer Money</button>
                <br>
                <a href="transactionhistory.php"><button class="">Transaction History
                    </button></a>
              </div>
              
              
            </div>
            <div class="dialog">
              <h6>By clicking on "Register" button, you agree to the Terms of Service (Terms & Conditions) of usage of Internet Banking of SBI.</h6>
            </div>
            <h4>&nbsp &nbsp Most Popular</h4>
            <div class="row">
                 <div class="col-md act">
                    <img src="img/yono.jpg" class="output img-fluid ">
                    <br>
                  </div>
                  <div class="col-md act">
                    <img src="img/sbihomeloan.jpg" class="output img-fluid">
                    <br>
                  </div>
                  <div class="col-md act">
                    <img src="img/card.jpg" class="output img-fluid">
                    <br>
                  </div>
            </div>
            <div class="playstore row">
              <a href="https://apps.apple.com/us/app/yono-by-sbi/id1231393474">
              <button class="btn btn-outline-dark bg-dark text-light mx-4 my-3">
                <i class ="fa fa-apple fa-2x"></i> <!--btn-icon-prepend-->
              <div class="d-inline-block">  
                <h6 class="font-weight-light">Available on the</h6> App Store       
              </div>              
              </button>
            </a>
              &ensp;
              <a href="https://play.google.com/store/apps/details?id=com.sbi.lotusintouch&hl=en">
              <button class="btn btn-outline-dark bg-dark text-light my-3">
              <i class="fa fa-android fa-3x"></i> 
              <div class="d-inline-block mx-2 space"> 
                <h6 class="font-weight-light"> Get it on the</h6> Google Play 
              </div> 
              </button>
            </a>
              <div class="">
                <h2 style="color:black; margin:20px 0 0 50px;   ">Your Account at your Finger tip</h2>
                <h5 style="margin-left:50px; ">Start using YONO app</h5>
              </div>
            </div>
      </div>
    <!--footer-->
      <footer class="footer">
      <p class = " mt-3 py-2">
      &emsp;© State Bank of India &emsp; &emsp;<u> term of condition</u>&ensp; <u>privacy policy</u>
      </p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>