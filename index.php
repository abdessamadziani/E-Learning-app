<?php
  session_start();
  if(isset($_SESSION['email']))
  {
      header('location: Dashboard/dashboard.php');
      die();
  }
  // $m = $_COOKIE['email_cookie'] ?? "";
  // $p = $_COOKIE['password_cookie'] ?? "";


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
   content=" E-classe Le site officiel des classes de l'école YouCode  / Si vous etes actuellement  un étiduant  YouCode creer votre compte   ">
    <meta name="keywords" content="E-classe, etudient , payment, admin ,youcode">
  <link rel="stylesheet" href="./Assets/bootstrap.css">
  <link rel="stylesheet" href="./Assets/mystyle.css">



  <title>Sign in</title>
</head>


<body>
  <main>
    <div class=" col-12 col-sm-8 col-md-6 col-lg-5 my-card card p-4  ">
      <div class="card-body">
        <h5 class="card-title border-start border-info border-5 fw-bold  fs-2 ps-2">E-classe</h5>
        <h6 class="card-subtitle mb-2 text-muted text-capitalize text-center p-2 sb-title "><span class="text-dark fs-4 text-uppercase m-3">sign in </span> <br><br>
          enter your credentials to access your account</h6>
        <form action="Student/regestration.php" method="POST">

        <?php if(!empty($_GET['error']))  { ?>
        <div class=" m-0 alert alert-danger" role="alert">
      
           <?php echo $_GET['error'];?>
            
         </div>
         <?php } ?>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" class="form-control" name="email" value="<?php if(isset($_COOKIE['email_cookie'])) echo $_COOKIE['email_cookie']  ?>" placeholder="Enter your Email">
          </div>
          <div class="mb-3">
            <label  class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter your password" value="<?php  if(isset($_COOKIE['password_cookie'])) echo $_COOKIE['password_cookie'] ?>">
          </div>
          <div class="mb-3 form-check form-switch ">
          <input type="checkbox" name="check" class="form-check-input" id="exampleCheck1" >
          <label class="form-check-label" for="exampleCheck1" >Remember me</label>
           </div>
          <input class="btn btn-info w-100 text-white" type="submit" value="sign in">
        </form>
        <div class="link text-center">
          <span class="text-muted fs-6">forgot your password ?<a href="#" class="card-link text-capitalize ">reset password</a>
          </span>
        </div>

      </div>
    </div>
  </main>


  <script src="./Assets/bootstrap.js"></script>

</body>

</html>