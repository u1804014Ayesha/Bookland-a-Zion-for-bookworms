<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "login");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="privacy.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Privacy Policy</title>
</head>
<body>
    <div class="navbarheader">
        <h1  id="f1" >Bookland</h1>
       <span  id="f2" ><p id="p1">****A Zion for Bookworms</p>
       </span>
       <p id="mySidenav" class="sidenav">
       <?php
      if($_SESSION['logged']==false) echo '<a href="register.php" id="abc0">signup</a><br><a href="login.php" id="abc0">login</a>';  
       else
      
     echo  $_SESSION['user_name'].' '.$_SESSION['last_name'];
      
        ?>
       </p>
       <div class="topnav">
           <a  href="home2.php">Home</a>
           <a href="#educational">Educational</a>
           <a href="#novel">Novel</a>
           <a href="#literature">Literature</a>
           <a href="#science_fiction">Science Fiction</a>
           <a href="#comic">Comic</a>
           <a href="#fantasy">Fantasy</a>
           <a href="#horror">Horror</a>
           <a href="#detective">Detective</a>
           <a href="#mystery">Mystery</a>
           <a href="#action">Action</a>
           <a href="#others">Others</a>
   
         </div></div>
         <div class="backprivacy">
            <div><br><br><br>
                <h2>Bookland Privacy Policy</h2>
                <h4>What we stands for</h4>
            </div>
        </div><br><br>
        
        <div class="para1">
            <p>Bookland.com respects your privacy. Bookland.com knows that you care how information about you is used and shared, 
                and we appreciate your trust that we will do so carefully and sensibly.<br>
                <p id="bold">You are advised to read the Privacy Policy carefully.</p>
                 By accessing the services provided by Bookland.com you agree to the
                 collection and use of your data by Bookland.com in the manner provided in this Privacy Policy.</p>
        </div><br><br>
        <div class="f11">
        We Want you to 
        </div>
        <div class="para1">
           <ul class="list">
            <li>Feel our website trustworthy.</li>
            <li>Feel comfortable using our website.</li>
            <li>Feel secure to submit your informations.</li>
            <li>Contact us with your questions or concerns about privacy on this site.</li>
            <li>Know that by using our sites you are consenting to the collection of certain data.</li>
           </ul>
        </div>
        <br><br>
        <div class="f11">
            What information is, or may be, collected from you?
        </div>
        <div class="para1">
            <p>We may collect the following personally identifiable information about you -</p>
            <ul class="list">
                <li>Name including first name and last name.</li>
                <li>Email Address.</li>
                <li>Mobile phone number and contact details.</li>
                <li>Financial information (Like account or credit card numbers).</li>
                <li>Other information as per our registration and delivery process.</li>
            </ul>
            <p class="para2">You can terminate your account at any time.
            However, your information may remain stored in archive on our servers even after the 
            deletion or the termination of your account.</p>
        </div>
        <br><br>
        <div class="f11">
          How is the Information Used
        </div>
        <div class="para1">
            We use your personal information to:
            <ul class="list">
                <li>Make our bond more stronger by knowing your interests and tailoring our site to that.</li>
                <li>To get in touch with you when necessary.</li>
                <li>To provide the services requested by you.</li>
                <li>To preserve social history as governed by existing law or policy.</li>
            </ul>
        </div> <br><br>
        <div class="f11">
            What choices are available to you regarding collection, 
            use and distribution of your information?
        </div>
        <div class="para1">
            You may change your interests at any time and may opt-in or opt-out of any marketing / promotional / newsletters mailings. Rokomari.com reserves the right to send you certain service related communication, considered to be a part of your Rokomari.com account without offering you the facility to opt-out. You may update your information and change your account settings at any time.
            <br>
            Upon request, we will remove/block your personally identifiable information from our database, thereby canceling your registration. However, your information may remain stored in archive on our servers even after the deletion or the termination of your account.
            <br>
            If we plan to use your personally identifiable information for any commercial purposes, we will notify you at the time we collect that information and allow you to opt-out of having your information used for those purposes.
        
        </div>
        <br><br>
        <div class="f11">
            What security procedures are in place to protect information from loss, misuse or alteration?
        </div>
        <div class="para1">
            To protect against the loss, misuse and alteration of the information under our control, we have in place appropriate physical, electronic and managerial procedures. For example, our servers are accessible only to authorized personnel and that your information is shared with respective personnel on need to know basis to complete the transaction and to provide the services requested by you.
            <br>
            Although we will endeavor to safeguard the confidentiality of your personally identifiable information, transmissions made by means of the Internet cannot be made absolutely secure. By using this site, you agree that we will have no liability for disclosure of your information due to errors in transmission or unauthorized acts of third parties.
           
        </div><br><br>
        <div class="f11">
            Your rights
        </div>
        <div class="para1" id="para1up">
            If you are concerned about your data you have the right to request access to the personal data which we may hold or process about you. You have the right to request us to correct any inaccuracies in your data free of charge. At any stage you also have the right to ask us to stop using your personal data for direct marketing purposes.
        </div>
        <br><br>
        <div class="f11">
           Data Deletion
        </div>
        <div class="para1">
            A user of rokomari.com can delete their account and delivery data whenever they wish. To do so they need to contact us by sending an email to us at: admin@bookland.com. On their behalf, we will remove their data. 
            We will aim to complete their deletion request urgently. 
            This data cannot be recovered by any users or employees after this point. Data that has been deleted or otherwise destroyed can not be recovered at any time. 
            Data may still remain in the system backup files, which will be deleted periodically.
        </div><br><br>
        <div class="f11">
            Policy update
        </div>
        <div class="para1">
            We reserve the right to change or update this policy at any time by placing a prominent notice on our site. Such changes shall be effective immediately upon posting to this site.
            <br><br>
        </div>
    <footer id="body1" class="footer" >
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="aboutus.php">about us</a></li>
                        <li><a href="#">our services</a></li>
                        <li><a href="privacy.php">privacy policy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">shipping</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">order status</a></li>
                        <li><a href="#">payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>online shop</h4>
                    <ul>
                        <li><a href="#">newbooks</a></li>
                        <li><a href="#">oldbooks</a></li>
                        
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/Bookland-106698755406318"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
   </footer> 
</body>
</html>
 
