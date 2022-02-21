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
    <link rel="stylesheet" href="../Assets/mystyle2.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>Students</title>
</head>
<body>
    <main>
        <?php
         session_start();
         require_once '../decoupage/sidebar-and-headerbar.php'?>
        


        <div class="student-list">
            <h3 class="text-capitalize">students list</h3>
          <div class="btn-icons">
                <div class="icons"><i class="fas fa-angle-up text-info fs-6 me-3"></i><br><i class="fas fa-angle-down text-info fs-6 me-3"></i></div>
                <a href="createstudent.php"><button class="btn btn-info">add new student</button></a>
                
          </div>
        </div>
        <span class="line bg-secondary "></span>
       
        <table class="table my-table ">
            <thead>
              <tr>
                <!-- <th scope="col">ID</th> -->
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
           
           <?php require_once '../decoupage/operation.php';
           $con=connexion();
           $req =$con->query('SELECT * from students');
            ?>
          
        

           <?php  while( $ligne=$req->fetch()) {  ?>
                <tr>
                <!-- <td scope="col"><?php echo $ligne['id']?></td> -->
                <!-- <td><img src="<?php echo $ligne['image']?>" alt="image"></td> -->
                 <td><img src="../pics/pexels-photo-2379004 1.png" alt="image"></td>

                <td><?php echo $ligne['name']?></td>
                <td><?php echo $ligne['email']?></td>
                <td><?php echo $ligne['phone']?></td>
                <td><?php echo $ligne['enroll_number']?></td>
                <td><?php echo $ligne['date_of_addmison']?></td>
                <td><a href="updatestudent.php?id=<?php echo  $ligne['id_student']?>"><i class=" icon fas fa-pencil-alt text-info ms-3"></i></a>
                <a href="../decoupage/operation.php?delete=<?php echo  $ligne['id_student']?>"><i class=" icon fas fa-trash-alt text-info ms-3 mt-2"></i></a></td>
              </tr>
           <?php   }?>
            </tbody>
          </table>
    </main>
    <script src="../Assets/bootstrap.js"></script>

</body>
</html>