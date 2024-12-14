
<?php require_once 'core/models.php'; ?>
<?php require_once 'core/dbonfig.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1>Are you sure you want to delete this user?</h1>
	<?php $getapplibyID = getapplibyID($pdo, $_GET['job_id']); ?>
		<h2>First Name: <?php echo $getapplibyID['first_name']; ?></h2>
		<h2>Last Name: <?php echo $getapplibyID['last_name']; ?></h2>
		<h2>position: <?php echo $getapplibyID['position']; ?></h2>
		<h2>Email: <?php echo $getapplibyID['email']; ?></h2>
		<h2>gender: <?php echo $getapplibyID['gender']; ?></h2>
		<h2>home_address: <?php echo $getapplibyID['home_address']; ?></h2>
		<h2>Nationality: <?php echo $getapplibyID['nationality']; ?></h2>
			<form action="core/handleforms.php?job_id=<?php echo $_GET['job_id']; ?>" method="POST">
				<input type="submit" name="deletebtn" value="Delete">
			</form>			
</body>
</html>
