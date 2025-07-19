<?php
include '../conn.php';
$d_nic="";
  


    if(isset($_POST["pa-btn"])){


$doctorr = $_POST['doctor'];
   $sql1 ="SELECT nic FROM doctors WHERE name= '$doctorr'";
   $results = mysqli_query($conn,$sql1);

   if(mysqli_num_rows($results)>0){
    while($row = mysqli_fetch_assoc($results)){
        $d_nic=$row["nic"];
    }
   }else{
    echo"no data";
   }


      
        $nic = $_POST['nic'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $tel = $_POST['tel'];
        $date = $_POST['date'];
        $doctor = $_POST['doctor'];
         $doc_nic=$d_nic;
        $reason = $_POST['reason'];
      
       

        $sql = "INSERT INTO appoinments (p_nic,p_name,age,tel,date,doctor,d_nic,reason) VALUES ('$nic','$name','$age','$tel','$date','$doctor','$doc_nic','$reason')";
       
       
        if(mysqli_query($conn,$sql)){
           
           echo " Appoinment Booked!";
           
        }else{
            echo "Try Again!";
        }

         
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appoinment Booking</title>

<link rel="stylesheet" href="../css/patient_appoinment.css">
        <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.23.7/dist/css/uikit.min.css" />


<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.23.7/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.23.7/dist/js/uikit-icons.min.js"></script>

</head>
<body>
    
<!--background start-->
<div class="uk-height-medium uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light pa-lob" data-src="../imgs/lo9.jpg" uk-img>
 <div class="uk-box-shadow-bottom">
<div class="uk-container">
 
       <div class="pa-box">
        <h1>Appoinment Booking Form</h1>
      
<br>


<!--form start-->
<form action="" method="POST">
    <input type="text" class="doa" placeholder="NIC No" name="nic"><br><br>
    <input type="text" class="doa" placeholder="FullName" name="name" required>
    <input type="int" class="doa" placeholder="Age" name="age"><br><br>
  
    <input type="text" class="doa" placeholder="Tel No" name="tel">
    <input type="date" class="doa" placeholder=" Date" name="date"><br>
   <br> <select name="doctor" class="lista">
         <option value=" ">Select a doctor</option>
 
   <?php
   $sql ="SELECT name FROM doctors";
   $results = mysqli_query($conn,$sql);

   if(mysqli_num_rows($results)>0){
    while($row = mysqli_fetch_assoc($results)){
        echo "
        <option value=".$row["name"].">".$row["name"]."</option>

        ";
    }
   }else{
    echo"no data";
   }
   ?>


</select>
    <input type="text" class="doa" placeholder="Reason" name="reason"><br>
   <br> 
    <br>
   
        <button type="submit" class="pa-btn" name="pa-btn">Book Aooinment</button>

        <div class="pa-lin">
            <br>
        </div>
        
         <a href="../PATIENT/patient_dashbord.php" class="ex"> <h1>EXIT?</h1>
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