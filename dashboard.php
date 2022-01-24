
<!DOCTYPE html>
 
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
     
    <link rel="stylesheet" href="dashboard.css">
   
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bx-book-alt'></i>
      <span class="logo_name">Offline College</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="courseSelection.php">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Course(s) Selection</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-user' ></i>
            <span class="links_name">Admit Card</span>
          </a>
        </li>
        <li>
        <li class="log_out">
          <a href="index.html">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <img src="profile.jpg" alt="">
        <span class="admin_name"> <?php  
        session_start();
         $server = "localhost";
         $username = "root";
         $password = "";
         $con = mysqli_connect($server,$username,$password);
         if(!$con){
             die("Connection to this database failed due to " . mysqli_connect_error());
         }
         $roll = $_SESSION['roll'];
        $sql = "SELECT * FROM  `regform` . `kmv` WHERE Roll = '$roll'";
        $stmt = mysqli_query($con, $sql);
        $result = mysqli_num_rows($stmt);
        if ($result > 0) {
          // output data of each row
          while($row = $stmt->fetch_assoc()) {
            
        
          $demoname =$row['Name'];
          $demoroll = $row['Roll'];
          $demoemail = $row['Email'];
          $democourse = $row['Course'];
          $democore = $row['coresub'];
          $demosec = $row['sec'];
          $demosemester = $row['Sem'];
          $demophone = $row['Phone'];
          $demoaecc = $row['aecc'];
          $demodse = $row['dse'];
          $demoge = $row['ge'];
          }
        } 
        echo $demoname;
          ?><br><?php  echo $demoroll?></span> 
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Name</div>
            <div class="number"><?php
            echo $demoname;
            ?></div>
            <div class="indicator">
              
              <span class="text"></span>
            </div>
          </div>
          
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Roll Number</div>
            <div class="number"><?php   echo $demoroll  ?></div>
            <div class="indicator">
            </div>
          </div>
        
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Subject</div>
            <div class="number"> <?php   echo $democourse ?></div>
            <div class="indicator">
              
              <span class="text">Computer Science </span>
            </div>
          </div>
          
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Phone Number</div>
            <div class="number"><?php echo $demophone ?></div>
            <div class="indicator">
             
              <span class="text"><?php echo $demoemail ?></span>
            </div>
          </div>
         
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">All Subjects</div>
          <div class="sales-details">
            <ul class="details">
              <li class="topic">Code</li>
              <li><a href="#"></a></li>
              <li><a href="#">32341202</a></li>
              <li><a href="#">32341203</a></li>
              <li><a href="#">32341204</a></li>
              <li><a href="#">32341205</a></li>
              <li><a href="#">32341206</a></li>
              
            </ul>
            <ul class="details">
            <li class="topic">Subject Name</li>
            <li><a href="#"><?php echo $democore ?></a></li>
            <li><a href="#"><?php echo $demoaecc ?></a></li>
            <li><a href="#"><?php echo $demodse ?> </a></li>
            <li><a href="#"><?php echo $demosec ?></a></li>
            <li><a href="#"><?php echo $demoge ?></a></li>
            
          </ul>
          <ul class="details">
            <li class="topic">Type</li>
            <li><a href="#">Core</a></li>
            <li><a href="#">Core</a></li>
            <li><a href="#">Core</a></li>
            <li><a href="#">SEC</a></li>
            <li><a href="#">G.E</a></li>
           
          </ul>
          <ul class="details">
            <li class="topic">Semester</li>
            <li><a href="#">III</a></li>
            <li><a href="#">III</a></li>
            <li><a href="#">III</a></li>
            <li><a href="#">III</a></li>
            <li><a href="#">III</a></li>
           
          </ul>
          </div>
          <div class="button">
            <a href="#">See All</a>
          </div>
        </div>
        <div class="top-sales box">
          <div class="title">Examination Fee</div>
          <ul class="top-sales-details">
            <li>
            <a href="#">
               
              <span class="product"><?php echo $democore ?></span>
            </a>
            <span class="price">₹250</span>
          </li>
         
         
          <li>
            <a href="#">
               
              <span class="product"><?php echo $demoaecc ?></span>
            </a>
            <span class="price">₹)250</span>
          </li>
          <li>
            <a href="#">
               
              <span class="product"><?php echo $demodse ?></span>
            </a>
            <span class="price">₹)500</span>
          </li>
          <li>
            <a href="#">
        
              <span class="product"><?php echo $demosec ?></span>
            </a>
            <span class="price">₹)500</span>
          <li>
            <a href="#">
               
              <span class="product"><?php echo $demoge ?></span>
            </a>
            <span class="price">₹)1000</span>
          </li>

          <li>
            <a href="#">
               
              <span class="product"><br><u>Total Fees to be paid</u></span>
            </a>
            <span class="price"><br> <u>₹)2500 </u> </span>
          </li>
         
          <div 
           class="button2">
           
            <a> <form> <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_IS8Q3XrXcIZx3w" async> </script></form></a>
          </div>
      

          </ul>
        </div>
      </div>
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>

