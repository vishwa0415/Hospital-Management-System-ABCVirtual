<?php
    include '../conn.php';
    $err ='';
    //$role;
  
if($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $username = $_POST["uss"];
    $password = $_POST["pww"];
   

    $sql = "SELECT username,role FROM loginn WHERE username='$username' AND password='$password'";
    $results = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($results)>0){
        
        while($row = mysqli_fetch_assoc($results)){
            $role=$row['role'];
           
        }
        
        if($role=="doctor"){
             header("Location: ../DOCTOR/doctor_dashbord.php");
             exit();
        }elseif($role=="receptionist"){
             header("Location: ../RECEPTIONIST/recep_dashbord.php");
             exit();
        }elseif($role=="admin"){
             header("Location: ../ADMIN/admin_dashbord.php");
             exit();
        }
           header("Location: ../LOGINS/patientlogin.php");
           
        
         
    } else {
     $err="Invalid Username or Password/can't access";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<link rel="stylesheet" href="../css/style1.css">
<link rel="stylesheet" href="../css/style.css">
        <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.23.7/dist/css/uikit.min.css" />


<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.23.7/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.23.7/dist/js/uikit-icons.min.js"></script>

</head>
<body>
    
<!--background start-->
<div class="uk-height-medium uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light lob" data-src="../imgs/lo.jpg" uk-img>
 <div class="uk-box-shadow-bottom">
<div class="uk-container">
 
       <div class="box">
        <h1>Welcome Back</h1>
       <div class="uk-alert-warning msg" uk-alert>
    <a href class="uk-alert-close cl" uk-close></a>
   <p>NOTICE: ONLY THE DOCTORS,RECEPTIONISTS & ADMINS CAN ACCESS THIS GATEWAY.</p>
</div>
<br>
 <div class="err">
    <p><?php echo $err; ?></p>
</div>

<!--form start-->
<form action="" method="POST">
    <input type="text" class="us" placeholder="Username" name="uss">
    <input type="password" class="pw" placeholder="Password" name="pww">
    <br>
   
        <button type="submit" class="btn">LOGIN</button>

        <div class="lin">
            <br>
        </div>
      <a href="../forget.php" class="for"> <h1>FORGET YOUR USERNAME OR PASSWORD?</h1>
 </a>  
    
</form>
<!--form end-->


        
    </div> 
    </div>
    
</div>



</div>
</div>
<!---background end--->

<!--bottom nav start--->

<div class="botnav">
    <br>
<div class="uk-container">
    <h1> ABC VIRTUAL Hospital (pvt) Ltd.</h1>
    <p>Colombo 02, Main Street, Sri Lanka. <br>Since 1956; |66 Years of Excellency in Health Care. <br>Sri Lankan #No:01 Health Care Partner.</p>
    
    <div class="lin1"><br></div>
    <h3>Copywrite@2025 Designed By:Vishwa Gautham.</h3>
    <br>

</div>

</div>
<!--bottom nav end-->

</body>
</html>