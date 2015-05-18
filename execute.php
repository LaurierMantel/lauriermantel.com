<?php

include "private.php"; //Has database usernames & passwords 
include "location.php";
//Gathering information about page view (time, client IP address)
$timestamp = $_SERVER['REQUEST_TIME'];

$datetime = gmdate("Y-m-d H:i:s", $timestamp);

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

//connecting to mySQL database
$link = mysqli_connect("localhost",$db_user,$db_pass,$db_user);

if(mysqli_connect_error())
{
	die();
}


else
{
	$query = "SELECT * FROM `viewers` WHERE `ipaddress` = '".$ip."' LIMIT 1;";
	
	
	
	if($result = mysqli_query($link, $query))
	{
		$row = mysqli_fetch_array($result);
		
		
		if (!$row)
		{
			
			
			$location = lookupIP($ip);
			
			$query = "INSERT INTO `viewers` (`ipaddress`,`totalviews`,`recentview`,`location`) VALUES ('".$ip."',1,'".$datetime."','".$location."');";
			mysqli_query($link, $query);
			$emailAddress = "lauriermantel@gmail.com";
			$message = "Your site was just viewed by a client with the following IP address : ".$ip.".  The location corresponding to this IP address is ".$location.".  This is a new viewer.";
			$subject = "Recent Website View: IP Address ".$ip;
			$header = "Recent Website";
			mail($emailAddress,$subject,$message,$header);
			
		}
		else
		{
			
			
			$addView = $row['totalviews'] + 1;
			
			$location = $row['location'];
			
			$updateRecentView = $datetime;
			
			$userid = $row['id'];
			
			$query = "UPDATE `viewers` SET `totalviews` = ".$addView.", `recentview` = '".$updateRecentView."' WHERE `id` = ".$userid." LIMIT 1;";
			
			mysqli_query($link,$query);
			if ($ip != "129.97.125.30")//My UWaterloo server IP --> I don't want to get emails about my own use when I am developing.
			{
				//Drafting email
				$emailAddress = "lauriermantel@gmail.com";
				$message = "Your site was just viewed by a client with the following IP address : ".$ip.". They are a returning visitor, as they have now visited ".$addView." times.
				Their location is  ".$location.".";
				$subject = "Recent Website View: IP Address ".$ip;
				$header = "Recent Website";
				mail($emailAddress,$subject,$message,$header);
			}
		}
		
		
		
	}	

	
}




?>