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
     
      <?php require_once '../decoupage/sidebar-and-headerbar.php'?>
        <div class="payment">
            <h3 class="text-capitalize">payment details</h3>
            <div class="btn-icons">
                <div class="icons"><i class="fas fa-angle-up text-info fs-6 me-3"></i><br><i class="fas fa-angle-down text-info fs-6 me-3"></i></div>
          </div>
          </div>
        </div>

        <span class="line bg-secondary "></span>
        <?php

$payment_list=array(
  array("Name"=>"samad","Payment Schedule"=>"First","Bill Number"=>"774665","Amount Pay"=>"DHS 100,000","Balance Amount"=>"DHS 500,000","Date"=>"08-Dec-2022"),
  array("Name"=>"ahmed","Payment Schedule"=>"second","Bill Number"=>"77465","Amount Pay"=>"DHS 100,000","Balance Amount"=>"DHS 500,000","Date"=>"08-Dec-2022"),
  array("Name"=>"samad","Payment Schedule"=>"First","Bill Number"=>"774665","Amount Pay"=>"DHS 100,000","Balance Amount"=>"DHS 500,000","Date"=>"02-Dec-2021"),
  array("Name"=>"samad","Payment Schedule"=>"First","Bill Number"=>"774665","Amount Pay"=>"DHS 100,000","Balance Amount"=>"DHS 500,000","Date"=>"08-Dec-2022"),
);



          ?>
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
  require "../myfunctions.php";
  $payments=getpayment();
  ?>
                              
                   <?php foreach($payments as $payment) { ?>
                  <tr>
                <td><?php echo $payment['id']?></td>
                <td><?php echo $payment['name']?></td>
                <td><?php echo $payment['Payment Schedule']?></td>
                <td><?php echo $payment['Bill Number']?></td>
                <td><?php echo $payment['Amount Pay']?></td>
                <td><?php echo $payment['Balance Amount']?></td>
                <td><?php echo $payment['Date']?></td>
                <td><i class=" icon fas fa-eye text-info ms-3 mt-2"></i></td>
            
              </tr>
              <?php } ?>   
              

              </tbody>
          </table>        
    </main>
    <script src="../Assets/bootstrap.js"></script>

</body>
</html>