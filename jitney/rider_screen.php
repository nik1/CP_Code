<?php
include("include_functions.php");


$username_rider="henry";

//PLACE RIDE REQUEST
if (isset($_POST['bid_max']) AND isset($_POST['from']) AND isset($_POST['to'])){
	$bid_max = $_POST['bid_max'];
	$from = $_POST['from'];
	$to = $_POST['to'];	
	submit_ride_request($username_rider, $bid_max, $from, $to);
}




?>

<h1>Jitney System</h1>

<p>Welcome to the Jitney System</p>

<p>




<h2>Rider Screen</h2>

<?php print_ride_requests_rider($username_rider); ?>


<BR>
<FORM name="xxx" method="POST" action="rider_screen.php">
<INPUT TYPE="text" id="from" name="from" value="" size="20">From</INPUT>
<BR>
<INPUT TYPE="text" id="to" name="to" value="" size="20">To</INPUT>
<BR>
<INPUT TYPE="text" id="bid_max" name="bid_max" value="" size="20">Enter max bid amount</INPUT>
<BR>
<BUTTON name="submit" value="submit" type="submit">Submit Request</BUTTON>

</FORM>