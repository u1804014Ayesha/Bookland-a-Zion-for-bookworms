<?php

	$bidder_id = $_POST['bidder_id'];
	$bid_id = $_POST['bid'];
	$new_bid = $_POST['new_bid'];
	
	$user = "root";
	$pass = "";
	$db = "login";
	$_GET['bid_ok'] = 1;
			
	$db_connect = mysqli_connect("localhost", $user, $pass, $db) or die("no database found");
	//echo $bidder_id, $bid_id, $new_bid;
	
	$qry = "SELECT Top_Bid FROM oldbook WHERE ID = '$bid_id'";
	$res = mysqli_query($db_connect, $qry);
	$row = mysqli_fetch_assoc($res);
	$prev_top_bid = $row['Top_Bid'];
	if($new_bid > $prev_top_bid)
	{
		$qry = "UPDATE oldbook SET Top_Bid = '$new_bid', Top_Bidder_ID = '$bidder_id' WHERE ID = '$bid_id'";
		mysqli_query($db_connect, $qry);
		$_POST['details'] = $bid_id;
		include("details.php");
	}
	
?>