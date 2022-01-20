<?php
session_start();
/*$cookie_name='firstcookie';
if(isset($_COOKIE[$cookie_name])){
    echo 'No cookie has been set';
} else{
    echo $cookie_name . 'has been set with a value as'. $_COOKIE[$cookie_name];
}
exit;*/
include "conn.php";
$user_name=addslashes(strip_tags($_REQUEST['username']));
$password=addslashes(strip_tags($_REQUEST['password']));
$sql_to_check="SELECT * FROM `login` WHERE username='$user_name' and password='$password'";
$sql_result=mysqli_query($conn,$sql_to_check);
$sql_result_array=mysqli_fetch_array($sql_result);
$result_count_of_rows=mysqli_num_rows($sql_result);
if($result_count_of_rows==1){
    $welcome_msg = "Welcome ".$sql_result_array['name']. ", Login Sucessfull!!!";
    $_SESSION['username']=$user_name;
    $_SESSION['welcome_msg']= $welcome_msg;
    header("location: project.php");
}
else{
    echo "Wrong Credentials";
}
/*function sanitize($data,$conn) {
    $data=htnlspecialchars($data);
    $data=stripslashes($data);
    $data=trim($data);
    $data=mysqli_real_escape_string($conn,$data);
    return $data;
} */
?>