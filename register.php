<?php

include "database/connection.php";


if(isset($_POST['register'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $role = "customer";


    $sql = "INSERT INTO users
    (name,email,phone,password,role)

    VALUES

    ('$name','$email','$phone','$password','$role')";


    if(mysqli_query($conn,$sql)){

        echo "Registration Successful";

    }
    else{

        echo "Registration Failed";

    }

}

?>


<html>

<head>

<title>
Customer Registration
</title>

</head>


<body>

<h2>
Customer Registration
</h2>


<form method="POST">


Name:

<br>

<input type="text" name="name">

<br><br>


Email:

<br>

<input type="email" name="email">

<br><br>


Phone:

<br>

<input type="text" name="phone">

<br><br>


Password:

<br>

<input type="password" name="password">

<br><br>


<button type="submit" name="register">

Register

</button>


</form>


</body>

</html>