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

    <title>EDIT COURSE</title>

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
    include("nav.php");
    ?>




    <div class="container" style="padding-bottom: 60px;">

<?php
echo "WELCOME ". $_SESSION["fullname"];
?>

<br><hr>


 <?php
                        include("dbconnect.php");
                         
 //ass= $_POST['pass'];


if(isset($_POST['upd'])){
  $course = $_POST['cod'];
  $new = $_POST['nac'];
   $fullname = $_SESSION['fullname'];
   
     $sql= "UPDATE course SET course   ='$new'   WHERE     course ='$course'";
//$resultd= mysqli_query($connection,$sql);
 if(mysqli_query($connection , $sql)){
                  //  echo"<div class='alert alert-warning col-12' role='alert'> Submitted </div>";
                    echo "<script> alert('Course Updated  </script>";
                   header("Refresh:1; url=dashboard.php");   
                }else{
                    echo "error".mysqli_error();
                }
}


                       ?>
<form action='edit.php
' method='POST'>
  <b>Change Course ?</b><br>
<input type='text'  placeholder=" type course to change"  name='cod'>
<input type='text'  placeholder=" type  new course here"   name='nac'>

  <input type='submit' value='Update'  name='upd'></form>

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
