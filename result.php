<?php
   if($_POST["fname"])
   {
      	?>
      	<div class="row">
      		<div class="col-md-4">
      			<input type="text" name="flighttype" class="form-control"  value="<?php echo $_POST['fname']; ?>">
      			<input type="email" name="email" class="form-control" value="<?php echo $_POST['email']; ?>">
      		</div>
      	</div>
       <!--  echo "<h4>Thank you for submission!<h4>";
		echo "<br>Your Name: <b>".$_POST["fname"]."</b>";
		echo "<br>Your e-mail: <b>".$_POST["email"]."</b>"; -->
  
  <?php  }
?>	