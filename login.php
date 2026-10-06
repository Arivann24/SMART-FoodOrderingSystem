<?php

session_start();

include "database/connection.php";


if(isset($_POST['login'])){


$email = $_POST['email'];

$password = $_POST['password'];


$sql = "SELECT * FROM users 
WHERE email='$email' 
AND password='$password'";


$result = mysqli_query($conn,$sql);


if(mysqli_num_rows($result)>0){


$user = mysqli_fetch_assoc($result);


$_SESSION['user_id'] = $user['user_id'];

$_SESSION['name'] = $user['name'];


header("Location: customer/menu.php");


}
else{

echo "Invalid Email or Password";

}


}


?>


<html>

<head>

<title>
Customer Login
</title>

</head>


<body>


<h2>
Customer Login
</h2>


<form method="POST">


Email:

<br>

<input type="email" name="email">


<br><br>


Password:

<br>

<input type="password" name="password">


<br><br>


<button name="login">

Login

</button>


</form>


</body>

</html>