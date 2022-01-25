<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/bootstrap.css">
    <link rel="stylesheet" href="../Assets/dashboard.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>Students</title>
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

                <a href="#" class="mt-2 p-2"><i class="icon fas fa-graduation-cap"></i><input type="button" value="student" class="d-none d-md-inline-block"></a>

                <a href="../Payment/payment.php" class="mt-2 p-2"><i class=" icon fas fa-money-check-alt"></i><input type="button" value="payment" class="d-none d-md-inline-block"></a>
              
                <a href="#" class="mt-2 p-2"><i class="icon fas fa-bug"></i><input type="button" value="raport" class="d-none d-md-inline-block"></a>

                <a href="#" class="mt-2 p-2"><i class="icon fas fa-cog"></i><input type="button" value="settings" class="d-none d-md-inline-block"></a>

              </div>
              <a class="me-2 fw-bolder " href="../index.php"><input style="color: black;" type="button" value="log out" class="d-none d-md-inline-block fs-4"><i class="fas fa-sign-out-alt fs-4 fw-bold text-info"></i></a>
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

        <div class="student-list">
            <h3 class="text-capitalize">students list</h3>
          <div class="btn-icons">
                <div class="icons"><i class="fas fa-angle-up text-info fs-6 me-3"></i><br><i class="fas fa-angle-down text-info fs-6 me-3"></i></div>
                <button class="btn btn-info">add new student</button>
          </div>
        </div>
        <span class="line bg-secondary "></span>
        <?php

$student_list=array(
  array("img"=>"../pics/pexels-photo-2379004 1.png","Name"=>"samad","Email"=>"samad30@gmail.com","Phone"=>"21263774899","Entrole Number"=>"77765","Date Of Addmision"=>"08-Dec-2022"),
  array("img"=>"../pics/pexels-photo-2379004 1.png","Name"=>"samad","Email"=>"samad30@gmail.com","Phone"=>"21263774899","Entrole Number"=>"77765","Date Of Addmision"=>"08-Dec-2022"),
  array("img"=>"../pics/pexels-photo-2379004 1.png","Name"=>"samad","Email"=>"samad30@gmail.com","Phone"=>"21263774899","Entrole Number"=>"77765","Date Of Addmision"=>"08-Dec-2022"),
  array("img"=>"../pics/pexels-photo-2379004 1.png","Name"=>"samad","Email"=>"samad30@gmail.com","Phone"=>"21263774899","Entrole Number"=>"77765","Date Of Addmision"=>"08-Dec-2022"),
  array("img"=>"../pics/pexels-photo-2379004 1.png","Name"=>"samad","Email"=>"samad30@gmail.com","Phone"=>"21263774899","Entrole Number"=>"77765","Date Of Addmision"=>"08-Dec-2022"),

);



          ?>
        <table class="table my-table ">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Entroll Number</th>
                <th scope="col">Date Of Addmision</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
         

              <tr>
              <?php  foreach($student_list as $info){  ?>
                <th scope="row"><img src="<?php echo $info['img']?>" alt="image"></th>
                <td><?php echo $info['Name']?></td>
                <td><?php echo $info['Email']?></td>
                <td><?php echo $info['Phone']?></td>
                <td><?php echo $info['Entrole Number']?></td>
                <td><?php echo $info['Date Of Addmision']?></td>
                <td><i class=" icon fas fa-pencil-alt text-info ms-3"></i><i class=" icon fas fa-trash-alt text-info ms-3 mt-2"></i></td>

              </tr>
           <?php   }?>

            <?php  ?>
              <!-- <tr>
                <th scope="row"><img src="../pics/pexels-photo-2379004 1.png" alt="image"></th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>Mark</td>
                <td>Otto</td>
                <td><i class=" icon fas fa-pencil-alt text-info ms-3"></i><i class=" icon fas fa-trash-alt text-info ms-3 mt-2"></i></td>
              </tr>
              <tr>
                <th scope="row"><img src="../pics/pexels-photo-2379004 1.png" alt="image"></th>
                <td>Larry the Bird</td>
                <td>@twitter</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td><i class=" icon fas fa-pencil-alt text-info ms-3"></i><i class=" icon fas fa-trash-alt text-info ms-3 mt-2"></i></td>
              </tr>
              <tr>
                <th scope="row"><img src="../pics/pexels-photo-2379004 1.png" alt="image"></th>
                <td>Larry the Bird</td>
                <td>@twitter</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td><i class=" icon fas fa-pencil-alt text-info ms-3"></i><i class=" icon fas fa-trash-alt text-info ms-3 mt-2"></i></td>
              </tr>
              <tr>
                <th scope="row"><img src="../pics/pexels-photo-2379004 1.png" alt="image"></th>
                <td>Larry the Bird</td>
                <td>@twitter</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td><i class=" icon fas fa-pencil-alt text-info ms-3"></i><i class=" icon fas fa-trash-alt text-info ms-3 mt-2"></i></td>
              </tr>
              <tr>
                <th scope="row"><img src="../pics/pexels-photo-2379004 1.png" alt="image"></th>
                <td>Larry the Bird</td>
                <td>@twitter</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td><i class=" icon fas fa-pencil-alt text-info ms-3"></i><i class=" icon fas fa-trash-alt text-info ms-3 mt-2"></i></td>
              </tr> -->
            </tbody>
          </table>


       
        
 
    </main>
    <script src="../Assets/bootstrap.js"></script>

</body>
</html>