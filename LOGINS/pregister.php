<?php
    include '../conn.php';

    if(isset($_POST["p-btn"])){
        $name = $_POST['name'];
        $dob = $_POST['dob'];
        $age = $_POST['age'];
        $gender = $_POST['gen'];
        $nic = $_POST['nic'];
         $tel = $_POST['tel'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $username = $_POST['us'];
        $password = $_POST['pw'];

        $sql = "INSERT INTO patients (name,dob,age,gender,nic,tel,email,address,username,password) VALUES ('$name','$dob','$age','$gender','$nic','$tel','$email','$address','$username','$password')";
       
       
        if(mysqli_query($conn,$sql)){
            $sv="saved personal data!,";
           echo $sv;
           $sv="";
        }else{
            echo "Try Again!";
        }

          $sqlf = "INSERT INTO loginn (username,password,role,nic) VALUES ('$username','$password','patient','$nic')";
       
        if(mysqli_query($conn,$sqlf)){
           echo $sv." and credintials";
        }else{
            echo "Try Again!!!";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Register</title>

<link rel="stylesheet" href="../css/patient_regi.css">
        <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.23.7/dist/css/uikit.min.css" />


<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.23.7/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.23.7/dist/js/uikit-icons.min.js"></script>

</head>
<body>
    
<!--background start-->
<div class="uk-height-medium uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light p-lob" data-src="../imgs/lo9.jpg" uk-img>
 <div class="uk-box-shadow-bottom">
<div class="uk-container">
 
       <div class="p-box">
        <h1>Patient Registration Form</h1>
      
<br>
 <div class="err">
    <p>  </p>
</div>

<!--form start-->
<form action="" method="POST">
    <input type="text" class="do" placeholder="FullName" name="name"><br><br>
    <input type="date" class="do" placeholder="DateOfBirth" name="dob" required>
    <input type="int" class="do" placeholder="Age" name="age"><br><br>
   <div class="ra"><p>Male: <input type="radio" class="radi" name="gen" id="ma" value="male">      Female: <input type="radio" class="radi" name="gen" id="fe" value="female"></p> </div><br>
    <input type="text" class="do" placeholder="NIC no" name="nic">
    <input type="text" class="do" placeholder="Telephone no" name="tel"><br>
    <br><input type="email" class="do" placeholder="Email" name="email"><br>
   <br> <input type="text" class="do" placeholder="Address" name="address">
    
   
    <br><br><input type="text" class="do" placeholder="Username" name="us" required>
    <input type="password" class="do" placeholder="Password" name="pw" required>
    <br>
   
        <button type="submit" class="p-btn" name="p-btn">Register</button>

        <div class="p-lin">
            <br>
        </div>
        
         <a href="../LOGINS/patientlogin.php" class="ex"> <h1>EXIT?</h1>
 </a>  
      
    
</form>
<!--form end-->


        
    </div> 
    </div>
    
</div>



</div>
</div>
<!---background end--->


</body>
</html>