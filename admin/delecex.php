<?php
include 'db.php';
	$id = $_POST['id'];
	mysqli_query($conn,"DELETE from owners WHERE id='$id'");
			

		 echo "<script>windows: location='clients.php'</script>";				
			