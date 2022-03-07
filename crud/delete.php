<?php

include('config.php');
//this is user data get from in url 
if(isset($_GET['id'])){
	$user_id = $_GET['id'];
	//query for url id = database id same as well run the delete process
	$sql = "DELETE from users WHERE id='$user_id'";
	$result = $conn->query($sql);
	if($result == true){
		echo "Record id deleted";
	}else
	{
		echo "Error".$sql."</br>".$conn->error;
	}
}

?>