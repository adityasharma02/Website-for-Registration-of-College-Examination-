<?php
$verify = false;
//This script will handle login
session_start();

// check if the user is already logged in
/*if(isset($_SESSION['Email']))
{
    header("location: dashboardback.html");
    exit;
}*/
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server,$username,$password);
    if(!$con){
        die("Connection to this database failed due to " . mysqli_connect_error());
    }
 $roll = $_POST['roll'];
 $Password = $_POST['Password'];
$err = "";
$_SESSION['roll'] = $roll;

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['roll'])) || empty(trim($_POST['Password'])))
    {
        $err = "Please enter Roll no + password";
    }
    else{
        $roll = trim($_POST['roll']);
        $Password = trim($_POST['Password']);
    }


if(empty($err))
{
        $sql = "SELECT * FROM  `regform` . `kmv` WHERE Roll = '$roll' AND Password = '$Password'";
    $stmt = mysqli_query($con, $sql);
   
     
       $count =  mysqli_num_rows($stmt);
    
        if($count == 1)
        
                {
                    header('location:dashboard.php');
                    
                     
                         
                    }

                    else{
                        
                        echo ("<script> alert('Wrong id or Password')
                        window.location.href = 'index.html' </script>");
                      }
                      
                

    }
     


  
}

?>
<?php
?>
