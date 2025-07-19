<?php
include 'conn.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All appoinments</title>

<link rel="stylesheet" href="css/appoinment.css">
        <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.23.7/dist/css/uikit.min.css" />


<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.23.7/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.23.7/dist/js/uikit-icons.min.js"></script>

</head>
<body>
    
<!--background start-->
<div class="uk-height-medium uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light aa-lob" data-src="imgs/lo8.jpg" uk-img>
 <div class="uk-box-shadow-bottom">
<div class="uk-container">
 
       <div class="aa-boxv">
        <h1> All Appoinements</h1>
      

<!--table start-->
<div class="uk-overflow-auto">
    <table class="uk-table uk-table-hover uk-table-divider">
        <thead>
               <tr>
                <th class="">ID</th>
                <th class="">Doctor NIC</th>
                <th class="">Doctor Name</th>
                <th class="">Patient_NIC</th>
                <th class="">Patient_Name</th>
                <th class="">Patient_Age</th>
                <th class="">Patient_Tel</th>
                <th class="">Appoinment_Date</th>
                <th class="">Reason</th>
               
            </tr>

        </thead>
        <tbody>
              <?php
              
              
   $sql ="SELECT * FROM appoinments";
   $results = mysqli_query($conn,$sql);

   if(mysqli_num_rows($results)>0){
    while($row = mysqli_fetch_assoc($results)){
        echo "<tr>
        <td>".$row["idd"]."</td>
        <td>".$row["d_nic"]."</td>
        <td>".$row["doctor"]."</td>
        <td>".$row["p_nic"]."</td>
        <td>".$row["p_name"]."</td>
        <td>".$row["age"]."</td>
        <td>".$row["tel"]."</td>
        <td>".$row["date"]."</td>
        <td>".$row["reason"]."</td>
       

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