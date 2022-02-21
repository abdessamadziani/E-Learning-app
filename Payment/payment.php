<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content=" E-classe Le site officiel des classes de l'école YouCode  / Si vous etes actuellement  un étiduant  YouCode creer votre compte   ">
    <meta name="keywords" content="E-classe, etudient , payment, admin ,youcode">
    <link rel="stylesheet" href="../Assets/bootstrap.css">
    <link rel="stylesheet" href="../Assets/mystyle2.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>Payment</title>
</head>
<body>
    <main>
     
      <?php
          session_start();
       require_once '../decoupage/sidebar-and-headerbar.php';
        require_once "../decoupage/operation.php";

      ?>

        <div class="payment">
            <h3 class="text-capitalize">payment details</h3>
            <div class="btn-icons">
                <div class="icons"><i class="fas fa-angle-up text-info fs-6 me-3"></i><br><i class="fas fa-angle-down text-info fs-6 me-3"></i></div>
          </div>
          </div>
        </div>

        <span class="line bg-secondary "></span>
   
        <table class="table my-table2">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Payment Schedule</th>
                <th scope="col">Bill Number</th>
                <th scope="col">Amount paid</th>
                <th scope="col">Balance amount</th>
                <th scope="col">Date</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
  <?php
  $con=connexion();
  $req=$con->query('select * from payment_details');
  ?>
                              
             <?php while($ligne=$req->fetch()) { ?>
              <tr>
                <!-- <td><?php echo $ligne['id_payment']?></td> -->
                <td><?php echo $ligne['name']?></td>
                <td><?php echo $ligne['payment_schedule']?></td>
                <td><?php echo $ligne['billNumber']?></td>
                <td><?php echo $ligne['amountPaid']?></td>
                <td><?php echo $ligne['balanceAmount']?></td>
                <td><?php echo $ligne['Date']?></td>

                <td> <a href="../Student/viewstudent.php?view=<?php echo $ligne['id_payment'] ?>"><i class=" icon fas fa-eye text-info ms-3 mt-2"></i></a></td>

              </tr>
              <?php } ?>   
              

              </tbody>
          </table>        
    </main>
    <script src="../Assets/bootstrap.js"></script>

</body>
</html>