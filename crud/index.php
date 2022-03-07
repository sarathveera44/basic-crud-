<?php 
include("config.php");
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>
<html>
<head>
	<title>View page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial scal 1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
	<script src="./assets/jquery.min.js"></script>
	<script  src="./assets/js/bootstrap.min.js."></script>
</head>
<body>
	<div class="container">
	<h2>UsersList</h2>
	<div>
	<a href="create.php" class="btn btn-info float-right mb-3">Add User</a>
	</div>
	<table class="table mt-3">
		<thead style="color:gray;padding:8px;">
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				if($result->num_rows>0){
						while($row = $result->fetch_assoc()){
				?>	
			<tr>
				<td><?php echo $row['id'];?></td>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><a href="update.php?id=<?php echo $row['id'];?>">Update</a> &nbsp
				<a href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
			</tr>
				<?php 
				}}?>
		</tbody>
	</table>
	</div>
</body>
</html>