<?php
    include '../conn.php';
  
    $nic = $_GET['d_nic'];
   

    $sqldel = "DELETE FROM doctors WHERE nic=$nic";
   

    if(mysqli_query($conn, $sqldel)){
       header("location: ../ADMIN/doctor_view.php");

        
    }else {
        echo "ERROR" . mysqli_connect_error($conn);
    }

     
   

   
     $sqldel1 = "DELETE FROM loginn WHERE nic=$nic";

    if(mysqli_query($conn,$sqldel1)){
       header("location: ../ADMIN/doctor_view.php");

        
    }else {
        echo "ERROR" . mysqli_connect_error($conn);
    }



?>
