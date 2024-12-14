<?php  
require_once 'core/models.php'; 
require_once 'core/handleforms.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #1e1e1e;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h3 {
            margin-bottom: 20px;
            color: #4CAF50;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            text-align: left;
            color: #90CAF9;
        }

        input[type="text"],
        input[type="password"] {
            background-color: #333;
            color: #f4f4f4;
            border: 1px solid #555;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            font-size: 16px;
            width: 100%;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        p {
            margin-top: 20px;
        }

        a {
            color: #90CAF9;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h3>Log in First</h3>
        <form action="core/handleforms.php" method="POST">
            <p>
                <label for="Username">Username</label>
                <input type="text" id="Username" name="Username" placeholder="Enter your username" required>
            </p>
            <p>
                <label for="Pass_word">Password</label>
                <input type="password" id="Pass_word" name="Pass_word" placeholder="Enter your password" required>
            </p>
            <p>
                <input type="submit" name="Loginbtn" value="Log In">
            </p>
        </form>
        <p>If you do not have a registered account, <a href="Register.php">Register here</a>.</p>
    </div>
</body>

</html>
