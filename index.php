<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC VIRTUAL</title>
    <link rel="stylesheet" href="css/style.css">

    <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.23.7/dist/css/uikit.min.css" />


<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.23.7/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.23.7/dist/js/uikit-icons.min.js"></script>


</head>
<body>

<!--Navigation bar start--->
<div uk-sticky>
<nav class="uk-navbar-container navi">
    <div class="uk-container ">
        <div uk-navbar>

            <div class="uk-navbar-left">

                <!--<a class="uk-navbar-item uk-logo" href="#" aria-label="Back to Home" src="imgs/logo.png">Logo</a>-->
                <a href="index.php">
                <img class="logoimg" src="imgs/ABClogo.png" alt="ABC VIRTUAL">
                </a>

             <!--   <ul class="uk-navbar-nav">
                    <li>
                        <a href="index1.php">Home</a>
                    </li>
                   
                </ul>-->
                
                 <div class="uk-navbar-item navn">
                    <h5><a href="index.php" class="uk-button uk-button-text">HOME</a></h5>
                </div>
                
                <div class="uk-navbar-item navn1">
                <h5>  <a href="aboutus.php" class="uk-button uk-button-text">ABOUT US</a></h5>
                </div>

                <div class="uk-navbar-item">
                
                    <form action="index.php">
                    <input class="uk-input uk-form-width-small searchbar" type="text" placeholder="Search" aria-label="Input">
                   
                    <button class="uk-button uk-button-default btn2">Search</button></form>
                     <form action="LOGINS/admin_doc_rece_login.php"><button class="uk-button uk-button uk-button-primary btn1">ABC VIRTUAL</button>
                
                    </form>
                   
                  
                </div>
               

            </div>

        </div>
    </div>
</nav>
</div>
<!--Navigation bar end-->


<!---Slideshow start--->

<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="min-height: 300; max-height: 600; animation: push; autoplay:true; autoplay-interval: 2000">


    <div class="uk-slideshow-items">
         
    
        <div>
            <img src="imgs/slide1.jpg" alt="" uk-cover>
            <div class="uk-position-center uk-position-small uk-text-center itxt">
                <h2 uk-slideshow-parallax="x: 100,-100">WELCOME TO ABC VIRTUAL</h2>
                <p class="pp" uk-slideshow-parallax="x: 200,-200">Your Most Trusted Health Care Partner in Sri Lanka!</p>
                 <form action="LOGINS/admin_doc_rece_login.php"><button class="uk-button uk-button uk-button-primary btn3">ABC VIRTUAL</button></form>
            </div>
        </div>
        <div>
            <img src="imgs/slide2.jpg" alt="" uk-cover>
            <div class="uk-position uk-panel txt1">
                <img class="imgg" src="imgs/ABClogo.png">    
               </div>
                <div class="uk-position-right uk-position-small uk-text-center itxt1">
                <h2 uk-slideshow-parallax="x: 100,-100">Top Heath Care Services<br>Providing Hospital.</h2>
                <p class="pp" uk-slideshow-parallax="x: 200,-200">We are coming to update your healthcare!</p>
            </div>
        </div>
         
        <div>
            <img src="imgs/slide3.jpg" alt="" uk-cover>
            <div class="uk-position-center uk-position-small uk-text-center itxt2">
                <h2  uk-slideshow-parallax="x: 100,-100">Since 1959;</h2>
                <p class="pp" uk-slideshow-parallax="x: 200,-200">Established in 1959 in Sri Lanka. Recognized by the Democratic Socialist Republic of SriLanka.</p>
                <form action="aboutus.php"><button class="uk-button uk-button uk-button-primary btn4">ABOUT US</button></form>
            </div>
        </div>
        <div>
            <img src="imgs/slide4.jpg" alt="" uk-cover>
              <div class="uk-position uk-position-small uk-text-center itxt3">
                <h2 uk-slideshow-parallax="x: 100,-100">66 Years of Excellency</h2>
                <p class="pp" uk-slideshow-parallax="x: 200,-200">100% Garenteeded Health Care Services.</p>
            </div>
        </div>
        <div>
            <img src="imgs/slide5.jpg" alt="" uk-cover>
             <div class="uk-position-left uk-position-small uk-text-center itxt4">
                <h2 uk-slideshow-parallax="x: 100,-100">Your Most Trusted<br> Healthcare Partner</h2>
                <p class="pp" uk-slideshow-parallax="x: 200,-200">-in SRI LANAKA.</p>
            </div>
        </div>
         <div>
            <img src="imgs/slide6.jpg" alt="" uk-cover>
             <div class="uk-position uk-position-small uk-text-center itxt5">
                <h2 uk-slideshow-parallax="x: 100,-100">#NO:1 Health Care Partner<br> in the SRI LANKA</h2>
                <p class="pp" uk-slideshow-parallax="x: 200,-200">Thank you for your Trustworty.</p>
            </div>
        </div>
         <div>
            <img src="imgs/slide7.jpg" alt="" uk-cover>
             <div class="uk-position-center uk-position-small uk-text-center itxt6">
                <h2 uk-slideshow-parallax="x: 100,-100">Your Trust is our Happy</h2>
                <p class="pp" uk-slideshow-parallax="x: 200,-200">Best solution for the healthcare sector.</p>
            </div>
        </div>
         <div>
            <img src="imgs/slide8.jpg" alt="" uk-cover>
             <div class="uk-position-center uk-position-small uk-text-center itxt7">
                <h2 uk-slideshow-parallax="x: 100,-100">Your Frindly Healthcare Partner</h2>
                <p class="pp" uk-slideshow-parallax="x: 200,-200">Challenging to new world.</p>
            </div>
        </div>
         <div>
            <img src="imgs/slide9.jpg" alt="" uk-cover>
             <div class="uk-position-center uk-position-small uk-text-center itxt8">
                <h2 uk-slideshow-parallax="x: 100,-100">We are Updated!</h2>
                <p class="pp" uk-slideshow-parallax="x: 200,-200">Break down the challenges & involving with new technology.</p>
            </div>
        </div>
         <div>
            <img src="imgs/slide10.jpg" alt="" uk-cover>
             <div class="uk-position-right uk-position-small uk-text-center itxt9">
                <h2 uk-slideshow-parallax="x: 100,-100">With a new Face</h2>
                <p class="pp" uk-slideshow-parallax="x: 200,-200">the introducing ABC VIRTUAL.</p>
            </div>
        </div>
    </div>
   

   <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slideshow-item="next"></a>

