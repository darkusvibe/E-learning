<html>
<head>
	<title>HOME</title>
</head>
<body>
     <h1>Hello, Welcome to the page </h1>
<div>
 <a href="system.php">
 <button>Enter into page</button>
</div>



<?php
        $fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$uname = $_POST['uname'];
	$passwrd = $_POST['passwrd'];
	$gender = $_POST['gender'];

	// Database connection
	$conn = new mysqli('localhost','root','','users');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(fname, lname, uname, passwrd, gender) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $fname, $lname, $uname, $passwrd, $gender);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>


</body>
</html>