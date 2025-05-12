<?php 
session_start(); 
include "inder.php";

if (isset($_POST['uname']) && isset($_POST['passwrd'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$passwrd = validate($_POST['passwrd']);

	if (empty($uname)) {
		header("Location: feedbacklogin.html?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: feedbacklogin.html?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM registration WHERE uname='$uname' AND passwrd='$passwrd'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['uname'] === $uname && $row['passwrd'] === $passwrd) {
         
                $_SESSION['uname'] = $row['uname'];
                $_SESSION['passwrd'] = $row['passwrd']
            	
		    
            }else{
				header("Location: feedbacklogin.html?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: feedbacklogin.html?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: feedbacklogin.html");
	exit();
}