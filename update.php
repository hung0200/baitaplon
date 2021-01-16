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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://pro.fontawesome.com/releases/v5.12.0/css/all.css" rel="stylesheet">
    
</head>

<body>
<div class="container">
    <div class="page-header clearfix" style="display:flex;align-items:center">
    </div>
    <?php
    require 'connect.php';
    $sql="select * from member";
    $result=mysqli_query($conn,$sql);
        $data_list=mysqli_fetch_all($result);
        foreach($data_list as $data){
            echo "<tr>";
       
   
            echo"<td><a href='update_member.php?id=".$data[0]."'>update member</a></td>";

            echo"</tr>";
        }
        echo"</table>";
        echo"</div>";
    ?>



</body>
</html>
