<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="E-classe Le site officiel des classes de l'école YouCode  / Si vous etes actuellement  un étiduant  YouCode creer votre compte   ">
    <meta name="keywords" content="E-classe, etudient , payment, admin ,youcode">
    <link rel="stylesheet" href="../Assets/bootstrap.css">
    <link rel="stylesheet" href="../Assets/dashboard.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>Students</title>
</head>
<body>
    <main>
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
              <?php  foreach($student_list as $info){  ?>
                <tr>
                <th scope="row"><img src="<?php echo $info['img']?>" alt="image"></th>
                <td><?php echo $info['Name']?></td>
                <td><?php echo $info['Email']?></td>
                <td><?php echo $info['Phone']?></td>
                <td><?php echo $info['Entrole Number']?></td>
                <td><?php echo $info['Date Of Addmision']?></td>
                <td><i class=" icon fas fa-pencil-alt text-info ms-3"></i><i class=" icon fas fa-trash-alt text-info ms-3 mt-2"></i></td>
              </tr>
           <?php   }?>
            </tbody>
          </table>
    </main>
    <script src="../Assets/bootstrap.js"></script>

</body>
</html>