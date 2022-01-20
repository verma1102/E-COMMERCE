<!DOCTYPE html>
<html>
<head>
    <title>RESULT</title>
</head>
<body>
    <?php
    session_start();
    include "conn.php";
    $sic=$_REQUEST['sic'];
    $first_name=$_REQUEST['first_name'];
    $last_name=$_REQUEST['last_name'];
    $age=$_REQUEST['age'];
    $sex=$_REQUEST['sex'];
    $category=$_REQUEST['category'];
    $father_name=$_REQUEST['father_name'];
    $mother_name=$_REQUEST['mother_name'];
    $email_id=$_REQUEST['email_id'];
    $contact=$_REQUEST['contact'];
    $address=$_REQUEST['address'];
    $city=$_REQUEST['city'];
    $state=$_REQUEST['state'];
    $pin_code=$_REQUEST['pin_code'];
    $sem=$_REQUEST['sem'];
    $branch=$_REQUEST['branch'];
    $facility=$_REQUEST['facility'];
    $delsql=mysqli_query($conn,"DELETE FROM 'facility_mapping' WHERE 'sic'='$sic");
    $sql=mysqli_query($conn,"UPDATE `registration` SET `sic`='[$sic]',`first_name`='[$first_name]',`last_name`='[$last_name]',
    `age`='[$age]',`sex`='[$sex]',`category`='[$category]',`father_name`='[$father_name]',`mother_name`='[$mother_name]',`email_id`='[$email_id]',
    `contact`='$contact',`address`='$address',`city`='$city',`state`='$state',`pin_code`='$pin_code',`sem`='$sem',
    `branch`='[$branch]' WHERE `sic`='[$_sic]'");
    foreach($facilities as $value)
    {
        $sqlF=mysqli_query($conn,"INSERT INTO `facility_mapping`(`sic`,`facility_id`) VALUES ('$sic','$value')");
    }
    if($sql){
        header("location:project.php?UPDATED");
    }
    else{
        header("location:project.php?UNABLE TO UPDATE");
    }
    ?>
</body>
</html>