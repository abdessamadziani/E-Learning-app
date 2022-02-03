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
    <title>Update Student</title>
</head>

<body>
    <?php
    require_once '../myfunctions.php';
    $studentid = $_GET['id'];
    $student = getstudentbyid($studentid);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        updatestudent($_POST, $studentid);
        header('location:student.php');
        exit;

    }
   

    ?>
    <div class="container">

        <div class="card">
            <div class="card-header">
                <h3>Update Student <b><?php echo $student['name'] ?></b> Information</h3>
            </div>
            <div
             class="card-body">
                <form method="post">
                    <div class="mb-2">
                        <label for="exampleInputPassword1" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputPassword1" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputPassword1" value="<?php echo $student['name'] ?>">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="<?php echo $student['email'] ?>">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputPassword1" class="form-label">Phone</label>
                        <input type="number" name="phone" class="form-control" id="exampleInputPassword1" value="<?php echo $student['phone'] ?>">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputPassword1" class="form-label">Entroll Number</label>
                        <input type="text" name="entrolnumber" class="form-control" id="exampleInputPassword1" value="<?php echo $student['entrolnumber'] ?>">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputPassword1" class="form-label">Date Of Addmision</label>
                        <input type="text" name="dateofadmission" class="form-control" id="exampleInputPassword1" value="<?php echo $student['dateofadmission'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>





    <script src="../Assets/bootstrap.js"></script>
</body>

</html>