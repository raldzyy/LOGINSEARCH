<?php
require_once 'dbonfig.php';

function getallappli($pdo){
    $sql = "SELECT * FROM shoe_store ORDER BY job_id ASC";
    $stmt = $pdo->prepare($sql);
    $executequery = $stmt->execute();
    if ($executequery) {
        return $stmt->fetchAll(); 
    }
    return [];
}

function getapplibyID($pdo, $job_id) {
    $sql = "SELECT * FROM shoe_store WHERE job_id = ?";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([$job_id]);

    if ($executeQuery) {
        return $stmt->fetch();
    }
    return null; 
}

function searchforappli($pdo, $searchquery) {
    $searchquery = "%" . strtolower($searchquery) . "%";
    $sql = "SELECT * FROM shoe_store WHERE 
            CONCAT(first_name, last_name, position, email, gender, home_address, nationality, date_added)
            LIKE ?";
    
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([$searchquery]);

    if ($executeQuery) {
        return $stmt->fetchAll();
    }
    return []; 
}

function insertnewappli($pdo, $first_name, $last_name, $position, $email, $gender, $home_address, $nationality) {
    $response = array();
    $sql = "INSERT INTO shoe_store (first_name,last_name, position, email,gender,home_address,nationality) VALUES(?,?,?,?,?,?,?)";
	$stmt = $pdo->prepare($sql);
	$insertnewappli = $stmt->execute([$first_name, $last_name, $position, $email, $gender, $home_address, $nationality]);

	if ($insertnewappli) {
        $lastInsertId = $pdo->lastInsertId();
        $findInsertedItemSQL = "SELECT * FROM shoe_store WHERE job_id = ?";
        $stmtfindInsertedItemSQL = $pdo->prepare($findInsertedItemSQL);
        $stmtfindInsertedItemSQL->execute([$lastInsertId]);
        $job_id = $stmtfindInsertedItemSQL->fetch();


        $auditlog = auditlog($pdo, $_SESSION['Username'], $job_id['job_id'] , 
         $job_id['position'],"INSERT");


		if ($auditlog) {
			$response = array(
				"status" =>"200",
				"message"=>"Branch addedd successfully!"
			);
		}

		else {
			$response = array(
				"status" =>"400",
				"message"=>"Insertion of activity log failed!"
			);
		}
		
	}

	else {
		$response = array(
			"status" =>"400",
			"message"=>"Insertion of data failed!"
		);

	}

	return $response;
}
   


function editappli($pdo, $first_name, $last_name, $position, $email, $gender, $home_address, $nationality, $job_id) {
    $sql = "UPDATE shoe_store
            SET first_name = ?, last_name = ?, position = ?, email = ?, gender = ?, home_address = ?, nationality = ?
            WHERE job_id = ?";
    
    $stmt = $pdo->prepare($sql);
    $editappli = $stmt->execute([$first_name, $last_name, $position, $email, $gender, $home_address, $nationality, $job_id]);

    if ($editappli) {

		$findInsertedItemSQL = "SELECT * FROM shoe_store WHERE job_id = ?";
		$stmtfindInsertedItemSQL = $pdo->prepare($findInsertedItemSQL);
		$stmtfindInsertedItemSQL->execute([$job_id]);
		$job_id = $stmtfindInsertedItemSQL->fetch(); 

		$auditlog = auditlog($pdo,  $_SESSION['Username'] , $job_id['job_id'], 
			 $job_id['position'],"EDIT");

		if ($auditlog) {

			$response = array(
				"status" =>"200",
				"message"=>"Updated the job successfully!"
			);
		}

		else {
			$response = array(
				"status" =>"400",
				"message"=>"Insertion of activity log failed!"
			);
		}

	}

	else {
		$response = array(
			"status" =>"400",
			"message"=>"An error has occured with the query!"
		);
	}

	return $response;

}
function deleteappli($pdo, $job_id) {
    $response = array();
	$sql = "SELECT * FROM shoe_store WHERE job_id = ?";
	$stmt = $pdo->prepare($sql);
	$stmt->execute([$job_id]);
	$getapplibyID = $stmt->fetch();

	$auditlog = auditlog($pdo ,$_SESSION['Username'] , $getapplibyID['job_id'], 
		$getapplibyID['position'],"DELETE"); 

	if ($auditlog) {
		$deleteSql = "DELETE FROM shoe_store WHERE job_id = ?";
		$deleteStmt = $pdo->prepare($deleteSql);
		$deleteQuery = $deleteStmt->execute([$job_id]);

		if ($deleteQuery) {
			$response = array(
				"status" =>"200",
				"message"=>"Deleted the job successfully!"
			);
		}
		else {
			$response = array(
				"status" =>"400",
				"message"=>"Insertion of activity log failed!"
			);
		}
	}
	else {
		$response = array(
			"status" =>"400",
			"message"=>"An error has occured with the query!"
		);
	}

	return $response;
}


