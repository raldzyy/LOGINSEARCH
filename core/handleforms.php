<?php 
require_once 'dbonfig.php';
require_once  'models.php';



if (isset($_GET['searchBtn'])) {
	$searchforappli = searchforappli($pdo, $_GET['searchInput']);
	foreach ($searchforappli as $row) {
		echo "<tr> 
				<td>{$row['job_id']}</td>
				<td>{$row['first_name']}</td>
				<td>{$row['last_name']}</td>
				<td>{$row['position']}</td>
				<td>{$row['email']}</td>
				<td>{$row['gender']}</td>
				<td>{$row['home_address']}</td>
				<td>{$row['nationality']}</td>
			  </tr>";
	}
}

if (isset($_POST['insertnewbtn'])){
    $insertppli = insertnewappli($pdo,$_POST['first_name'], $_POST['last_name'],$_POST['position'],$_POST['email'],$_POST['gender'],$_POST['home_address']
                                    ,$_POST['nationality']);
                                
        if ($insertppli){
            $_SESSION['message'] = 'Insert successfull';
            header('Location: ../index.php');
        }                                
                                
}



if (isset($_POST['editbtn'])){
    $editapplication = editappli($pdo,$_POST['first_name'], $_POST['last_name'],$_POST['position'],$_POST['email'],$_POST['gender'],$_POST['home_address']
                                    ,$_POST['nationality'] ,$_GET['job_id']);
                                
        if ($editapplication){
            $_SESSION['message'] = 'Edit successfull';
            header('Location: ../index.php');
        }                                
                                
}
if (isset($_POST['deletebtn'])){
    $deleteapplication = deleteappli($pdo, $_GET['job_id']);

    if ($deleteapplication){
        $_SESSION['message'] = 'delete successfull';
        header('Location: ../index.php');
    }
}
if (isset($_POST['Loginbtn'])) {
	$Username = ($_POST['Username']);
	$Pass_word = sha1($_POST['Pass_word']);

	if (!empty($Username) && !empty($Pass_word)) {
        try {
            $loginQuery = loginUser($pdo, $Username, $Pass_word);
            
            if ($loginQuery) {
                header("Location:../index.php");
                exit();
            } else {
                header("Location:../login.php");
                exit();
            }
        } catch (Exception $e) {
            $_SESSION['message'] = "Database error occurred. Please try again.";
            header("Location: ../login.php");
            exit();
        }
    } else {
        $_SESSION['message'] = "Please fill in all login fields";
        header("Location:../login.php");
        exit();
    }
}
if (isset($_POST['registerButton'])) {
    $Username = trim($_POST['Username']);
    $first_name = trim($_POST['first_name']);
    $last_name =trim($_POST['last_name']);
    $Pass_word = $_POST['Pass_word'];
    $confirm_password = $_POST['confirm_password'];

    if (!empty($Username) && !empty($first_name) && !empty($last_name) 
        && !empty($Pass_word) && !empty($confirm_password)) {

        if ($Pass_word === $confirm_password) {

            if (validatePassword($Pass_word)) {
                $hashed_password = sha1($Pass_word);
                
                $insertQuery = insertNewUser($pdo, $Username, $first_name, $last_name, $hashed_password);

                if ($insertQuery) {
                    $_SESSION['message'] = "Registration successful! Please login.";
                    header("Location:../login.php");
                    exit();
                } else {
                    header("Location:../Register.php");
                    exit();
                }
            } else {
                $_SESSION['message'] = "Password should be more than 8 characters and should contain both uppercase, lowercase, and numbers";
                header("Location:../Register.php");
                exit();
            }
        } else {
            $_SESSION['message'] = "Please check if both passwords are equal!";
            header("Location:../Register.php");
            exit();
        }
    } else {
        $_SESSION['message'] = "Please make sure the input fields are not empty for registration!";
        header("Location:../Register.php");
        exit();
    }
}
?>