<?php
session_start();
 
     if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server,$username,$password);
    if(!$con){
        die("Connection to this database failed due to " . mysqli_connect_error());
    }
   
    $name = $_POST['name'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Course = $_POST['Course'];
    $roll = $_POST['roll'];
    $phone = $_POST['Phone'];
     
    $sql = "SELECT * FROM  `regform` . `kmv` WHERE Roll = '$roll'";
    $stmt = mysqli_query($con, $sql);
   
     
       $count =  mysqli_num_rows($stmt);
    
        if($count == 1)
        
                {
                    
                  echo ("<script> alert('Roll no. already exists.')
                  window.location.href = 'index.html' </script>");
                     
                         
                    }

                    else{
                        
                        
                      
                      
                

    
    $sql = "INSERT INTO `regform` . `kmv`(`name`, `Email`, `Password`,`Course`,`Roll`,`Phone`) VALUES ('$name','$Email','$Password','$Course','$roll','$phone')";
    if($con -> query($sql) == true){
     
    }    
    else{
      echo "ERROR: $sql <br> $con->error";
    }
    header('location:index.html') ;
    $con->close();
    }
  }
?>