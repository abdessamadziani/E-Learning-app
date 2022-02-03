
<?php

function getstudent()
{
return json_decode(file_get_contents(__DIR__.'/json/student.json'),true);
}
function getpayment()
{
return json_decode(file_get_contents(__DIR__.'/json/payment.json'),true);

}
function getstudentbyid($id)
{
    $students=getstudent();
    foreach($students as $student)
    {
        if($student['id']==$id)
        {
          return $student;
        }
    }
    return null;
}
function getpaymentbyid($id)
{
    $payments=getpayment();
    foreach($payments as $payment)
    {
        if($payment['id']==$id)
        return $payment;
        else
        return null;
    }
}
function updatestudent($data,$id)
{
    $students=getstudent();
    foreach($students as $i => $student)
    {
        if($student['id'] == $id)
        {
            $students[$i] = array_merge ($student,$data);
        }
  

 }

  file_put_contents( __DIR__ .'/json/student.json',json_encode($students));

  

}




function createstudent($data)
{
    $students = getstudent();

    $data['id'] = rand(1,100);

     $students[] = $data;
     file_put_contents( __DIR__ .'/json/student.json',json_encode($students));

    // return $data;

}
function deletestudent($id)
{
    $students = getstudent();
    foreach($students as $i => $student)
    {
        if($student['id'] == $id)
        {
            array_splice($students,$i,1);
        }
    }
    file_put_contents( __DIR__ .'/json/student.json',json_encode($students));



}




?>