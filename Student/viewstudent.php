<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="E-classe Le site officiel des classes de l'école YouCode  / Si vous etes actuellement  un étiduant  YouCode creer votre compte   ">
    <meta name="keywords" content="E-classe, etudient , payment, admin ,youcode">
    <link rel="stylesheet" href="../Assets/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>View Student</title>
</head>

<body>

<?php
require_once '../decoupage/operation.php';

//*********************View*********************

if( !isset ($_GET['view']) )
{
    require_once '../Student/notfound.php';
    exit;

}
  
   if( isset ($_GET['view'])  )
   { 
       $id_payment=$_GET['view'];
    
       $req =$con->prepare('select p.name as p_name, p.payment_schedule,p.billNumber,p.amountPaid,p.balanceAmount,p.Date ,s.email,s.name as s_name  from payment_details p INNER JOIN students s where p.id_student=s.id_student and id_payment= ? ');
        $req -> execute(array($id_payment));
       $row=$req->fetch();
           $name_payment = $row['p_name'];
           $payment = $row['payment_schedule'];
           $billnumber= $row['billNumber'];
           $amountpaid = $row['amountPaid'];
           $balanceamount = $row['balanceAmount'];
           $date=$row['Date'];
           $email=$row['email'];
           $name_student=$row['s_name'];

       
   
   }
  
    ?>
    <div class="container mt-5">
   
    <table class="table">
  <thead>
  <div class=" bg-success text-white card-header">
    <h3>View Student <b><?php echo $name_student ?></b> Information</h3>
  </div>
  </thead>

  <tbody>
  <tr>
      <th>Name Payment</th>
      <td><?php echo $name_payment ?></td>

    </tr>
    <tr>
      <th>Name Student</th>
      <td><?php echo $name_student?></td>

    </tr>
    <tr>
      <th>Paymentschedule</th>
      <td><?php echo $payment ?></td>
    </tr>
    <tr>
      <th>BillNumber</th>
      <td><?php echo $billnumber?></td>
    </tr>
    <tr>
      <th>AmountPaid</th>
      <td><?php echo $amountpaid ?></td>
    </tr>
    <tr>
      <th>BalanceAmount</th>
      <td><?php echo $balanceamount ?></td>
    </tr>
    <tr>
      <th>Date</th>
      <td><?php echo $date ?></td>
    </tr>
    <tr>
      <th>Email</th>
      <td><?php echo $email ?></td>
    </tr>
 
  </tbody>
</table>
</div>


<script src="../Assets/bootstrap.js"></script>
</body>

</html>