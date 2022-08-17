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
            <title>SellBooks</title>
<style>
body{

background-image: url(evie-s-yDN0aAiHSMg-unsplash.jpg);
background-position:center ;
background-repeat: no-repeat;
background-size: cover;
text-align: center;

}

.container{
    background-color: white;
    padding: 20px;
    font-family: 'Times New Roman', Times, serif;
    width: 35%;
    margin: auto;
}
p{
    font-size: 25px;
    font-weight: bolder;
}
</style>
<div class="container">
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        </head>

        <body>
            
      <p>  Thanks to show your interest in selling old books</p>
                <?php if (isset($_GET['error'])): ?>
                <p><?php echo $_GET['error']; ?></p>
            <?php endif ?>
                <form action="upload.php"
                method="post"
                enctype="multipart/form-data">
                <div class="ay3">

                <label class="ay4"> Name of the Book:</label>
                       
                        <input type="text" name="nameofbook"  required class="ay5"><br>
                        <br><label class="ay4">Author of the Book:</label>
                         <input type="author" name="author"  required class="ay5"><br>
                        <br><label class="ay4">Edition of the book: (if any)</label>
                        <input type="edition" name="edition"  class="ay5"><br>

                        <br> <label class="ay4">Is the cover page teared?</label>
                    <select class="ay6" name="chooseoption1" class="ay5">
                            <option>Choose option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select><br>
                         <br><label class="ay4">Is any page missing?</label>
                        <select class="ay6" name="chooseoption2" class="ay5">
                            <option>Choose option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                        <br><br><label class="ay4">Initial bid: </label>
                        <input type="number" name="price"   class="ay5">
                        <br><br><label class="ay4">Bid Start Time 	:</label>
                          
                          <input type = "datetime-local" name = "starttime"><br><br>
        <label class="ay4">Bid End Time 	:</label>
      <input type = "datetime-local" name = "endtime"><br><br>
                    </div>
                     
                     <label class="ay4">Upload the cover page of book:</label>
                <input type="file" class="ay7"
                        name="my_image">
<br><br><br>
                <input type="submit" class="ay8"
                        name="submit"
                        value="Upload" style="background:black; color:white;">
                
            </form>  
                </div>
            </body>
            
        </html>