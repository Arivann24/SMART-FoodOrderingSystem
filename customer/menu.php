<?php

session_start();

include "../database/connection.php";


$sql = "SELECT * FROM food_items WHERE status='Available'";

$result = mysqli_query($conn,$sql);

?>


<html>

<head>

<title>
Food Menu
</title>

</head>


<body>


<h1>
Welcome <?php echo $_SESSION['name']; ?>
</h1>


<h2>
Food Menu
</h2>


<?php

while($row = mysqli_fetch_assoc($result)){


?>

<div>


<h3>
<?php echo $row['food_name']; ?>
</h3>


<p>
<?php echo $row['description']; ?>
</p>


<p>

Price:
RM <?php echo $row['price']; ?>

</p>


<button>
Add To Cart
</button>


</div>


<hr>


<?php

}

?>


</body>

</html>