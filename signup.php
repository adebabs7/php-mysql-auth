<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="logo.png">


    <title>Join Us</title>

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
    include("navb.php");
    ?>

<?php
$message="";
        if(isset($_POST['signup'])){


            if($_POST['passworda'] != $_POST['passwordb']){
              
                $message= '<div class="alert alert-warning col-12" role="alert">Password does not match..<br>please make sure your password match</div>';
            }else{
                include("dbconnect.php");
                $passa= $_POST['passworda'];
                $passa = $passa;
                $fullname = $_POST['fullname'];
             
           

                $sql = "SELECT * FROM signup WHERE fullname='$fullname'";
                $result = mysqli_query($connection,$sql);
                if(mysqli_num_rows($result) > 0){
                   echo "<script> alert('fullname Exist....') </script>";

                    
                }else{
              
                       /* if($gender == 'female'){
                            $sql="INSERT INTO sisters(fullname,gender,mailinfor,passa) VALUES('$fullname','$gender','$mail','$passa')";
               
                            if(mysqli_query($connection , $sql)){
                                echo"done";
                        }}*/
               


                $sql="INSERT INTO signup(fullname,passa) VALUES('$fullname','$passa')";
                if(mysqli_query($connection , $sql)){
                  //  echo"<div class='alert alert-warning col-12' role='alert'> Submitted </div>";
                    echo "<script> alert('Registered....Please wait') </script>";
                    header("Refresh:1; url=login.php");   
                }else{
                    echo "error".mysqli_error();
                }
            }
               

            }
        }
?>
     <div class="jumbotron bg bg-overlay" >
        <p class="display-4  text-center text-light">REGISTRATION SIGN-UP FORM</div>
        <form action="signup.php" method="POST" class=" py-4">
             <div class="container con text-light p-4" >
        <p class="display-3 text-center">Please fill up the form</p>
        <form action="">
        <div class="form-group row pl-2" >
                <label for="fullname ">Fullname : </label>
                <input type="text" id="fullname" class="form-control" name="fullname" placeholder="fullname" required>
            </div>
      
          <div class="row">
            <div class="form-group col-6">

                    <label for="password">Password</label>
                    <input type="password" id="password" class="form-control" name="passworda" placeholder="Password" required>
                    <small class="text-muted">enter not less than 8 characters</small>
                </div>
                <div class="form-group  col-6">
                    <label for="cpassword">Comfirm Password</label>
                    <input type="password" id="cpassword" class="form-control" name="passwordb" placeholder="Comfirm Password" required>
                    <small class="text-muted">enter not less than 8 characters</small>
                    <br>

                </div>

            <div class="alert col-12">
                <a class="close" data-dismiss="alert"><i class="icon-remove"></i></a>
                <?php echo $message; ?>
            </div>      


            </div>
     
      </div>

         

            


                    <div class="form-group">
                            <input type="submit" id="" class=" btn btn-secondary btn-lg" name="signup" placeholder="Username">
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
