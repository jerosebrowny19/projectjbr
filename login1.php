<?php
// Connect to the database

include('database.php');

// Retrieve user input
$username = $_POST['username'];
$password = $_POST['password'];

// Check if the entered username and password match a record in the database
$sql = "SELECT * FROM users1 WHERE username='$username' AND password='$password'";
//$result=mysqli_query($con,$sql);
$result = $con->query($sql);



/*if($result){
    header('Location: login.html');
    // echo $_SESSION['companyname'];
}
else{
    die(mysqli_error($con));
}*/


if ($result->num_rows > 0) {
    header('Location: store.php');
} else {
    echo "Login failed. Please check your username and password.";
}

$con->close();
?>
