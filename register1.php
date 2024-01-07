<?php
// Connect to the database
include('database.php');

// Retrieve user input
$username = $_POST['username'];
$password = $_POST['password'];


    // Insert data into the database
    $sql = "INSERT INTO users1 (username,password) VALUES ('$username','$password')";
    $result=mysqli_query($con,$sql);
   

    if($result){
        header('Location: login1.html');
        // echo $_SESSION['companyname'];
    }
    else{
        die(mysqli_error($con));
    }



$conn->close();
?>
