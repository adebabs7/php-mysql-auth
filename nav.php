
    <?php
   // session_start();

   if(isset($_POST['logout'])){
    unset($_SESSION['fullname']);
    session_destroy();
    header("location:login.php"); 
    
}
    ?>
    <nav class="navbar navbar-expand-sm navbar-light"   style="background-color:#343a40; ">
    <botton class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynav" style="background-color:white;"><span class="navbar-toggler-icon"></span></botton>
    <div class="collapse navbar-collapse  justify-content-center" id="mynav">
    <ul class="navbar-nav  text-light">

            <li class="navbar-item px-lg-2">
    <a class="nav-link text-light"  href="add.php">Add Course <span class="sr-only">(current)</span></a>
    </li>
            <li class="navbar-item px-lg-2">
    <a class="nav-link text-light"  href="delete.php">Delete Course <span class="sr-only">(current)</span></a>
    </li>
                <li class="navbar-item px-lg-2">
    <a class="nav-link text-light"  href="edit.php">Edit Course <span class="sr-only">(current)</span></a>
    </li>
             <li class="navbar-item px-lg-2">
    <a class="nav-link text-light"  href="dashboard.php">Dashboard <span class="sr-only">(current)</span></a>
    </li>
  

    <li class="navbar-item px-lg-2">
    <form class="form-signin my-5" method="POST" action="login.php">
    <input name="logout" class="btn btn-lg btn-primary btn" type="submit" Value="Log Out">
    </form>
    </li>

   
  

    </ul>
    </div>
    </nav>
    
    