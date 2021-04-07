<?php
if (isset($_POST['send'])) {
	$flighttype = strip_tags($_POST['flight_type']);
	$email = strip_tags($_POST['email']);
	$message = strip_tags($_POST['message']);
	echo "<strong>Name</strong>: ".$flighttype."</br>"; 
}
?>
