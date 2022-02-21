
 <section class=" side-bar text-center p-3"> 

<h1 class="text-start card-title border-start border-info border-4 fw-bold   p-1">E-classe</h1>
<div class="image">
    <img class="rounded-circle" src="../pics/my-image.jpg" alt="">
</div>
<h5 class="text-capitalize fs-6"><?php echo $_SESSION['name']?></h5>
<p class="text-info text-capitalize">admin</p>
<div class="list-group text-start my-list mb-5">
  <a href="../Dashboard/dashboard.php" class="mt-2 p-2 "><i class="icon fas fa-home"></i><input type="button" value="home" class="d-none d-md-inline-block"></a>

    <a href="#" class="mt-2 p-2 "><i class="icon far fa-bookmark col-text-center col-md-text-start"></i><input type="button" value="course" class="d-none d-md-inline-block"></a>

    <a href="../Student/student.php" class="mt-2 p-2 "><i class="icon fas fa-graduation-cap"></i><input type="button" value="student" class="d-none d-md-inline-block"></a>

    <a href="../Payment/payment.php" class="mt-2 p-2 "><i class=" icon fas fa-money-check-alt"></i><input type="button" value="payment" class="d-none d-md-inline-block"></a>
  
    <a  href="#" class="mt-2 p-2"><i class="icon fas fa-bug"></i><input type="button" value="raport" class="d-none d-md-inline-block" ></a>

    <a href="#" class="mt-2 p-2"><i class="icon fas fa-cog"></i><input type="button" value="settings" class="d-none d-md-inline-block"></a>
  </div>
  <a class="me-2 fw-bolder " href="../Dashboard/logout.php"><input style="color: black;" type="button" value="log out" class=" d-none d-md-inline-block fs-4"><i class="fas fa-sign-out-alt fs-4 fw-bold text-info"></i></a>
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
</div>








