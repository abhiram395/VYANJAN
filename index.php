<?php 
    $server="localhost";
    $username="root";
    $password= "";
    $con=mysqli_connect($server,$username,$password);
    if(!$con){
        die("connection to this database failed".mysqli_connect_error());
    }
    else{
    echo"connection successfull";
    }
?>