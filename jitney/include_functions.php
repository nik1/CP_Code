<?php
//-------------------------------------------------
//session_start();
//print_r($_SESSION);
//print_r($_POST);

//if(isset($_SESSION['auth_admin'])) {
//$save_flag = $_POST['save_flag'];
//-------------------------------------------------
?>



<?php
//##############################################################
//$id_driver
//$id_user
//$id_admin

function print_riders(){

	$hostname = "localhost";
	$dbname = "jitney";
	$username = "root";
	$password = "";
	
	$db = mysql_connect($hostname, $username, $password);
	mysql_select_db($dbname,$db);

	$query = "SELECT `username`, `phone`, `name` FROM riders WHERE 1;";
	
	$result = mysql_query($query,$db);

	$numrows = mysql_num_rows($result);	

	echo "<h3>riders (admin)</h3>";

	if ($numrows >= 0){

		echo "<table border=3>";
		echo "<tr align=\"center\">";
		echo "<td><b>Username</b></td><td><b>Phone</b></td><td><b>Name</b></td>";
		echo "</tr>";


		for ($i=0; $i < $numrows; $i++) {
			$myrow = mysql_fetch_row($result);

			$username = $myrow[0];
			$phone = $myrow[1];
			$name = $myrow[2];
			
			echo "<tr>";			
			echo "<td>$username</td><td>$phone</td><td>$name</td>";
			echo "</tr>";			
			
		} //end for
		
		echo "</table>";
		
	} //end if
	
} //end function

//##############################################################
?>

<?php
//##############################################################
//$id_driver
//$id_user
//$id_admin

function print_drivers(){

	$hostname = "localhost";
	$dbname = "jitney";
	$username = "root";
	$password = "";
	
	$db = mysql_connect($hostname, $username, $password);
	mysql_select_db($dbname,$db);

	$query = "SELECT `username`, `phone`, `name` FROM drivers WHERE 1;";
	
	$result = mysql_query($query,$db);

	$numrows = mysql_num_rows($result);	

	echo "<h3>drivers (admin)</h3>";

	if ($numrows >= 0){

		echo "<table border=3>";
		echo "<tr align=\"center\">";
		echo "<td><b>Username</b></td><td><b>Phone</b></td><td><b>Name</b></td>";
		echo "</tr>";


		for ($i=0; $i < $numrows; $i++) {
			$myrow = mysql_fetch_row($result);

			$username = $myrow[0];
			$phone = $myrow[1];
			$name = $myrow[2];
			
			echo "<tr>";			
			echo "<td>$username</td><td>$phone</td><td>$name</td>";
			echo "</tr>";			
			
		} //end for
		
		echo "</table>";
		
	} //end if
	
} //end function

//##############################################################
?>


<?php
//##############################################################
//$id_driver
//$id_user
//$id_admin

function print_ride_requests_admin(){

	$hostname = "localhost";
	$dbname = "jitney";
	$username = "root";
	$password = "";
	
	$db = mysql_connect($hostname, $username, $password);
	mysql_select_db($dbname,$db);




	$query = "SELECT `ride_request_id`, `username_rider`, `from`, `to`, `time_from`, `bid_max`, `top_bid_bid_id`, `top_bid_username_driver`, `top_bid_bid_min`, `top_bid_bid_time`, `state` FROM ride_requests WHERE 1;";
	
	$result = mysql_query($query,$db);

	$numrows = mysql_num_rows($result);	

	echo "<h3>ride_requests (admin)</h3>";

	if ($numrows >= 0){

		echo "<table border=3>";
		echo "<tr align=\"center\">";
		echo "<td><b>ID</b></td><td><b>Rider</b></td><td><b>From</b></td><td><b>To</b></td><td><b>Time</b></td><td><b>Bid Max</b></td><td><b>Bid ID</b></td><td><b>Driver</b></td><td><b>Bid Min</b></td><td><b>Bid Time</b></td><td><b>State</b></td>";
		echo "</tr>";


		for ($i=0; $i < $numrows; $i++) {
			$myrow = mysql_fetch_row($result);




			$ride_request_id = $myrow[0];
			$username_rider = $myrow[1];
			$from = $myrow[2];
			$to = $myrow[3];
			$time_from = $myrow[4];
			$bid_max = $myrow[5];
			$top_bid_bid_id = $myrow[6];
			$top_bid_username_driver = $myrow[7];
			$top_bid_bid_min = $myrow[8];
			$top_bid_bid_time = $myrow[9];
			$state = $myrow[10];			


			echo "<tr>";			
			echo "<td>$ride_request_id</td><td>$username_rider</td><td>$from</td><td>$to</td><td>$time_from</td><td>$bid_max</td><td>$top_bid_bid_id</td><td>$top_bid_username_driver</td><td>$top_bid_bid_min</td><td>$top_bid_bid_time</td><td>$state</td>";
			echo "</tr>";			


			
		} //end for
		
		echo "</table>";
		
	} //end if
	
} //end print_requests

