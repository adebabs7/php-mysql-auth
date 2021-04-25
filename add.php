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


    <title>Add Course</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <style>
   
    
      </style>
                          <style>
                              #cadetblue {background-color: cadetblue;}
                              #bgim{background-image: url("images/e.jpg");
                                  background-position:center;}
                                  .bg{background-image: url("images/cross.png");
                                  background-position:center;background-repeat:no-repeat;background-attachment:fixed;}
                             .bg-overlay{background:linear-gradient(rgba(0,0,0,.7),rgba(0,0,0,.7)),url("docs/ssc.jpg");
                                background-repeat:no-repeat;background-attachment:fixed;color:#fff;
                            }
                            body{background-image:url("docs/ssd.jpg");}
                            .con{background:linear-gradient(rgba(0,0,0,.7),rgba(0,0,0,.7));
                                background-repeat:no-repeat;}
                             </style>
  </head>

  <body>

    <?php
    include("nav.php");
    ?>

<?php
$message="";
        if(isset($_POST['add'])){

              
                       /* if($gender == 'female'){
                            $sql="INSERT INTO sisters(fullname,gender,mailinfor,passa) VALUES('$fullname','$gender','$mail','$passa')";
               
                            if(mysqli_query($connection , $sql)){
                                echo"done";
                        }}*/
               

                        $fullname = $_SESSION['fullname']; 
                        $course = $_POST["course"];
                         include("dbconnect.php");
                $sql="INSERT INTO course(fullname,course) VALUES('$fullname','$course')";
                if(mysqli_query($connection , $sql)){
                  //  echo"<div class='alert alert-warning col-12' role='alert'> Submitted </div>";
                    echo "<script> alert('Course Registered....') </script>";
                   header("Refresh:1; url=dashboard.php");   
                }else{
                    echo "error".mysqli_error();
                }
            }
               

        
?>
<?php
echo "WELCOME ". $_SESSION["fullname"];
?>
     <div class="jumbotron bg bg-overlay" >
        <p class="display-4  text-center text-light">Add Course FORM</div>
        <form action="add.php" method="POST" class=" py-4">
             <div class="container con text-light p-4" >
        <p class="display-3 text-center">Please fill up the form</p>
        <form action="">
        <div class="form-group row pl-2" >
                <label for="fullname ">Course : </label>
                <input type="text" id="fullname" class="form-control" name="course" placeholder="Course Name" required>
            </div>
      
     
      </div>

         

            


                    <div class="form-group">
                            <input type="submit" id="" class=" btn btn-secondary btn-lg" name="add" placeholder="Username">
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