</div>

<!--Slideshow end-->


<!--slider start--->
<br><br><br>
<div class="uk-container">
    <div class="des">
        <h1>Our Services</h1>
         <p>ABC Virtual Hospital services are shown below. <br>
          With 66 Years of Excellency the ABC Virtual going forward.This is the leading and top hopital in Sri Lanka. with world-class services we warmly welcome you!</p>
    </div>
    
<div uk-slider ="autoplay: true; autoplay-interval:2000">

    <div class="uk-position-relative">

        <div class="uk-slider-container uk-light">
            <div class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m ">
                <div class="eximg">
                    <img src="imgs/sliders/card1.png" width="400" height="600" alt="">
                    <div class="uk-position-center uk-panel"></div>
                </div>
                <div class="eximg">
                    <img src="imgs/sliders/card2.png" width="400" height="600" alt="">
                    <div class="uk-position-center uk-panel"></div>
                </div>
                <div class="eximg">
                    <img src="imgs/sliders/card3.png" width="400" height="600" alt="">
                    <div class="uk-position-center uk-panel"></div>
                </div>
                <div class="eximg">
                    <img src="imgs/sliders/card4.png" width="400" height="600" alt="">
                    <div class="uk-position-center uk-panel"></div>
                </div>
                <div class="eximg">
                    <img src="imgs/sliders/card5.png" width="400" height="600" alt="">
                    <div class="uk-position-center uk-panel"></div>
                </div>
                <div class="eximg">
                    <img src="imgs/sliders/card6.png" width="400" height="600" alt="">
                    <div class="uk-position-center uk-panel"></div>
                </div>
                <div class="eximg">
                    <img src="imgs/sliders/card7.png" width="400" height="600" alt="">
                    <div class="uk-position-center uk-panel"></div>
                </div>
                <div class="eximg">
                    <img src="imgs/sliders/card8.png" width="400" height="600" alt="">
                    <div class="uk-position-center uk-panel"></div>
                </div>
                
            </div>
        </div>

        <div class="uk-hidden@s uk-light">
            <a class="uk-position-center-left uk-position-small" href uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small" href uk-slidenav-next uk-slider-item="next"></a>
        </div>

       <!-- <div class="uk-visible@s">
            <a class="uk-position-center-left-out uk-position-small" href uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right-out uk-position-small" href uk-slidenav-next uk-slider-item="next"></a>
        </div>-->

    </div>

    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

