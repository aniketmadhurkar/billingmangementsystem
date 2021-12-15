<?php
include 'db.php';
	$id = $_POST['id'];
	mysqli_query($conn,"DELETE from bill WHERE id='$id'");
			

		 echo "<script>windows: location='bill.php'</script>";				
			