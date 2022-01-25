<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Email">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password">
          </div>
          <a href="Dashboard/dashboard.php"><input class="btn btn-info w-100 text-white" type="button" value="sign in"></a>
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