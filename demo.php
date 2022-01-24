<?php
session_start();
 
     if(isset($_POST['semester'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server,$username,$password);
    if(!$con){
        die("Connection to this database failed due to " . mysqli_connect_error());
    }
   
    $sem = $_POST['semester'];
    $core = $_POST['core'];
     
    
    $sql = "INSERT INTO `regform` . `demo`(`sem`, `core`) VALUES ('$sem','$core')";
    if($con -> query($sql) == true){
      echo ("<script> alert('Wrong id or Password')
                        window.location.href = 'index.html' </script>");
    }    
    else{
      echo "ERROR: $sql <br> $con->error";
      echo ("<script> alert('Wrong id or Password')");
    }
     
    $con->close();
    }
?>