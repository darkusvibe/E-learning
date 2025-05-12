<?php
if(isset($_POST['submit'])){
 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $phone = $_POST['phone'];

  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $dbname = 'company';
 
  $conn = mysqli_connect($host,$user,$pass,$dbname);

  $sql = "INSERT INTO workers(fname,lname,phone) values ('$fname','$lname','$phone')";
  mysqli_query($conn,$sql);
}
?>

















</head>
<body>
 <form method="post" action="#">
    <div>
    <label for="fname" > First name:</label>
   <input type = "text" id="fname" name="fname" placeholder="Micheal"  required>
    </div>

   <br>

    <div>
    <label for="lname" > Last name:</label>
   <input type = "text" id="lname" name="lname" placeholder="Mwangi"  required>
    </div>
       
     <br>
     <div>
    <label for= "phone">phone #:</label>
    <input type="tel" id="phone" name="phone" placeholder="07421456791" required>
    </div>


    <div>
     <input type = "reset">
    </div>
     
     <br>
     <div>
     <input type = "submit">
     </div>

</form>

</body>
</html>
