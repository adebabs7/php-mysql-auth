
    <?php
   // session_start();

   if(isset($_POST['logout'])){
    unset($_SESSION['fullname']);
    unset($_SESSION['status']);
    session_destroy();
    header("location:login.php"); 
    
}
    ?>
    <nav class="navbar navbar-expand-sm navbar-light"   style="background-color:#343a40; ">
    <botton class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynav" style="background-color:white;"><span class="navbar-toggler-icon"></span></botton>
    <div class="collapse navbar-collapse  justify-content-center" id="mynav">
    <ul class="navbar-nav  text-light">

    <li class="navbar-item px-lg-2">
    <a class="nav-link text-light"  href="signup.php">Register <span class="sr-only">(current)</span></a>
    </li>
 
    <li class="navbar-item px-lg-2">
    <a class="nav-link  text-light" href="login.php">Login</a>
    </li>
   



    </ul>
    </div>
    </nav>
    
    