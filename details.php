<html>
<head>
<link href = "" rel = "stylesheet" type = "text/css" >
<title>Bidding details</title>
<style type = "text/css">
	
</style>
</head>
<body>
<?php
	//header("Location: bid_table_check.php");
	include "bid_table_check.php";
?>


	
	
	<div id = "Mainpanel">
		<?php
		
			$user = "root";
			$pass = "";
			$db = "login";
			
			$db_connect = mysqli_connect("localhost", $user, $pass, $db) or die("no database found");

			//echo "Database Connected"."<br>";
			$bid_id = $_POST['details'];
			$qry = "SELECT oldbook.ID, oldbook.nameofbook, oldbook.author, oldbook.edition,oldbook.price,
						oldbook.chooseoption1, oldbook.chooseoption2,oldbook.image_url, oldbook.status, time_track.starttime, time_track.endtime 
							FROM oldbook, time_track 
								WHERE ID = '$bid_id' AND oldbook.Time_track = time_track.Track_ID";

			$q="SELECT * from users";
			$res2=mysqli_query($db_connect, $q);
			$res = mysqli_query($db_connect, $qry);
			$row = mysqli_fetch_assoc($res);
			$row2 = mysqli_fetch_assoc($res2);
			 
			//echo $row['Product_Name'] . " " . $row['Category'] . " " . $row['Top_Bid'] . " " . $row['Top_Bidder_ID'] . " " . $row['Start_Time'] . " " . $row['End_Time'] . " " . $row['Status'] . "<br>";
			echo "<div style = 'width : 450px; height : 100%; background-color : white; float : left'>";
				//echo "<image src = 'image.png' style = 'margin-left : 20%; margin-top : 3%'>";
				//echo "<h3 style = 'margin-left : 20%; color : blue'>BID ID : " . $row['image_url'] . "</h3>";
				
				
				
     
    
				echo "<h3 style = 'margin-left : 20%; color : blue'>BID ID : " . $row['ID'] . "</h3>";
				echo "<h4 style = 'margin-left : 20%'>Book Name : " . $row['nameofbook'] . "</h4>";
				echo "<h4 style = 'margin-left : 20%'>Author name : " . $row['author'] . "</h4>";
				echo "<h4 style = 'margin-left : 20%'>Edition : " . $row['edition'] . "</h4>";
				echo "<h4 style = 'margin-left : 20%'>Is the cover page teared? : " . $row['chooseoption1'] . "</h4>";
				echo "<h4 style = 'margin-left : 20%'>Is any page missing? : " . $row['chooseoption2'] . "</h4>";
				echo "<h4 style = 'margin-left : 20%'>Bid Start Time : " . $row['starttime'] . "</h4>";
				echo "<h4 style = 'margin-left : 20%'>Bid End Time : " . $row['endtime'] . "</h4>";
				echo "<h4 style = 'margin-left : 20%'>Initial Bid : " . $row['price'] . "</h4>";
				echo "<h4 style = 'margin-left : 20%'>Status : " . $row['status'] . "</h4>";
		if($row['seller_id']==$row2['ID']) echo "HH";
			echo "</div>";
			//echo $bid_id;
			echo "<div style = 'width : 450px; height : 100%; float : right; background-color : white'>";
				if(strcmp($row['status'], "ongoing") == 0){
					/*echo "<h2 style = 'margin-left : 32%; margin-top : 10%'>Status : <font color = 'green'>Ongoing</h2>";
					echo "<table style = 'border-collapse : collapse; width : 50%' align = center><tr><th colspan = 2>Top Bid</th></tr>";
						if($row['Top_Bidder_ID'] == $row['Seller_ID'])
							echo "<td colspan = 2 align = 'center'><b>Haven't Bid Yet</b></td>";
						else 
							echo "<td align = 'center'>" . $row['Top_Bidder_ID'] . "</td><td align = 'center'>" . $row['Top_Bid'] . "</td>";
					echo "</table>";
					echo "<br><br>";*/
					echo "<h2 align = center><font color = 'red'>Bid Now!</font></h2>";
					echo "<form action = 'Bid_update.php' align = 'center' method = 'post'>";
						//echo "<input type = 'text' name = 'bid_id' placeholder = 'Bid ID' style = 'height : 40px; width : 225px; font : 35px'><br>";
						echo "<input type = 'text' name = 'bidder_id' placeholder = 'Your ID' style = 'height : 40px; width : 225px; font : 35px'><br>";
						echo "<input type = 'text' name = 'new_bid' placeholder = 'Your Bid' style = 'height : 40px; width : 225px; font : 35px'><br>";
						echo "<button type = 'submit' name = 'bid' value = " . $bid_id . " style = 'background-color : #CCC; padding : 7px 10px'>BID</button>";
					echo "</form>";
						
				}
				else if(strcmp($row['status'], "yet to bid") == 0)
					echo "<h2 style = 'margin-left : 35%; margin-top : 20%'>Status : <font color = 'red'>Yet To Bid</h2>";
				else 
				{
					echo "<h2 style = 'margin-left : 32%; margin-top : 15%'>Status : <font color = 'red'>Finished</h2>";
					//echo "<table style = 'border-collapse : collapse; width : 50%' align = center><tr><th colspan = 2>Top Bid</th></tr>";
						
				}
			echo "</div>";
		?>
	</div>

</div>



</body>
</html>