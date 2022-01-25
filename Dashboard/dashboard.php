<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/bootstrap.css">
    <link rel="stylesheet" href="../Assets/dashboard.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <title>Dashboard</title>
</head>
<body>
    <main>
        <!-- <section class=" col-xm-d-none side-bar text-center w-20 d-inline-block  p-3">
            <h1 class="text-start card-title border-start border-info border-4 fw-bold   p-1">E-classe</h1>
            <div class="image">
                <img class="rounded-circle" src="../pics/my-image.jpg" alt="">
            </div>
            <h5 class="text-capitalize fs-6">admin name</h5>
            <p class="text-info text-capitalize">admin</p>
            <div class="list-group text-start my-list mb-5">
                <a href="#" class="mt-2 p-2"><i class="icon fas fa-home"></i><input type="button" value="home" class="d-none d-md-inline-block"></a>

                <a href="#" class="mt-2 p-2"><i class="icon far fa-bookmark col-text-center col-md-text-start"></i><input type="button" value="course" class="d-none d-md-inline-block"></a>

                <a href="../Student/student.php" class="mt-2 p-2"><i class="icon fas fa-graduation-cap"></i><input type="button" value="student" class="d-none d-md-inline-block"></a>

                <a href="../Payment/payment.php" class="mt-2 p-2"><i class=" icon fas fa-money-check-alt"></i><input type="button" value="payment" class="d-none d-md-inline-block"></a>
              
                <a href="#" class="mt-2 p-2"><i class="icon fas fa-bug"></i><input type="button" value="raport" class="d-none d-md-inline-block"></a>

                <a href="#" class="mt-2 p-2"><i class="icon fas fa-cog"></i><input type="button" value="settings" class="d-none d-md-inline-block"></a>

              </div>
              <a class="me-2 fw-bolder " href="../index.php"><input style="color: black;" type="button" value="log out" class=" d-none d-md-inline-block fs-4"><i class="fas fa-sign-out-alt fs-4 fw-bold text-info"></i></a>

        </section>
        <div class="header-bar">
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                    <i class=" fas fa-angle-left d-none d-md-inline-block"></i>
                  <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <i class="fas fa-bell mt-2 ms-3 me-3"></i>
                  </form>
                </div>
              </nav>
        </div> -->
        <?php require_once '../decoupage/sidebar-and-headerbar.php'?>

        <div class="card-items row">
            <div class="card-item card-1 col-12 col-md-6  col-lg-2">
                <i class=" icon fas fa-graduation-cap mt-0 text-info"></i>
                <h3 class="text-capitalize   pt-1">students</h3>
                <span class="text-dark fw-bold fs-3 ">243</span>   
            </div>
            <div class="card-item card-2  col-lg-2">
                <i class=" icon fab fa-discourse text-danger "></i>
                <h3 class="text-capitalize   pt-1">courses</h3>
                <span class="text-dark fw-bold fs-3">13</span>   
            </div>

            <div class="card-item card-3  col-lg-2">
                <i class=" icon fas fa-money-check-alt text-info"></i>
                <h3 class="text-capitalize   pt-1">payments</h3>
                <span class="  fw-bold fs-5 text-dark text-uppercase">dhs 556,000</span>   
            </div>
            <div class="card-item card-4  col-lg-2">
                <i class=" icon fas fa-user-alt"></i>
                <h3 class="text-capitalize  pt-1">users</h3>
                <span class="text-dark fw-bold fs-2">3</span>   
            </div>

        </div>
    </main>
<script src="../Assets/bootstrap.js"></script>
</body>
</html>