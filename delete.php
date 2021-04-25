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

    <title>  DELETE COURSE</title>

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


if(isset($_POST['delete'])){
  $course = $_POST['cod'];
   $fullname = $_SESSION['fullname'];
   
     $sql= "DELETE  FROM course WHERE fullname='$fullname' AND course ='$course'";
//$resultd= mysqli_query($connection,$sql);
 if(mysqli_query($connection , $sql)){
                  //  echo"<div class='alert alert-warning col-12' role='alert'> Submitted </div>";
                    echo "<script> alert('Course Deleted </script>";
                   header("Refresh:1; url=dashboard.php");   
                }else{
                    echo "error".mysqli_error();
                }
}



                       ?>
<form action='delete.php' method='POST'>
<input type='text'  placeholder=" type course to delete"   name='cod'>

  <input type='submit' value='delete' name='delete'></form>

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