</div>
</div>
<!--slider end--->

<!--card start-->
<div class="car">
    <br>
    <h1>Our Facilities</h1>
    <br>
<div class="uk-container">
<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
    <div class="uk-flex-last@s uk-card-media-right uk-cover-container">

        <img src="imgs/card.jpg" alt="" uk-cover>
        <canvas width="600" height="400"></canvas>

    </div>
    <div>
        <div class="uk-card-body">
            <h3 class="uk-card-title ched">World Class Facilities.</h3>
            <p class="pdes">Experience unparalleled care at ABC Hospital, 
                where state-of-the-art technology meets compassionate expertise. 
                Our cutting-edge facilities include advanced diagnostic labs, modern surgical suites, 
                and specialized treatment centers for cardiology, oncology, and more. Designed for 
                comfort and efficiency, our serene patient rooms and 24/7 emergency services ensure your 
                health is in trusted hands. With ABC Virtual’s seamless digital integration, access
                 world-class healthcare effortlessly, anytime, anywhere.</p>
            <div class="uk-animation-toggle" tabindex="0">
    <div class="uk-animation-shake"> 
        <form action="aboutus.php"><button class="uk-button uk-button uk-button-primary btn3">ABOUT US</button></form></div>
</div>
            
            
        </div>
    </div>
</div>
</div>
<br>
</div>

<!--card end-->


<!--fixed image start--->
<div class="pic">

    
</div>
<!--fixed image end-->
<br><br><br>
<!--slider start-->
<div class="uk-container">
    <div class="des2">
        <h1>Our Specialized Doctors & Consultants</h1>
        <p>At ABC Hospital, we take pride in our team of highly skilled and dedicated specialized doctors and consultants who deliver exceptional care tailored to your needs. 
            With advanced training and expertise, our professionals are equipped to handle 
            a wide range of medical conditions using state-of-the-art technology and compassionate approaches. 
            Whether you require routine care or complex treatments, our specialists are committed to ensuring your health and well-being with personalized attention and cutting-edge solutions. 
            Trust us to bring world-class expertise to your healthcare journey.</p>
    </div>
    <br><br>
