<?php
if (isset($_POST['send'])) {
	$flighttype = strip_tags($_POST['flight_type']);
	echo "<strong>Name</strong>: ".$flighttype."</br>"; 
}
?>
