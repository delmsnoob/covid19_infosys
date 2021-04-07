<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
	<link href="assets/jquery/jquery-ui.css" rel="stylesheet">
	<script src="https://kit.fontawesome.com/367fdf8171.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/custom/js/custom.js"></script>
	<script type="text/javascript" src="process_add_travel_history.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<title>COVID-19 Information System | Dashboard</title>
	<style>
	.demoHeaders {
		margin-top: 2em;
	}
	#dialog-link {
		padding: .4em 1em .4em 20px;
		text-decoration: none;
		position: relative;
	}
	#dialog-link span.ui-icon {
		margin: 0 5px 0 0;
		position: absolute;
		left: .2em;
		top: 50%;
		margin-top: -8px;
	}
	#icons {
		margin: 0;
		padding: 0;
	}
	#icons li {
		margin: 2px;
		position: relative;
		padding: 4px 0;
		cursor: pointer;
		float: left;
		list-style: none;
	}
	#icons span.ui-icon {
		float: left;
		margin: 0 4px;
	}
	.fakewindowcontain .ui-widget-overlay {
		position: absolute;
	}
	select {
		width: 200px;
	}
	</style>
	<script>
		$(document).ready(function(){
			$('#submit').click(function(){
				var flightdestination = $('#flight_destination').val().trim();
				$('#flight_destination2').html(flightdestination);
			});
		});
	</script>
</head>
<body>
	<header class="header">
		<nav class="navbar sticky-top navbar-expand-md navbar-light bg-danger">
			<div class="container">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a href="" class="navbar-brand">
					<img src="assets/img/lnu.png" width="60" height="60" class="d-inline-block align-top" alt="LNU | EBMS">
				</a>
				<div class="col-sm-3 p-0">	
					<label class="navbar-text m-0 p-0">COVID-19 | Information System</label>
					<label class="navbar-text m-0 p-0">Activity 1 | Submit and Display data</label>
				</div>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ml-auto">
					  <li class="nav-item active">
					    <a class="nav-link" href="#">Dashboard</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="#">Accounts</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="#">Link</a>
					  </li>
					  <li class="nav-item dropdown">
					      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
					      <div class="dropdown-menu">
					        <a class="dropdown-item" href="#">Action</a>
					        <a class="dropdown-item" href="#">Another action</a>
					        <a class="dropdown-item" href="#">Something else here</a>
					        <div class="dropdown-divider"></div>
					        <a class="dropdown-item" href="#">Separated link</a>
					      </div>
					    </li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
		<div class="ts-main-content">
			<?php include ('includes/sidebar.php'); ?>
			<div class="content-wrapper">
				<div class="card m-4">
					<div class="card-header pb-0">
						<h5 style="padding: 0px;">Patient information</h5>
						<h6 class="col-form-label-sm" style="color: #aaaaaa;">Patient No.</h6>
					</div>
					<div class="card-body">
						<div class="row">
							<!-- name -->
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-4">
										<label for="first_name" class="col-form-label-sm">First name</label>
										<input type="text" name="first_name" class="form-control" placeholder="ex. Juan">
									</div>
									<div class="col-md-4">
										<label for="first_name" class="col-form-label-sm">Last name</label>
										<input type="text" name="last_name" class="form-control" placeholder="ex. De la Cruz">
									</div>
									<div class="col-md-4">
										<label for="first_name" class="col-form-label-sm">Middle name</label>
										<input type="text" name="middle_name" class="form-control" placeholder="ex. Aguinaldo">
									</div>
								</div>
							</div>
							<div class="col-md-12 mt-4">
								<div class="row">
									<div class="col-md-4">
										<label for="birthdate" class="col-form-label-sm">Date of birth</label>
										<input type="date" name="birthdate" class="form-control">
									</div>
									<div class="col-md-4">
										<label for="" class="col-form-label-sm">Gender</label>
										<select class="form-control" name="gender">
											<option value="male">Male</option>
											<option value="female">Female</option>
											<option value="prefer not to say">Prefer not to say</option>
										</select>
									</div>
									<div class="col-md-4">
										<label for="contact" class="col-form-label-sm">Contact no.</label>
										<input type="number" pattern="[0-9]{11}" name="contact" class="form-control">
									</div>
								</div>
							</div>
							<!-- end name -->
							<!-- address -->
							<div class="col-md-12 mt-4">
								<div class="row">
									<div class="col-md-3">
										<label for="add1" class="col-form-label-sm">Street</label>
										<input type="text" name="add1" class="form-control" placeholder="Street/Lot no.">
									</div>
									<div class="col-md-3">
										<label for="add2" class="col-form-label-sm">Barangay</label>
										<input type="text" name="add2" class="form-control" placeholder="Barangay">
									</div>
									<div class="col-md-3">
										<label for="add3" class="col-form-label-sm">City/Municipality</label>
										<input type="text" name="add3" class="form-control" placeholder="City/Municipality">
									</div>
									<div class="col-md-3">
										<label for="add4" class="col-form-label-sm">Province</label>
										<input type="text" name="add4" class="form-control" placeholder="Province">
									</div>
								</div>
							</div>
							<div class="col-md-12 mt-4">
								<div class="row">
									<div class="col-md-12">
										<label>Travel History</label>
										<hr>
										<div class="col-md-10">
											<div class="row">
												<span class="col-form-label-sm" style="color: gray;">Travel history is listed here. Click the button to add.</span>
											</div>
										</div>
									</div>
									<div class="col-md-10">
										<div id="addTravel" class="input-group">
											<div class="col-md-3 row" id="travel_history_btn">
												<button type="button" class="btn btn-primary form-control" data-toggle="modal" data-target="#travel_history_list">Add travel history</button>
											</div>
											<div class="modal fade" id="travel_history_list" role="dialog">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="travel_history_title" style="">Add travel history</h5>
															<a class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</a>
														</div>
														<div class="modal-body">
															<form class="feedback" name="travel_history_form">
																<label for="flight_type" class="col-form-label-sm" style="color: gray;">Type of flight</label>
																<select class="form-control" name="flight_type">
																	<option value="N/A">~Select~</option>
																	<option value="Domestic">Domestic</option>
																	<option value="International">International</option>
																</select>
																<div class="row mt-4">
																	<div class="col-md-12">
																		<label for="flight_origin" class="col-form-label-sm" style="color: gray;">Flight origin</label>
																		<input type="text" name="flight_origin" class="form-control" id="flight_origin">
																	</div>
																	<div class="col-md-12">
																		<label for="flight_destination" class="col-form-label-sm" style="color: gray;">Flight destination</label>
																		<input type="text" name="flight_destination" class="form-control" id="flight_destination" value="">
																	</div>
																</div>
																<div class="row mt-4">
																	<div class="col-md-12">
																		<label for="flight_arrival" class="col-form-label-sm" style="color: gray;">Date of arrival</label>
																		<input type="datepicker" name="flight_arrival" class="form-control" id="datepicker">
																	</div>
																</div>
																<div class="modal-footer">
																	<button class="btn btn-primary" id="submit" name="send">Add</button>
																	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12" id="result">
											<label for="flight_destination" class="col-form-label-sm" style="color: gray;">Flight destination</label>
											<input type="text" name="flight_destination2" class="form-control" id="flight_destination2" value="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<script src="assets/jquery/external/jquery/jquery.js"></script>
