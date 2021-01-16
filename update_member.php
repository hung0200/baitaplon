<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require 'link.php';
    require 'connect.php';
    $id=$_GET['id'];
    $sql="SELECT * from member where id='$id'";
    $result= mysqli_query($conn,$sql);
    $data_list = mysqli_fetch_all($result);
    foreach($data_list as $data){
        $name=$data[1];
        $address=$data[2];
        $email=$data[3];
        $phone=$data[4];
        $date_pf_birth=$data[5];
        $description=$data[6];

       
    } 
    ?>
    <form action="edit_member.php">
    <div class="form-group">
        <label for="id" disabled>ID</label>
        <div class="d-flex">
        <input type="text" name="id" readonly value="<?php echo $id ?>" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="<?php echo $name ?>" class="form-control">
    </div>
    <div class="form-group">
        <lable for="address">Address</lable>
        <input type="text" name="address" placeholder="<?php echo $address ?>"  class="form-control">
    </div>
    <div class="form-group">
        <lable for="salary">email</lable>
        <input type="text" name="email" placeholder="<?php echo $email ?>" class="form-control">
    </div>
    <div class="form-group">
        <lable for="salary">phone</lable>
        <input type="text" name="phone" placeholder="<?php echo $phone ?>" class="form-control">
    </div>
    <div class="form-group">
        <lable for="salary">date_of_birth</lable>
        <input type="date" name="date_of_birth" placeholder="<?php echo $date_of_birth ?>" class="form-control">
    </div>
    <div class="form-group">
        <lable for="salary">descriptione</lable>
        <input type="text" name="description" placeholder="<?php echo $description ?>" class="form-control">
    </div>
    
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="index.php" class="btn btn-primary ">CANCER</a></div>
    </form>
</body>
</html>