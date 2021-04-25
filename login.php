<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="logo.png">

    <title>LOGIN</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <style>
      body{padding-top:0;}
    
      </style>
                          <style>
                              #cadetblue {background-color: cadetblue;}
                              #bgim{background-image: url("images/e.jpg");
                                  background-position:center;}
                                  body{background-image: url("docs/ssa.jpg");
                                    background-position:center;}
                              </style>
  </head>

  <body>

    <?php
    include("navb.php");
    ?>




    <div class="container" style="padding-bottom: 60px;">


<?php
 $_SESSION['status']="off";
if(isset($_POST['login'])){

 include("dbconnect.php");
 $pass= $_POST['pass'];
 $fullname = $_POST['fullname'];

 

 $sql = "SELECT * FROM signup WHERE fullname='$fullname'";
 $result = mysqli_query($connection,$sql);
 if(mysqli_num_rows($result) > 0){
   // echo "<script> alert('LOGIN SUCCESSFULL PLEASE WAIT....') </script>";

     $pass = $pass;
     $array = mysqli_fetch_assoc($result);
     $result->free();
     $connection->close();
    


     if($pass === $array['passa']){
      echo "<script> alert('LOGIN SUCCESSFULL PLEASE WAIT....') </script>";
      echo"<b style='color:white;'>PLEASE WAIT, REDIRECTING IN FEW SECONDS...</b>";
      $_SESSION['fullname'] =  $fullname;
      header("Refresh:1; url=dashboard.php");
     

     }
     
     else{
      echo "<script> alert('Wrong password') </script>";
     
     }

 }else{
  echo "<script> alert('ACCOUNT DOES NOT EXIST....') </script>";
 }
}
?>



<form class="form-signin my-5" method="POST" action="login.php">

  <h1 class="display-4 mb-3 font-weight-normal text-center text-light my-5">Patient Log in Section</h1>
  <div class="form-group">
  <label for="Fullname" class="sr-only form-control">Your Fullname</label>
  <input type="text" name="fullname" id="inputEmail" class="form-control " placeholder="Your fullname here" required autofocus>
</div>
  
<div class="form-group">
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required>
  </div>
  <div class="form-group  ">
  <input name="login" class="btn btn-lg btn-primary btn" type="submit" Value="Login">
  </div>

</form>
  </div>







    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>



  </body>
</html>
