
<?php require_once 'core/handleforms.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<?php $getapplibyID = getapplibyID($pdo, $_GET['job_id']); ?>
	<h1>Edit your application!</h1>
	<form action="core/handleforms.php?job_id=<?php echo $_GET['job_id']; ?>" method="POST">
		<p>
			<label for="first_name">First Name</label> 
			<input type="text" name="first_name" value="<?php echo $getapplibyID['first_name']; ?>">
		</p>
		<p>
			<label for="last_name">Last Name</label> 
			<input type="text" name="last_name" value="<?php echo $getapplibyID['last_name']; ?>">
		</p>
		<p>
			<label for="position">Position</label> 
			<input type="text" name="position" value="<?php echo $getapplibyID['position']; ?>">
		</p>
		<p>
			<label for="email">Email</label> 
			<input type="email" name="email" value="<?php echo $getapplibyID['email']; ?>">
		</p>
		<p>
			<label for="gender">Gender</label> 
			<input type="text" name="gender" value="<?php echo $getapplibyID['gender']; ?>">
		</p>
		<p>
			<label for="home_address">State</label> 
			<input type="text" name="home_address" value="<?php echo $getapplibyID['home_address']; ?>">
		</p>
		<p>
			<label for="nationality">Nationality</label> 
			<input type="text" name="nationality" value="<?php echo $getapplibyID['nationality']; ?>">
		</p>
			<input type="submit" value="SUBMIT" name="editbtn">
		</p>
	</form>
</body>
</html>