function checkappli($pdo, $first_name) {
    $response = array();
    $sql = "SELECT * FROM shoe_store WHERE first_name = ?";
    $stmt = $pdo->prepare($sql);

    if ($stmt->execute([$first_name])) {
        $userInfoArray = $stmt->fetch();

        if ($stmt->rowCount() > 0) {
            $response = array(
                "result" => true,
                "status" => "200",
                "userInfoArray" => $userInfoArray
            );
        } else {
            $response = array(
                "result" => false,
                "status" => "400",
                "message" => "User doesn't exist"
            );
        }
    }

    return $response;
}

function loginUser($pdo, $Username, $Pass_word) {
    $sql = "SELECT * FROM Users WHERE Username=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$Username]); 
    
    if ($stmt->rowCount() == 1) {
        $userInfoRow = $stmt->fetch();
        $userIDFromDB = $userInfoRow['User_ID']; 
        $usernameFromDB = $userInfoRow['Username'];
        $passwordFromDB = $userInfoRow['Pass_word'];
    
        if ($Pass_word == $passwordFromDB) {
            $_SESSION['User_ID'] = $userIDFromDB;
            $_SESSION['Username'] = $usernameFromDB;
            $_SESSION['message'] = "Login successful!";
            return true;
        }
    
        else {
            $_SESSION['message'] = "Password is invalid, but user exists";
        }
    }   
    if ($stmt->rowCount() == 0) {
        $_SESSION['message'] = "Username doesn't exist from the database. You may consider registration first";
    }
    
}

function validatePassword($Pass_word) {

	if (strlen($Pass_word) > 8) {
		$hasLower = false;
		$hasUpper = false;
		$hasNumber = false;

	    for ($i = 0; $i < strlen($Pass_word); $i++) {

	    	if (ctype_lower($Pass_word[$i])) {
	    		$hasLower = true; 
	        } 

	        elseif (ctype_upper($Pass_word[$i])) {
	            $hasUpper = true; 
	        } 

	        elseif (ctype_digit($Pass_word[$i])) {
	            $hasNumber = true;
	        }

	        if ($hasLower && $hasUpper && $hasNumber) {
	            return true; 
	        }
	    }
	}

	else {
		return false; 
	}
}

function insertNewUser($pdo, $Username, $first_name, $last_name, $Pass_word) {

	$checkUserSql = "SELECT * FROM Users WHERE Username = ?";
	$checkUserSqlStmt = $pdo->prepare($checkUserSql);
	$checkUserSqlStmt->execute([$Username]);

	if ($checkUserSqlStmt->rowCount() == 0) {

		$sql = "INSERT INTO Users (Username, first_name, last_name, Pass_word) VALUES(?,?,?,?)";
		$stmt = $pdo->prepare($sql);
		$executeQuery = $stmt->execute([$Username, $first_name, $last_name, $Pass_word]);

		if ($executeQuery) {
			$_SESSION['message'] = "User successfully inserted";
			return true;
		}

		else {
			$_SESSION['message'] = "An error occured from the query";
		}

	}
	else {
		$_SESSION['message'] = "User already exists";
	}
    return false;
}

function auditlog($pdo,$Username,$job_id,$position,$Operation ){
    $sql = "INSERT INTO activity_logs (Username,job_id,position,Operation) VALUES (?,?,?,?)";
    $stmt = $pdo -> prepare($sql);
    $executeQuery = $stmt ->execute([$Username,$job_id,$position,$Operation]);

    if ($executeQuery){
        return true;
    }
}


function getactivity($pdo) {
    $sql = "SELECT * FROM activity_logs 
    ORDER BY date_added ASC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
        echo "No activity logs found.";
    }
    return [];
}
?>