//##############################################################
?>


<?php
//##############################################################
//$id_user
//$id_admin

function print_ride_requests_driver($id_driver){

	$hostname = "localhost";
	$dbname = "jitney";
	$username = "root";
	$password = "";
	
	$db = mysql_connect($hostname, $username, $password);
	mysql_select_db($dbname,$db);



	//top_bid_username_driver = '$id_driver'

	$query = "SELECT `ride_request_id`, `username_rider`, `from`, `to`, `time_from`, `bid_max`, `top_bid_bid_id`, `top_bid_username_driver`, `top_bid_bid_min`, `top_bid_bid_time`, `state` FROM ride_requests WHERE state='OPEN';";
	
	//echo $query;
	
	$result = mysql_query($query,$db);

	$numrows = mysql_num_rows($result);	

	echo "<h3>ride_requests (driver)</h3>";

	if ($numrows >= 0){

		echo "<table border=3>";
		echo "<tr align=\"center\">";
		echo "<td><b>ID</b></td><td><b>From</b></td><td><b>To</b></td><td><b>Time</b></td><td>---</td><td><b>Driver</b></td><td><b>Bid</b></td><td><b>Mins Remaining</b></td>";
		echo "</tr>";


		for ($i=0; $i < $numrows; $i++) {
			$myrow = mysql_fetch_row($result);




			$ride_request_id = $myrow[0];
			//$username_rider = $myrow[1];
			$from = $myrow[2];
			$to = $myrow[3];
			$time_from = $myrow[4];
			//$bid_max = $myrow[5];
			//$top_bid_bid_id = $myrow[6];
			$top_bid_username_driver = $myrow[7];
			$top_bid_bid_min = $myrow[8];
			$top_bid_bid_time = $myrow[9];
			$state = $myrow[10];
			
			$minutes_remaining = 5;


			echo "<tr>";			
			echo "<td>$ride_request_id</td><td>$from</td><td>$to</td><td>$time_from</td><td>---</td><td>$top_bid_username_driver</td><td>$top_bid_bid_min</td><td>$minutes_remaining</td>";
			echo "</tr>";			


			
		} //end for
		
		echo "</table>";
		
	} //end if
	
} //end print_requests

//##############################################################
?>


<?php

function print_ride_requests_rider($id_rider){

	$hostname = "localhost";
	$dbname = "jitney";
	$username = "root";
	$password = "";
	
	$db = mysql_connect($hostname, $username, $password);
	mysql_select_db($dbname,$db);



	//top_bid_username_driver = '$id_driver'

	$query = "SELECT `ride_request_id`, `username_rider`, `from`, `to`, `time_from`, `bid_max`, `top_bid_bid_id`, `top_bid_username_driver`, `top_bid_bid_min`, `top_bid_bid_time`, `state` FROM ride_requests WHERE state='OPEN' AND username_rider = '$id_rider';";
	
	//echo $query;
	
	$result = mysql_query($query,$db);

	$numrows = mysql_num_rows($result);	

	echo "<h3>ride_requests (driver)</h3>";

	if ($numrows >= 0){

		echo "<table border=3>";
		echo "<tr align=\"center\">";
		echo "<td><b>ID</b></td><td><b>From</b></td><td><b>To</b></td><td><b>Time</b></td><td><b>Max Bid</b></td><td>---</td><td><b>Bid</b></td><td><b>Mins Remaining</b></td>";
		echo "</tr>";


		for ($i=0; $i < $numrows; $i++) {
			$myrow = mysql_fetch_row($result);


			$ride_request_id = $myrow[0];
			$username_rider = $myrow[1];
			$from = $myrow[2];
			$to = $myrow[3];
			$time_from = $myrow[4];
			$bid_max = $myrow[5];
			//$top_bid_bid_id = $myrow[6];
			//$top_bid_username_driver = $myrow[7];
			$top_bid_bid_min = $myrow[8];
			$top_bid_bid_time = $myrow[9];
			$state = $myrow[10];
			
			$minutes_remaining = 5;


			echo "<tr>";			
			echo "<td>$ride_request_id</td><td>$from</td><td>$to</td><td>$time_from</td><td>$bid_max</td><td>---</td><td>$top_bid_bid_min</td><td>$minutes_remaining</td>";
			echo "</tr>";			


			
		} //end for
		
		echo "</table>";
		
	} //end if
	
} //end print_requests

