<?php
 
include ("config.php");

if(isset($_POST['update']))
{
	$name = $_POST['name'];
	$mail = $_POST['email'];
	$pass = $_POST['password'];
	$user_id = $_POST['user_id'];

	$sql = "UPDATE users SET name='$name',email='$mail',password='$pass' WHERE id='$user_id'";
	$result = $conn->query($sql);
	
	
	if($result == true)
	{
		echo "update successfully";
	}	
}
//this is before updating cheaking for data form database using url id based
if(isset($_GET['id'])){
	$user_id = $_GET['id'];
	$sql = "SELECT * from users WHERE id='$user_id'";
	$result = $conn->query($sql);
	
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
			$ids = $row['id'];
			$fname = $row['name'];
			$gmail = $row['email'];
			$pas = $row['password'];
			 
		}
	}
}
?>
<html>
<title>
</title>
<body>
	<h2>Sign up form</h2>
	<form action="" method="POST">
		<fieldset>
			<legend>Personal Info</legend>
			Name:<br>
			<input type="text"  name="name" value="<?php echo $fname; ?>" /><br>
			<input type="hidden"  name="user_id" value="<?php echo $ids; ?>" /><br>
			Email:<br>
			<input type="text" name="email" value="<?php echo $gmail; ?>" /><br>
			Password:<br>
			<input type="password" name="password" value="<?php echo $pas; ?> " /><br><br>
			<input type="submit" name="update" value="update" /><br>
		</fieldset>
	</form>
</body>
</html>
