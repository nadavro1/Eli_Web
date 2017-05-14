<?php
include "dbh.php";
/**

 * Template Name: validation_for_login

 */

session_start();
$userName=$_POST['username'];

//$userName='nadavro1';
$password= $_POST['password'];
//$password='12345';
$valid = 1;
$varible = checkUserName($userName,$password,$conn);
if ($varible['userName']==0){

    echo "שם משתמש לא קיים";
    $valid=0;
    $_SESSION['connect'] = "not connected";
}

if($varible['password']==0 && $valid==1){
    echo "סיסמה לא נכונה";
    $valid=0;
    $_SESSION['connect'] = "not connected";
}
if($valid==1){
    echo "Logged in";
    $_SESSION['user_name'] = $userName;
    $_SESSION['connect'] = "connected";
    $_SESSION['first_name'] = $varible['first_name'];
    $_SESSION['last_name'] = $varible['last_name'];
    $_SESSION['email'] = $userName;
//  console_log( $__SESSION['full_name'] );
    //echo $__SESSION['full_name'];
    //print_r($__SESSION);
}





function checkUserName($userName,$password,$conn) {


    $sql = ("SELECT * FROM user");
    $result=$conn->query($sql);
    $array['userName'] = 0;
    $array['password'] = 0;
    $array['full_name']= 0;
    while($row=mysqli_fetch_array($result)){
        if($row['uid']==$userName)//check if user name exist
        {
//     	    echo "username=". $array['userName'];
            $array['userName'] = 1;
            if ($row['pwd'] == $password)//check if pass correct
            {
//                echo "password=" . $row['password'];
                $array['password'] = 1;
                $array['first_name']=$row['first'];//for returning the first name
                $array['last_name']=$row['last'];//for returning the first name
                break;
            }
            else{
                break;
            }
        }

        //$__SESSION['full_name'] = $row['full_name'];




    }
    return $array;


}
?>