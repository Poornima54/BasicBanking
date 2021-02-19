<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>STATE BANK OF INDIA</title>
	
        <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
  <style>
  .img-fluid {
    max-width: 75%;
    height: auto;
}
  </style>
  </head>

  <body>
	<h1><b>WELCOME TO STATE BANK OF INDIA<b></h1>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h1> <img src="img/sbi.png" class="img-fluid" style="opacity: 0.8;margin-top: 9%;background-color:white;width:300px;margin:0 auto;margin-top:50px;height:250px;"></h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/banklogo.png" class="img-fluid" style="opacity: 0.8;width:2000px;height:400px;align:center;">
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/customers.png" class="img-fluid" style="opacity: 0.8;margin-top: 9%;background-color:white;width:300px;margin:0 auto;margin-top:50px;height:200px;">
                    <br>
                    <a href="createuser.php"><button><b><em>Customers</em></b></button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transfer.jpg" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button><b><em>Make a Transaction</em></b></button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/trans.png" class="img-fluid" style="opacity: 0.8;margin-top: 9%;background-color:blue;width:300px;margin:0 auto;margin-top:50px;height:200px;">
                    <br>
                    <a href="transactionhistory.php"><button><b><em>Transaction History</em></b></button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>Copyright ©2021 All rights reserved||BY <b>Poornima D</b></p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>