<div class="uk-slider-container-offset" uk-slider="autoplay:true; autoplay-interval:1000">

    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
         <div class="uk-slider-items uk-child-width-1-5 uk-grid uk-child-height-2-5">


        <!--<div class="uk-slider-items uk-child-width-1-2@s uk-grid">-->
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                    <div class="uk-card-media-top">
                        <img class="uk-transition-scale-up uk-transition-opaque" src="imgs/doctors/d1.png" width="625" height="725" alt="">
                    </div>
                    </div>
                    <div class="uk-card-body bcar" data-src="imgs/bb.png" uk-img>
                        <h3 class="uk-card-title">Cardiologist</h3>
                        <p>Specializes in diagnosing and treating heart conditions, including heart disease and hypertension, with advanced cardiac care.</p>
                        
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default">
                     <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                    <div class="uk-card-media-top">
                        <img class="uk-transition-scale-up uk-transition-opaque" src="imgs/doctors/d2.png" width="625" height="725" alt="">
                        </div>
                    </div>
                    <div class="uk-card-body bcar">
                        <h3 class="uk-card-title">Family Physician</h3>
                        <p>Offers comprehensive healthcare for individuals and families across all ages, focusing on prevention and general health.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default">
                     <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                    <div class="uk-card-media-top">
                       <img class="uk-transition-scale-up uk-transition-opaque" src="imgs/doctors/d3.png" width="625" height="725" alt="">
                       </div>
                    </div>
                    <div class="uk-card-body bcar">
                        <h3 class="uk-card-title">Gastroenterologist</h3>
                        <p>Manages diseases of the digestive system, including liver, stomach, and intestines, with diagnostic and therapeutic procedures.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default">
                     <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                    <div class="uk-card-media-top">
                       <img class="uk-transition-scale-up uk-transition-opaque" src="imgs/doctors/d4.png" width="625" height="725" alt="">
                       </div>
                    </div>
                    <div class="uk-card-body bcar">
                        <h3 class="uk-card-title">Neurologist</h3>
                        <p>Diagnoses and treats disorders of the nervous system, including brain, spinal cord, and nerve conditions like epilepsy.</p>
                    </div>
                </div>
            </div>
             <div>
                <div class="uk-card uk-card-default">
                     <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                    <div class="uk-card-media-top">
                       <img class="uk-transition-scale-up uk-transition-opaque" src="imgs/doctors/d5.png" width="625" height="725" alt="">
                       </div>
                    </div>
                    <div class="uk-card-body bcar">
                        <h3 class="uk-card-title">Anesthesiologist</h3>
                        <p>Manages pain relief and sedation during surgeries and other medical procedures, ensuring patient safety.</p>
                    </div>
                </div>
            </div>
             <div>
                <div class="uk-card uk-card-default">
                     <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                    <div class="uk-card-media-top">
                       <img class="uk-transition-scale-up uk-transition-opaque" src="imgs/doctors/d6.png" width="625" height="725" alt="">
                       </div>
                    </div>
                    <div class="uk-card-body bcar">
                        <h3 class="uk-card-title">Emergency Medicine Specialist</h3>
                        <p>Provides immediate care for acute illnesses and injuries in emergency settings, stabilizing patients quickly.</p>
                    </div>
                </div>
            </div>

            <div>
                <div class="uk-card uk-card-default">
                     <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                    <div class="uk-card-media-top">
                        <img class="uk-transition-scale-up uk-transition-opaque" src="imgs/doctors/d7.png" width="625" height="725" alt="">
                        </div>
                    </div>
                    <div class="uk-card-body bcar">
                        <h3 class="uk-card-title">Infectious Disease Specialist</h3>
                        <p>Treats infections caused by bacteria, viruses, fungi, or parasites, often managing complex or rare cases.</p>
                    </div>
                </div>
            </div>
        </div>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slider-item="next"></a>

    </div>

    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

</div>
</div>
</div>
<!--slider end-->

<!--video and card start-->
<br><br>
<div class="back1">
    <div class="uk-container">
        <br>
        <h1>ABC VIRTUAL</h1>
  <div class="uk-child-width-1-2@s uk-grid-match" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-hover uk-card-body cb">
            <h3 class="uk-card-title">Excellency of Services</h3>
            <p>At ABC Virtual, we are committed to delivering exceptional healthcare services designed to meet 
                your every need with convenience and excellence. Our comprehensive range of offerings includes 
                advanced diagnostic testing with state-of-the-art labs, expert surgical procedures in modern operating suites,
                 and specialized treatments in areas such as cardiology, oncology, and neurology. We provide 24/7 emergency care, 
                 serene patient rooms for comfort, and seamless digital integration through ABC Virtual, allowing you to access 
                 world-class healthcare anytime, anywhere.</p>
        </div>
    </div>

    <!--<iframe src="imgs/videos/abc.mp4" width="295px" height="325px" uk-video></iframe>-->
    <video width="295" height="325" controls>
    <source src="imgs/videos/abc.mp4" type="video/mp4">
    
</video>
</div>
 </div>
 </div>
<!--video and cart end-->

