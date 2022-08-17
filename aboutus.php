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
    <title>About us</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="styleabout.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
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

      </div></div><br><br><br>

        </header>
         <div class="pop1"> 
            <div class="k1">
                About Us
                
            </div>
        <div class="k3">
            
            <blockquote><p class="pop98">"It is is better to know one book intimately<br> than a hundred superficially."</p>
                <cite class="k9">~Donna Tartt, <em>The Secret History</em></cite></blockquote>   
        </div>

        
        <div class="k2">
             
            Hey Bookworms!! You are at the right place for your desired book.The BookLand team is committed to bring all kinds of best book in
             the world at as cheaper price as possible.
            It provides different categories of book. It includes comics, novels, fantasy, mystery, action,educational (To keep your parents happy<em>&#128515;</em>),best seller books. 
            If you are searching for a book only write the name of book on search option, we will try to find out the book even if we have to move heaven, earth and even old cupboards to find it for you.
            <br> <br>  Are you worry about where to keep the stack of your old and unwanted books?  <br><em class="k10"> No Worry!!</em>We are here with an exciting 
            option of selling your old books. The website provides a bidding section which deals with this old books.
            The book you bid for sell will go through an auction phase to get the desirable price of book.
            BookLand will be wise option for people who are looking to save money on book cost.
        <br>
        I know , I have brainwashed you. To enjoy the exiciting features of the website, please browse the store and make a good use of it.
          Browse through them amd order. Don't forget your friendly website, BookLand.
        We, surely shall never forget you!
        <br>
        <br>
        </div>
    </div>
        </body>
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
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
       </footer>
    </html>
        </html>