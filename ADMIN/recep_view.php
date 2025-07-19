<?php
include '../conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Receptionists</title>

<link rel="stylesheet" href="../css/admin_recep.css">
        <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.23.7/dist/css/uikit.min.css" />


<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.23.7/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.23.7/dist/js/uikit-icons.min.js"></script>

</head>
<body>
    
<!--background start-->
<div class="uk-height-medium uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light ar-lob" data-src="../imgs/lo7.jpg" uk-img>
 <div class="uk-box-shadow-bottom">
<div class="uk-container">
 
       <div class="ar-boxv">
        <h1>View Registered Receptionists</h1>
      


<!--table start-->
<div class="uk-overflow-auto">
    <table class="uk-table uk-table-hover uk-table-divider">
        <thead>
               <tr>
                <th class="">Update</th>
                <th class="">Delete</th>
                <th class="">Receptionist_ID</th>
                <th class="">Name</th>
                <th class="">DOB</th>
                <th class="">Age</th>
                <th class="">Gender</th>
                <th class="">NIC</th>
                <th class="">Email</th>
                <th class="">Address</th>
                <th class="">Tel</th>
                <th class="">Username</th>
                <th class="">Password</th>
            </tr>

        </thead>
        <tbody>
              <?php
   $sql ="SELECT * FROM receptionist";
   $results = mysqli_query($conn,$sql);

   if(mysqli_num_rows($results)>0){
    while($row = mysqli_fetch_assoc($results)){
        echo "<tr>
        <td><a href='recep_delete.php?r_nic=$row[nic]'>Delete</a></td>
        <td><a href='recep_update.php?r_nic=$row[nic]'>Update</a></td>
        <td>".$row["idd"]."</td>
        <td>".$row["name"]."</td>
        <td>".$row["dob"]."</td>
        <td>".$row["age"]."</td>
        <td>".$row["gender"]."</td>
        <td>".$row["nic"]."</td>
        <td>".$row["email"]."</td>
        <td>".$row["address"]."</td>
        <td>".$row["tel"]."</td>
        <td>".$row["username"]."</td>
        <td>".$row["password"]."</td>

        </tr>";
    }
   }else{
    echo"no data";
   }
   
   ?>


        </tbody>
</table>
</div>

<!--table end-->



        
    </div> 
    </div>
    
</div>



</div>
</div>
<!---background end--->


</body>
</html>