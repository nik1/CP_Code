<?php
include("include_functions.php");


$id_driver="jjmclean";
/********
if (!isset($_SESSION['id_driver'])){
	$_SESSION['id_driver'] =  $_POST['id_driver']
}
else{
	$id_driver = $_SESSION['id_driver']	
}
********/





//PLACE BID
if (isset($_POST['bid_min']) AND isset($_POST['ride_request_id'])){
	$bid_min = $_POST['bid_min'];
	$ride_request_id = $_POST['ride_request_id'];
	place_bid($ride_request_id, $id_driver, $bid_min);
}



?>



<h1>Jitney System</h1>

<p>Welcome to the Jitney System</p>

<p>



<h2>Driver Screen</h2>


<HR>
	

<?php print_ride_requests_driver($id_driver); ?>


<BR>
<FORM name="xxx" method="POST" action="driver_screen.php">

<INPUT TYPE="text" id="ride_request_id" name="ride_request_id" value="" size="3">Enter ride id</INPUT>
<BR>
<INPUT TYPE="text" id="bid_min" name="bid_min" value="" size="20">Enter bid amount</INPUT>
<BR>
<BUTTON name="submit" value="submit" type="submit">Bid</BUTTON>

</FORM>