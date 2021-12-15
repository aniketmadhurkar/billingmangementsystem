<?php session_start(); ?>
<?php
include 'db.php';
$user_id =$_REQUEST['id'];

$result = mysqli_query($conn,"SELECT * FROM user WHERE id  = '$user_id'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id=$test['id'] ;
				$username= $test['username'] ;					
				$password=$test['password'] ;
				$name=$test['name'] ;
				

?>

<p><h1>Users Update</h1></p>
  <form method="post" action="edituserecex.php">
<table width="342" border="0">
  <tr>
    <td width="107"></td>
    <td width="315"><input type="hidden" name="id" value="<?php echo $id; ?>" /></td>
    
  </tr>
  <tr>
    <td>Username:</td>
    <td><input type="text" name="username" value="<?php echo $username; ?>"/></td>
    </tr>
    <tr>
    <td>Password:</td>
    <td><input type="text" name="password"value="<?php echo $password; ?>" /></td>
    </tr>
    <tr>
    <td>Name:</td>
    <td><input type="text" name="name" value="<?php echo $name; ?>"/></td>
 
  </tr>
 
		<td>&nbsp;</td>
		<td><input type="submit" name="save" value="Edit"  /></td>
	</tr>
</table>