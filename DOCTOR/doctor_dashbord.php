<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashbord</title>
    <link rel="stylesheet" href="../css/style.css">
    
    <link rel="stylesheet" href="../css/doctor.css">
      <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.23.7/dist/css/uikit.min.css" />


<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.23.7/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.23.7/dist/js/uikit-icons.min.js"></script>
</head>
<body>
  
    <!--Navigation bar start--->
<div uk-sticky>
<nav class="uk-navbar-container davi">
    <div class="uk-container ">
        <div uk-navbar>

            <div class="uk-navbar-left">

               
                <a href="../DOCTOR/doctor_dashbord.php">
                <img class="logoimg" src="../imgs/ABClogo.png" alt="ABC VIRTUAL">
                </a>


                <div class="uk-navbar-item">
                   
                
                    <form action="../index.php">
                    <input class="uk-input uk-form-width-small searchbar" type="text" placeholder="Search" aria-label="Input">
                   
                    <button class="uk-button uk-button-default btn2">Search</button></form>
                   
                    </form>
                    <!--date-->
                    <div class="date">
                      <?php
                        date_default_timezone_set("Asia/Colombo");
                        echo date("h:i:sa");
                    ?>
                    </div>
                    <!--profile-->
                    <div class="uk-inline">
                     <div class="uk-width-auto pro">
                <img class="uk-border-squar pro1" width="40" height="40" src="../imgs/avatar.jpeg" alt="Avatar">
            </div>
            
    
    <div uk-drop="mode: click" class="col1">
        <div class="uk-card uk-card-body uk-card-default clo">
            <button class="uk-drop-close" type="button" aria-label="Close" uk-close></button>
            <h1>Doctor</h1>
            <p>You are viewing doctor dashbord now! <br>access the your features. <br>ABC VIRTUAL Hospital (PVT) Ltd.</p>
             <form action="../LOGINS/admin_doc_rece_login.php"><button class="uk-button uk-button-default btn2">LogOut</button></form>
        </div>
    </div>
</div>
                   
                  
                </div>
               

            </div>

        </div>
    </div>
</nav>
</div>
<!--Navigation bar end-->
<div class="uk-height-medium uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light dlob" data-src="../imgs/lo3.jpg" uk-img>

<!--content start-->
<div class="com-doctor">
    <div class="uk-container">
        <br>
     <h1>HI!, Welcome to Doctor Dashbord.</h1>
     <p>Access your features in the ABC VIRTUAL Hospital management system.<br>-You are a authorized user of this system-</p>
     
    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match cbb" uk-grid uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 500; repeat: true">
     
        <div>
        <div class="uk-card uk-card-default uk-width-1-1@m d-cb">
    <div class="uk-card-header colo">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
           
            <div class="uk-width-expand hh">
                <h3 class="uk-card-title uk-margin-remove-bottom">My Appoinments</h3>
                <p class="uk-text-meta uk-margin-remove-top">ABC VIRTUAL</p>
            </div>
        </div>
    </div>
    
    <div class="uk-card-body d-bd">
         <ul class="uk-list uk-list-divider">
   <li> <a href="../DOCTOR/doc_appoinment.php"><p>MY Appoinments</p></a></li>
   
 
</ul>
    </div>
    <div class="uk-card-footer foo-doctor">
        <a href="" class="uk-button uk-button-text">ACCESS</a>
    </div>

</div>
</div>


        <div>
        <div class="uk-card uk-card-default uk-width-1-1@m d-cb">
    <div class="uk-card-header colo">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
           
        
            <div class="uk-width-expand hh">
                <h3 class="uk-card-title uk-margin-remove-bottom">ALL Appoinments</h3>
                <p class="uk-text-meta uk-margin-remove-top">ABC VIRTUAL</p>
            </div>
        </div>
    </div>
    <div class="uk-card-body d-bd">
        <ul class="uk-list uk-list-divider">
   <li> <a href="../appoinments.php"><p>VIEW ALL</p></a></li>
    
 
</ul>
    </div>
    <div class="uk-card-footer foo-doctor">
        <a href="" class="uk-button uk-button-text">ACCESS</a>
    </div>
    
</div>

</div>


   <div>
        <div class="uk-card uk-card-default uk-width-1-1@m d-cb">
    <div class="uk-card-header colo">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
           
        
        
            <div class="uk-width-expand hh">
                <h3 class="uk-card-title uk-margin-remove-bottom">-</h3>
                <p class="uk-text-meta uk-margin-remove-top">ABC VIRTUAL</p>
            </div>
        </div>
    </div>
    <div class="uk-card-body d-bd">
        <p>""</p>
    </div>
    <div class="uk-card-footer foo-doctor">
        <a href="" class="uk-button uk-button-text">ACCESS</a>
    </div>
</div>

    
</div>

</div>


        <br>
   



    
</div>

</div>
<!--content end-->

<br><br>

</body>
</html>