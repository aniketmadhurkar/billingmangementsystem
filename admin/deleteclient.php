<?php session_start();
if(!isset($_SESSION['id'])){
	echo '<script>windows: location="index.php"</script>';

	
	}
		
?>
<?php
include 'db.php';
  $q = "truncate table owners";
  mysqli_query($conn,$q);
  header("Location: clients.php");
?>
