<html>
<head><title> connect </title></head>
<body> 

 <div>
 <a href="data.php">
 <button>view all users</button>
</div>

<?php
$fname = filter_input(INPUT_POST, 'fname');
$phone = filter_input(INPUT_POST, 'phone');
if (!empty($fname)){
if (!empty($phone)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "test";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO registration (fname, phone)
values ('$fname','$phone')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Phone should not be empty";
die();
}
}
else{
echo "fname should not be empty";
die();
}
?>

</body>
</html>




