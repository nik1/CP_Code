<?php
include("include_functions.php");
?>

<h1>Jitney System</h1>

<p>Welcome to the Jitney System</p>

<p>



<h2>Admin Screen</h2>

<?//php print_riders(); ?>
<?//php print_drivers(); ?>

<!-- <BR><BR> -->

<?php print_ride_requests_admin(); ?>
<?php print_bid_history_admin(); ?>

</p>




<?PHP
/****************/
	//$admin_id = $_SESSION['admin_id'];


	print "<FORM name=\"ajax\" method=\"POST\" action=\"/admin/xxx\">";

	print "<input type=\"hidden\" id=\"xxx\" name=\"xxx\" value=\"xxx\" size=\"60\">";

	print "<BUTTON name=\"submit\" value=\"submit\" type=\"submit\">Submit</BUTTON>";
	print "</FORM>";
/****************/
?>