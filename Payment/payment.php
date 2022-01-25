<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/bootstrap.css">
    <link rel="stylesheet" href="../Assets/dashboard.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>Payment</title>
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
              <a href="../Dashboard/dashboard.php" class="mt-2 p-2"><i class="icon fas fa-home"></i><input type="button" value="home" class="d-none d-md-inline-block"></a>

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
  array("Name"=>"samad","Payment Schedule"=>"First","Bill Number"=>"774665","Amount Pay"=>"DHS 100,000","Balance Amount"=>"DHS 500,000","Date"=>"08-Dec-2022"),
  array("Name"=>"samad","Payment Schedule"=>"First","Bill Number"=>"774665","Amount Pay"=>"DHS 100,000","Balance Amount"=>"DHS 500,000","Date"=>"08-Dec-2022"),
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
           
                <?php foreach($payment_list as $liste) { ?>
                  <tr>
                <td><?php echo $liste['Name']?></td>
                <td><?php echo $liste['Payment Schedule']?></td>
                <td><?php echo $liste['Bill Number']?></td>
                <td><?php echo $liste['Amount Pay']?></td>
                <td><?php echo $liste['Balance Amount']?></td>
                <td><?php echo $liste['Date']?></td>
                <td><i class=" icon fas fa-eye text-info ms-3 mt-2"></i></td>
            
              </tr>
              <?php } ?>
              <!-- <tr>
                <td>ahmed</td>
                <td>First</td>
                <td>212737</td>
                <td>DHS 360,000</td>
                <td>DHS 500,000</td>
                <td>08-Dec-2022</td>
                <td><i class=" icon fas fa-eye text-info ms-3 mt-2"></i></td>
              </tr> -->
              <!-- <tr>
                <td>ahmed</td>
                <td>First</td>
                <td>212646</td>
                <td>DHS 560,000</td>
                <td>DHS 500,000</td>
                <td>08-Dec-2022</td>
                <td><i class=" icon fas fa-eye text-info ms-3 mt-2"></i></td>
              </tr>
              <tr>
                <td>ahmed</td>
                <td>First</td>
                <td>212737</td>
                <td>DHS 360,000</td>
                <td>DHS 500,000</td>
                <td>08-Dec-2022</td>
                <td><i class=" icon fas fa-eye text-info ms-3 mt-2"></i></td>
              </tr> -->
              </tbody>
          </table>

        
              
    </main>
    <script src="../Assets/bootstrap.js"></script>

</body>
</html>