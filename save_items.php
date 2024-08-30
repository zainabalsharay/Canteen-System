<?php

$name=$_POST['name'];
$photo=$_POST['photo'];
$price=$_POST['price'];
$type=$_POST['type'];

include'connect.php';


if (isset($_POST['save']))
{
    $sql="select count(*) as count from items";
$data=mysqli_query($conn,$sql);
$row= mysqli_fetch_array($data);
$count=$row['count'];
$count++;
    $sql="insert into items(id,name,photo,price,type)values($count,'$name','".$photo."','$price','$type')";
if(mysqli_query($conn,$sql))
$msg= "<br>Item add  successfully";
}else
$msg= "<br>There is an error";

header("Location:items.php?msg=$msg");  


?>
