<?php 
include ('config.php');

if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$mail = $_POST['email'];
	$pass = $_POST['password'];
//this is query for create in database table data
$sql = "insert into users(name,email,password)VALUES('$name','$mail','$pass')";
//send the data for db using above store $sql varible data
$result=$conn->query($sql);
    if($result == true)//result is true data and save
    {
        echo "inserted successfully";
    }
	else{
		echo "failed".$sql."<br>".$conn->error;
	}
	
}
else
{
    echo "Invalid data provided";
}

$conn->close();
?>



<!DOCTYPE html>
<html>
<title>
</title>
<body>
	<h2>Sign up form</h2>
	<form action="" method="POST">
		<fieldset>
			<legend>Personal Info</legend>
			Name:<br>
			<input type="text"  name="name"  required /><br>
			Email:<br>
			<input type="text" name="email"  required /><br>
			Password:<br>
			<input type="password" name="password"  required /><br><br>
			<input type="submit" name="submit" /><br>
		</fieldset>
	</form>
</body>
</html>
