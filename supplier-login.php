<?php include('config/config.php'); ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Superstore</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>
    <div id="preloader">
        <div class="jumper">
            
        </div>
    </div>  
    <header class=""> 
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>SUPER<em>STORE</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
               
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

  
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
      
      </div>
    </div>
    <!-- Banner Ends Here -->

   

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Supplier Log in</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
            <form action="" method="POST" class="text-center">
            <div class="input-form username">
            <input type="text" name="username" class="input" placeholder="Username">
            <i class="fas fa-user"></i>
        </div>
        <div class="input-form password">
            <input type="password" name="password" class="input" placeholder="Password">
            <i class="fas fa-key"></i>
        </div>
        <a href="signup.php" class="float-right">New User? Sign up now!</a>
</br>
        <a href="supplier-login.php" class="float-right">Supplier? Sign up here!</a>
        <div class="btn btn-login">
          
          <input type="submit" name="submit" value="Login" class= "btn-primary"/>
        </div>
            </form>
              
             
            </div>
          </div>
          <div class="col-md-5">
            <div class="right-image">
              <img src="assets/images/about-1-570x350.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>
</html>
<?php

if(isset($_POST['submit']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql ="SELECT * FROM supplier WHERE company_name ='$username' AND password = '$password'";
  
  $res = mysqli_query($conn, $sql);
  $count = mysqli_num_rows($res);
  if($count>0)
  {
    $userid = 0;
    while($row=mysqli_fetch_assoc($res))
        {
          $userid = $row['id'];
        }
    
   
    $url = 'location: http://localhost/superstore/superstore/add-product.php';
    header($url, true, 307);
  }
  else
  {   

    echo "<script type='text/javascript'>alert('Invalid Username or Password!');</script>";
  }
  
}

?>