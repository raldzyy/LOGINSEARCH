<?php  
require_once 'core/models.php'; 
require_once 'core/handleforms.php'; 

if (!isset($_SESSION['Username'])) {
	header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style>
 body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: black; 
            color: white; 
            text-align: center; 
   }
table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #1a1a1a; 
        }

        th, td {
            padding: 10px;
            border: 1px solid #444; 
            text-align: left;
            color: white;
        }

        th {
            background-color: #333;
        }

        tr:nth-child(even) {
            background-color: #222; 
        }

        tr:hover {
            background-color: #444; 
        }
</style>
<body>
		<table >
			<tr>
				<th>Log ID</th>
				<th>operate by </th>
				<th>Job ID</th>
				<th>Position </th>
				<th>Operation</th>
				<th>Date Added</th>
			</tr>
			<?php $getactivity = getactivity($pdo); ?>
			<?php foreach ($getactivity as $row) { ?>
			<tr>
				<td><?php echo $row['log_id']; ?></td>
				<td><?php echo $row['Username']; ?></td>
				<td><?php echo $row['job_id']; ?></td>
				<td><?php echo $row['position']; ?></td>
				<td><?php echo $row['Operation']; ?></td>
				<td><?php echo $row['date_added']; ?></td>
			</tr>
			<?php } ?>
		</table>
</body>
</html>
