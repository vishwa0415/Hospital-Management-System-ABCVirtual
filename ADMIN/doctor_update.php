<?php
    include '../conn.php';
    
    
 
    $nic = $_GET['d_nic'];

    $edit = "SELECT name,dob,age,gender,nic,email,address,tel,quali,special,username,password FROM doctors WHERE nic=$nic";
    $results = mysqli_query($conn, $edit);

    if(mysqli_num_rows($results)>0){
        while($row = mysqli_fetch_assoc($results)){
            $name = $row["name"];
            $dob = $row["dob"];
            $age = $row["age"];
            $gender = $row["gender"];
            $nnic = $row["nic"];
            $email = $row["email"];
            $address = $row["address"];
            $tel = $row["tel"];
            $quali = $row["quali"];
            $special = $row["special"];
            $username = $row["username"];
            $password = $row["password"];
           
    }
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update doctors data</title>

<link rel="stylesheet" href="../css/admin_doctor.css">
        <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.23.7/dist/css/uikit.min.css" />


<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.23.7/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.23.7/dist/js/uikit-icons.min.js"></script>

</head>
<body>
    
<!--background start-->
<div class="uk-height-medium uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light adu-lob" data-src="../imgs/lo6.jpg" uk-img>
 <div class="uk-box-shadow-bottom">
<div class="uk-container">
 
       <div class="ad-boxu">
        <h1>Doctors Data Update</h1>
      
<br>
 

<!--form start-->


 <!--<button type="submit" class="ad-btn" name="adu-btn">VIEW</button><br>-->

<form action="" method="POST">
    <div class="inf">
     
   <p>Name: <input type="text" class="do" placeholder="FullName" name="name" value="<?php echo $name?>"></p>
      <p >Dateofbirth:<input type="date" class="do" placeholder="DateOfBirth" name="dob" value="<?php echo $dob?>"></p>
      <p>Age:<input type="int" class="do" placeholder="Age" name="age" value="<?php echo $age?>"> </p>
     <p>Gender:<input type="text" class="do" name="gen" placeholder="Gender" value="<?php echo $gender?>"> </p>
    <p> NIC: <input type="text" class="do" placeholder="NIC no" name="nic" value="<?php echo $nnic?>"></p>
     <p>Email: <input type="email" class="do" placeholder="Email" name="email" value="<?php echo $email?>"></p>
   <p> Address:<input type="text" class="do" placeholder="Address" name="address" value="<?php echo $address?>"></p>
     <p> Tel:<input type="text" class="do" placeholder="Telephone no" name="tel" value="<?php echo $tel?>"> </p>
     <p> Qualification: <input type="text" class="do" placeholder="Qualification" name="quali" value="<?php echo $quali?>"></p>
      <p>Specialization<input type="text" class="do" placeholder="Specialization" name="special" value="<?php echo $special?>"></p>
   <p>Username:<input type="text" class="do" placeholder="Username" name="us" value="<?php echo $username?>" required></p>
      <p>Password:<input type="password" class="do" placeholder="Password" name="pw" value="<?php echo $password?>"  required></p>
    
    </div>
   
        <button type="submit" class="adu-btn" name="adu-btn">Update</button>

        <div class="adu-lin">
            <br>
        </div>
        
         <a href="../ADMIN/admin_dashbord.php" class="ex"> <h1>EXIT?</h1>
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
  <?php
        if(isset($_POST["adu-btn"])){
            $name = $_POST['name'];
            $dob = $_POST['dob'];
            $age = $_POST['age'];
            $gender = $_POST['gen'];
            $nnic = $_POST['nic'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $tel = $_POST['tel'];
            $quali = $_POST['quali'];
            $special = $_POST['special'];
            $username = $_POST['us'];
            $password = $_POST['pw'];

            $edit2 = "UPDATE `doctors` SET `name`='$name', `dob`='$dob', `age`='$age', `gender`='$gender', `nic`='$nnic', `email`='$email', `address`='$address', `tel`='$tel', `quali`='$quali', `special`='$special', `username`='$username', `password`='$password' WHERE `nic`=$nic;";
            
            if(mysqli_query($conn, $edit2)){
                header("Location: ../ADMIN/doctor_view.php");
            } else {
                echo "error : ". $edit2 . "<br>" . mysqli_error($conn);
            }


             $edit3 = "UPDATE `loginn` SET `username`='$username', `password`='$password', `nic`='$nnic' WHERE `nic`=$nic;";
            
            if(mysqli_query($conn, $edit3)){
               
               header("Location: ../ADMIN/doctor_view.php");
            } else {
                echo "error : ". $edit3 . "<br>" . mysqli_error($conn);
            }
        }
    ?>
