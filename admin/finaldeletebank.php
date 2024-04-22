<?php

if(isset($_GET['bank_id'])){
$bank_id=$_GET['bank_id'];

include("databaseconn.php");


$qry="delete from bloodbank where bank_id=$bank_id";
$result=mysqli_query($conn,$qry);

if($result){
    echo"DELETED";
    header('Location:deletebank.php');
}else{
    echo"ERROR!!";
}
}
?>