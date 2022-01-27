<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" E-classe Le site officiel des classes de l'école YouCode  / Si vous etes actuellement  un étiduant  YouCode creer votre compte   ">
    <meta name="keywords" content="E-classe, etudient , payment, admin ,youcode">
    <link rel="stylesheet" href="../Assets/bootstrap.css">
    <link rel="stylesheet" href="../Assets/dashboard.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <title>Dashboard</title>
</head>

<body>
    <main>
        <?php require_once '../decoupage/sidebar-and-headerbar.php' ?>

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