//##############################################################
?>







<?php

function place_bid($ride_request_id, $id_driver, $bid_min){

	$hostname = "localhost";
	$dbname = "jitney";
	$username = "root";
	$password = "";
	
	$db = mysql_connect($hostname, $username, $password);
	mysql_select_db($dbname,$db);



	//top_bid_username_driver = '$id_driver'

	$query = "INSERT INTO bid_history(username_driver, ride_request_id, bid_max) VALUES ('$id_driver', $ride_request_id, $bid_min);";

	$result = mysql_query($query,$db);

	//echo $query;
	
	$query = "UPDATE ride_requests SET top_bid_username_driver = '$id_driver', top_bid_bid_min = $bid_min WHERE ride_request_id=$ride_request_id;";	

	$result = mysql_query($query,$db);	
	
	
} //end print_requests





function submit_ride_request($username_rider, $bid_max, $from, $to){

	$hostname = "localhost";
	$dbname = "jitney";
	$username = "root";
	$password = "";
	
	$db = mysql_connect($hostname, $username, $password);
	mysql_select_db($dbname,$db);


	$query = "INSERT INTO ride_requests(`username_rider`, `bid_max`, `from`, `to`, `state`) VALUES ('$username_rider', $bid_max, '$from', '$to', 'OPEN');";
	
	//echo $query;

	$result = mysql_query($query,$db);

	//echo $query;
	
	//$query = "UPDATE ride_requests SET top_bid_username_driver = '$id_driver', top_bid_bid_min = $bid_min WHERE ride_request_id=$ride_request_id;";	

	//$result = mysql_query($query,$db);	
	
	
} //end print_requests






//##############################################################
?>





<?php
//##############################################################
function print_bid_history_admin(){


	$hostname = "localhost";
	$dbname = "jitney";
	$username = "root";
	$password = "";
	
	$db = mysql_connect($hostname, $username, $password);
	mysql_select_db($dbname,$db);

	$query = "SELECT `bid_id`, `username_driver`, `username_rider`, `ride_request_id`, `bid_max`, `bid_time` FROM bid_history WHERE 1;";
	
	$result = mysql_query($query,$db);

	$numrows = mysql_num_rows($result);	


	echo "<h3>bid_history (admin)</h3>";

	if ($numrows >= 0){
	
		echo "<table border=3>";
		echo "<tr align=\"center\">";
		echo "<td><b>Bid ID</b></td><td><b>Driver</b></td><td><b>Rider</b></td><td><b>Ride Request ID</b></td><td><b>Bid Max</b></td><td><b>Bid Time</b></td>";
		echo "</tr>";


		for ($i=0; $i < $numrows; $i++) {
			$myrow = mysql_fetch_row($result);

			$bid_id = $myrow[0];
			$username_driver = $myrow[1];			
			$username_rider = $myrow[2];						
			$ride_request_id = $myrow[3];
			$bid_max = $myrow[4];
			$bid_time = $myrow[5];
			
			echo "<tr>";			
			echo "<td>$bid_id</td><td>$username_driver</td><td>$username_rider</td><td>$ride_request_id</td><td>$bid_max</td><td>$bid_time</td>";
			echo "</tr>";			
			
		} //end for
		
		echo "</table>";
		
	} //end if
	
} //end print_requests

//##############################################################
?>




