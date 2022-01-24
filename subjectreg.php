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
    $aecc = $_POST['aecc'];
    $sec = $_POST['sec'];
    $dse = $_POST['dse'];
    $ge = $_POST['ge'];
     
    $roll = $_SESSION['roll'];
    $sql = "   UPDATE `regform` . `kmv` SET   `Sem`= '$sem' , `coresub`= '$core' ,`aecc`= '$aecc',`sec`= '$sec',`dse`= '$dse', `ge`= '$ge' WHERE `Roll` = '$roll'";
    if($con -> query($sql) == true){
      echo ("<script> alert('Papers updated successfully.')
      window.location.href = 'dashboard.php' </script>");
    }    
    else{
      echo "ERROR: $sql <br> $con->error";
    }
     
    $con->close();
    }
    ?>
 
         