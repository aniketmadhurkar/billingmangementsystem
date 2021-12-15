<?php
include 'db.php';
			 		$id=$_POST['id'] ;
					$username= $_POST['username'] ;					
					$password=$_POST['password'] ;
					$name=$_POST['name'] ;
					
					
		 mysqli_query($conn,"INSERT INTO  user (id,username,password,name) 
		 VALUES ('$id','$username','$password','$name')"); 
				
				echo '<script>alert("success")</script>';
				echo '<script>windows: location="user.php"</script>';
				
				