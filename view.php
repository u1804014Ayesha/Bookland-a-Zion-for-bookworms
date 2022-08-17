<?php include "db_conn.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Bidding post</title>
    
    <style>
body{

    background-image: url(pexels-cottonbro-3661193.jpg);
    background-position:center ;
    background-repeat: no-repeat;
    background-size: cover;
    text-align: center;
   
}
.ayesha45
{
    font-size: 35px;
  
    color: black;
    
  
}
img{

width:80%;
height: auto;

}
.book_container{

    float: left;
    background-color: rgb(214,134,54);
    font-size: 10px;
    padding: 2px;
    height: 350px;
    margin: 15px;
    transition: 0.5s;
}
.book_container:hover{

    box-shadow: 2px 2px 2px 2px rgb(120,108,97);
}
</style>
    </head>
<body>
<div class="container">
<p class="ayesha45"><a href="question.php" style="text-decoration:none; color:black;" >Add More Books to Sell</a></p>
<div>
<?php 
          $sql = "SELECT * FROM oldbook ORDER BY id DESC";
          
          $res = mysqli_query($conn,  $sql);
           
          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
             
             <div  class="book_container">
              <div>
              <img src="uploads/<?=$images['image_url']?>">
              <?php  
                    echo "<br>"; 
                    echo 'Name of the book:          '.$images['nameofbook'];echo "<br>";
                    echo 'Author of the book:        '.$images['author'];echo "<br>";
                    echo 'Edition of the book:        '.$images['edition'];echo "<br>";
                    echo 'Is cover page teared or not?: '.$images['chooseoption1'];echo "<br>";
                    echo 'Is page missed or not? '.$images['chooseoption2'];echo "<br>";
                    echo 'Initial bid for the book:' .$images['price'];echo "<br>";
                     echo "<br>";
                    echo ' ' . '<form method = "post" action = "details.php"><button name = "details" type = "submit" style="background:black; color:white;" value = ' . $images['ID'] . '>Details</button></form>';
                    echo "<br>";
               ?>
              </div>
              </div>
          		
    <?php }  }
    ?>  
    </div>
</div>
</body>
</html>