<script src="assets/jquery/jquery-ui.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>

$( "#accordion" ).accordion();



var availableTags = [
	"ActionScript",
	"AppleScript",
	"Asp",
	"BASIC",
	"C",
	"C++",
	"Clojure",

	"COBOL",
	"ColdFusion",5
	"Erlang",
	"Fortran",
	"Groovy",
	"Haskell",
	"Java",
	"JavaScript",
	"Lisp",
	"Perl",
	"PHP",
	"Python",
	"Ruby",
	"Scala",
	"Scheme"
];
$( "#autocomplete" ).autocomplete({
	source: availableTags
});



$( "#button" ).button();
$( "#button-icon" ).button({
	icon: "ui-icon-gear",
	showLabel: false
});



$( "#radioset" ).buttonset();



$( "#controlgroup" ).controlgroup();



$( "#tabs" ).tabs();



$( "#dialog" ).dialog({
	autoOpen: false,
	width: 400,
	buttons: [
		{
			text: "Ok",
			click: function() {
				$( this ).dialog( "close" );
			}
		},
		{
			text: "Cancel",
			click: function() {
				$( this ).dialog( "close" );
			}
		}
	]
});

// Link to open the dialog
$( "#dialog-link" ).click(function( event ) {
	$( "#dialog" ).dialog( "open" );
	event.preventDefault();
});



$( "#datepicker" ).datepicker({
	inline: true,
	dateFormat: "DD MM dd,yy"
});


$( "#slider" ).slider({
	range: true,
	values: [ 17, 67 ]
});



$( "#progressbar" ).progressbar({
	value: 20
});



$( "#spinner" ).spinner();



$( "#menu" ).menu();



$( "#tooltip" ).tooltip();



$( "#selectmenu" ).selectmenu();


// Hover states on the static widgets
$( "#dialog-link, #icons li" ).hover(
	function() {
		$( this ).addClass( "ui-state-hover" );
	},
	function() {
		$( this ).removeClass( "ui-state-hover" );
	}
);
$(':input[type=number]').on('mousewheel', function(e){
    e.preventDefault();
});
</script>
</body>
</html>
