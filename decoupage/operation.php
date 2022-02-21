<?php
// ****************************connextion*****************************
function connexion()
{
   try {
    $mysqlConnection = new PDO('mysql:host=localhost;dbname=e_classe_db;','root','');  
    //  echo "connexion avec succes ";  
    } catch(Exception $e) {
        echo 'ERROR ' .$e->getMessage();
    }
    return $mysqlConnection;
}

// ****************************create*****************************
if(isset($_POST["save"]))
{
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $enroll_number=$_POST["enroll_number"];
    $date_of_addmison=$_POST["date_of_addmison"];
    $con=connexion();
    $req=$con->prepare('insert into students(name,email,phone,enroll_number,date_of_addmison) values (?,?,?,?,?);');
    $req->execute(array($name,$email,$phone,$enroll_number,$date_of_addmison));
    header("Location: student.php");
}
// ****************************delete****************************

$con=connexion();
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $req =$con->prepare("DELETE FROM students WHERE id_student=?");
    $req -> execute(array($id));
     header("Location:../Student/student.php");
}
// ****************************get id update*****************************


if(isset($_GET['id'])){
    $id =$_GET['id'] ;
    $req= $con->prepare('SELECT * FROM students WHERE id_student= ?');
    $req -> execute(array($id));
    
    $row=$req->fetch();
      
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $number = $row['enroll_number'];
        $date = $row['date_of_addmison'];
    
    
    }
   
// ****************************update*****************************

    if(isset($_POST['update'])  )
{ 
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $number = $_POST['enroll_number'];
    $date = $_POST['date_of_addmison'];

       
            $req =$con->prepare('UPDATE students SET name= ?, email= ?, phone=? , enroll_number=?, date_of_addmison=? WHERE id_student=?');
            $req -> execute(array($name,$email,$phone,$number,$date,$id));
            header("Location:student.php");

}

















?>