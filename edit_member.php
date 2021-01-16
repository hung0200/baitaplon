<?php
require  'connect.php';
$id=$_GET['id'];
$name_new=$_GET['name'];
$address_new=$_GET['address'];
$email_new=$_GET['email'];
$phone_new=$_GET['phone'];
$date_of_birth_new=$_GET['date_of_birth'];
$description_new=$_GET['description'];
$sql="update member set name='$name_new',address='$address_new',email='$email_new',phone='$phone_new',date_of_birth='$date_of_birth_new',description='$description_new' where id='$id'";
if(mysqli_query($conn,$sql)){
    header("Location:a.php");
}
else {
    echo "Chưa sửa được";
}
?>