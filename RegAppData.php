
<?php
//    session_start();

//     error_reporting(E_ALL);
//     ini_set('display_errors', 1);

    include 'dbh.php';
    $full_name= $_POST['regname'];
    echo $full_name;
//$full_name= "Fdfg";
//
    $mail= $_POST['regmail'];
    echo $mail." ";
//$mail= "Dsfsd";
//
    $phone= $_POST['regphone'];
    echo $phone." ";
    $comment= $_POST['comment'];
   echo $comment." ";

    $haircut_type=$_POST['haircut_type'];
     echo $haircut_type." ";
    $barber=$_POST['barber'];
    echo $barber." ";
//$phone= "Dsfsd";
//$comment= "Dsfsd";
//$haircut_type="Dsfsd";
//$barber="Dsfsd";


$sql="INSERT INTO appointments (full_name, email, comments, status, haircut_type, phone, barber_name) VALUES ('$full_name','$mail','$comment','0','$haircut_type','$phone','$barber')";
    $result=$conn->query($sql) or  die(mysqli_error($conn));//connect the sql and run the insert
    $message = "הפרטים התקבלו";
    echo "<script type='text/javascript'>alert('$message'); window.location.href='userProfile';</script>";


//echo"end";


    ?>