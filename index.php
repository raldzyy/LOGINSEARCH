<?php
require_once 'core/dbonfig.php'; 
require_once 'core/models.php';

session_start();

// Redirect to login if the user is not logged in
if (!isset($_SESSION['Username'])) {
    header("Location: login.php");
    exit();
}

// Handle logout functionality
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #121212;
            color: #f1f1f1;
            text-align: center;
        }

        header {
            background-color: #1f1f1f;
            padding: 15px 0;
        }

        header h1 {
            margin: 0;
            font-size: 24px;
            color: #4caf50;
        }

        nav {
            margin: 20px 0;
        }

        nav a {
            color: #4caf50;
            text-decoration: none;
            margin: 0 15px;
            font-size: 16px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .message {
            color: #28a745;
            background-color: #fff;
            border: 1px solid #ccc;
            margin: 10px auto;
            padding: 10px;
            max-width: 600px;
            border-radius: 5px;
        }

        form {
            margin: 20px auto;
            max-width: 600px;
        }

        input[type="text"] {
            width: calc(100% - 40px);
            padding: 10px;
            border: 1px solid #4caf50;
            border-radius: 5px;
            font-size: 16px;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #1e1e1e;
        }

        th, td {
            padding: 10px;
            border: 1px solid #333;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #2b2b2b;
        }

        tr:hover {
            background-color: #3a3a3a;
        }

        footer {
            margin: 20px 0;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['Username']); ?>!</h1>
    </header>

    <nav>
        <a href="index.php">Clear Search</a>
        <a href="insert.php">Insert Record</a>
        <a href="auditlog.php">View Audit Logs</a>
        <a href="?logout=true">Log Out</a>
    </nav>

    <?php if (isset($_SESSION['message'])): ?>
        <div class="message">
            <?php echo htmlspecialchars($_SESSION['message']); ?>
        </div>
        <?php unset($_SESSION['message']); ?>
    <?php endif; ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="GET">
        <input type="text" name="searchInput" placeholder="Search here...">
        <input type="submit" name="searchBtn" value="Search">
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Position</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Home Address</th>
                <th>Nationality</th>
                <th>Date Added</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if (isset($_GET['searchBtn']) && !empty($_GET['searchInput'])) {
                $searchResults = searchforappli($pdo, $_GET['searchInput']);
                foreach ($searchResults as $row): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['job_id']); ?></td>
                        <td><?php echo htmlspecialchars($row['first_name']); ?></td>
                        <td><?php echo htmlspecialchars($row['last_name']); ?></td>
                        <td><?php echo htmlspecialchars($row['position']); ?></td>
                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                        <td><?php echo htmlspecialchars($row['gender']); ?></td>
                        <td><?php echo htmlspecialchars($row['home_address']); ?></td>
                        <td><?php echo htmlspecialchars($row['nationality']); ?></td>
                        <td><?php echo htmlspecialchars($row['date_added']); ?></td>
                        <td>
                            <a href="edit.php?job_id=<?php echo $row['job_id']; ?>">Edit</a>
                            <a href="delete.php?job_id=<?php echo $row['job_id']; ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; 
            } else {
                $allApplications = getallappli($pdo);
                foreach ($allApplications as $row): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['job_id']); ?></td>
                        <td><?php echo htmlspecialchars($row['first_name']); ?></td>
                        <td><?php echo htmlspecialchars($row['last_name']); ?></td>
                        <td><?php echo htmlspecialchars($row['position']); ?></td>
                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                        <td><?php echo htmlspecialchars($row['gender']); ?></td>
                        <td><?php echo htmlspecialchars($row['home_address']); ?></td>
                        <td><?php echo htmlspecialchars($row['nationality']); ?></td>
                        <td><?php echo htmlspecialchars($row['date_added']); ?></td>
                        <td>
                            <a href="edit.php?job_id=<?php echo $row['job_id']; ?>">Edit</a>
                            <a href="delete.php?job_id=<?php echo $row['job_id']; ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; 
            } ?>
        </tbody>
    </table>

    <footer>
        &copy; <?php echo date('Y'); ?> Dashboard Application. All rights reserved.
    </footer>
</body>
</html>
