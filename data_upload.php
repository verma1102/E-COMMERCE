<!DOCTYPE html>
<html>
<head>
    <title>RESULT</title>
</head>
<body>
    <center>
        <?php
        session_start();
        echo '<pre>';
        print_r($_REQUEST);
        echo '<br><br>';
        print_r($_FILES);
        include "conn.php";
        $uploads_dir='files';
        $tmp_file=$_FILES['student_photo']['tmp_name'];
        $name=$_FILES['student_photo']['name'];
        $uploaded_image="$uploads_dir/$name";
        move_uploaded_file($tmp_file, "$uploads_dir/$name");
        $insertsql="insert into student_image values('$uploaded_image')";
        mysqli_query($conn,$insertsql);
        $explode_array=explode('.',$name);
        $extn=$explode_array[1];
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
        $sql="INSERT INTO `registration`(`sic`,`first_name`, `last_name`, `age`, `sex`, `category`, `father_name`, `mother_name`, `email_id`,
        `contact`, `address`, `city`, `state`, `pin_code`, `sem`, `branch`) VALUES ('$sic','$first_name','$last_name','$age','$sex','$category',
        '$father_name','$mother_name','$email_id','$contact','$address','$city','$state','$pin_code', '$sem','$branch')";
        $facility=$_REQUEST['facility'];
        foreach($facility as $item)
        {
            $facility_sql="SELECT * FROM facility_master WHERE facility_name='$item'";
            $facility_query=mysqli_query($conn,$facility_sql);
            $fetch_query=mysqli_fetch_array($facility_query);
            $facility_id=$fetch_query['facility_id'];
            $facility_insert="INSERT INTO facility_mapping VALUES('','$facility_id','$sic')";
            $query=mysqli_query($conn,$facility_insert);
        }
        if(mysqli_query($conn, $sql)){
            echo "<h3><b>DATA HAS BEEN STORED SUCESSFULLY</></h3>";
        }else{
            echo "SORRY!!! FAILED TO STORE DATA <br> $sql. "
            . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
    </center>
</body>
</html>