<!--card start--->

    <br><br>
    <div class="uk-container des3"> 
        <h1>Access the Ultimate Features</h1>
    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match cbb" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom; target: .uk-card; delay: 300; repeat: true">
       
        <div>
    
        <div class="uk-card uk-card-default uk-card-body cb2">
            <h3 class="uk-card-title">DOCTOR PORTAL</h3>
            <p>The Doctors Portal is designed to streamline physician workflows and enhance patient care. 
                Doctors can log in to manage their schedules, review patient records and update plans. 
                all within a secure and efficient platform.</p>
                  <div class="uk-animation-toggle" tabindex="0">
    <div class="uk-animation-shake"> 
               <form action="LOGINS/admin_doc_rece_login.php"> <button class="uk-button uk-button-default btn2">MORE    ></button></form></div></div>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-primary uk-card-body cb2" uk-scrollspy-class="uk-animation-slide-top">
            <h3 class="uk-card-title">PATIENT PORTAL</h3>
            <p>A secure, user-friendly portal allows patients to access medical records, 
                view test results, request prescription refills, and manage your health journey,
                 empowering patients with control and convenience.</p><br>
                   <div class="uk-animation-toggle" tabindex="0">
    <div class="uk-animation-shake"> 
                <form action="LOGINS/patientlogin.php"> <button class="uk-button uk-button-default btn2">MORE   ></button></form></div></div>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-secondary uk-card-body cb2 ">
            <h3 class="uk-card-title">RECEPTIONIST PROTAL</h3>
            <p>The Receptionists Portal empowers administrative staff to manage hospital operations effectively. 
                Receptionists can log in to the system and manage well. 
                This portal ensures smooth front-desk operations.
            </p>
              <div class="uk-animation-toggle" tabindex="0">
    <div class="uk-animation-shake"> 
            <form action="LOGINS/admin_doc_rece_login.php"><button class="uk-button uk-button-default btn2">MORE     ></button></form></div></div>
        </div>
    </div>
</div>

</div>
<!--card end-->

<!--comments start-->
<br><br>
<div class="com1">
    <div class="uk-container">
        <br>
     <h1>What Our Patients Say</h1>
     <p>Discover the experiences and opinions of our valued customers, <br>showcasing the trust and satisfaction they have in our products and services.</p>
     
    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match cbb" uk-grid uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 500; repeat: true">
     
        <div>
        <div class="uk-card uk-card-default uk-width-1-1@m cbb">
    <div class="uk-card-header colo">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
                <img class="uk-border-circle" width="40" height="40" src="imgs/avatar.jpeg" alt="Avatar">
            </div>
            <div class="uk-width-expand hh">
                <h3 class="uk-card-title uk-margin-remove-bottom">Lois</h3>
                <p class="uk-text-meta uk-margin-remove-top"><time >Dec 15, 2024</time></p>
            </div>
        </div>
    </div>
    <div class="uk-card-body bd">
        <p>"Amazing product! It exceeded my expectations and the support team was incredibly helpful."</p>
    </div>
    <div class="uk-card-footer foo">
        <a href="aboutus.php" class="uk-button uk-button-text">Read more</a>
    </div>

</div>
</div>


        <div>
        <div class="uk-card uk-card-default uk-width-1-1@m cbb">
    <div class="uk-card-header colo">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
                <img class="uk-border-circle" width="40" height="40" src="imgs/avatar1.jpg" alt="Avatar">
            </div>
            <div class="uk-width-expand hh">
                <h3 class="uk-card-title uk-margin-remove-bottom">Peter Griffin</h3>
                <p class="uk-text-meta uk-margin-remove-top"><time >Feb 20, 2025</time></p>
            </div>
        </div>
    </div>
    <div class="uk-card-body bd">
        <p>"Fast delivery and great quality. Will definitely shop again!"</p>
    </div>
    <div class="uk-card-footer foo">
        <a href="aboutus.php" class="uk-button uk-button-text">Read more</a>
    </div>
    
</div>

</div>


   <div>
        <div class="uk-card uk-card-default uk-width-1-1@m cbb">
    <div class="uk-card-header colo">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
                <img class="uk-border-circle" width="40" height="40" src="imgs/avatar2.jpeg" alt="Avatar">
            </div>
        
            <div class="uk-width-expand hh">
                <h3 class="uk-card-title uk-margin-remove-bottom">Mearg Simpson</h3>
                <p class="uk-text-meta uk-margin-remove-top"><time >June 08, 2025</time></p>
            </div>
        </div>
    </div>
    <div class="uk-card-body bd">
        <p>"The service was top-notch, and the product is fantastic. Highly recommend!"</p>
    </div>
    <div class="uk-card-footer foo">
        <a href="aboutus.php" class="uk-button uk-button-text">Read more</a>
    </div>
</div>
    
</div>

</div>
</div>
<br><br>
<!--coments end-->



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
