<?php
echo '<pre>';
print_r($_REQUEST);
echo '<br><br>';
print_r($_FILES);
include 'conn.php';
$uploads_dir='files';
$tmp_file=$_FILES['student_photo']['tmp_name'];
$name=$_FILES['student_photo']['name'];
$uploaded_image="$uploads_dir/$name";
move_uploaded_file($tmp_file, "$uploads_dir/$name");
$insertsql="insert into student_image values('$uploaded_image')";
mysqli_query($conn,$insertsql);
echo '<br><br>';
$explode_array=explode('.',$name);
$extn=$explode_array[1];
?>