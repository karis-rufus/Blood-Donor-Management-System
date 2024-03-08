<?php

if(isset($_GET['id'])){
$id=$_GET['id'];

include("databaseconn.php");


$qry="delete from campagindb where id=$id";
$result=mysqli_query($conn,$qry);

if($result){
    echo"DELETED";
    header('Location:deletedcampaign.php');
}else{
    echo"ERROR!!";
}
}
?>