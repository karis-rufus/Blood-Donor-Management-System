<?php

if(isset($_GET['id'])){
$id=$_GET['id'];

include 'databaseconn.php';


$qry="delete from blood where id=$id";
$result=mysqli_query($conn,$qry);

if($result){
    echo"DELETED";
    header('Location:deleteblood.php');
}else{
    echo"ERROR!!";
}
}
?>