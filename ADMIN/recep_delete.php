<?php
    include '../conn.php';
  
    $nic = $_GET['r_nic'];
   

    $sqldel = "DELETE FROM receptionist WHERE nic=$nic";
   

    if(mysqli_query($conn, $sqldel)){
       header("location: ../ADMIN/recep_view.php");

        
    }else {
        echo "ERROR" . mysqli_connect_error($conn);
    }

     
   

   
     $sqldel1 = "DELETE FROM loginn WHERE nic=$nic";

    if(mysqli_query($conn,$sqldel1)){
       header("location: ../ADMIN/recep_view.php");

        
    }else {
        echo "ERROR" . mysqli_connect_error($conn);
    }



?>