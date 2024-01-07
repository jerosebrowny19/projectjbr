<?php
// Include the database connection file
include('database.php');

if (isset($_POST['submit'])) {
    // Retrieve feedback
    $feedback_id = $_POST['feedback_id'];
    $feedname = $_POST['feedname'];
    $feedback = $_POST['feedback'];
   
    // Insert data into the database
    $sql = "INSERT INTO feedback1 (feedback_id,feedname,feedback) VALUES ('$feedback_id','$feedname', '$feedback')";
    $result=mysqli_query($con,$sql);

    if($result){
        header('Location: display.php');
        // echo $_SESSION['companyname'];
    }
    else{
        die(mysqli_error($con));
    }
}


/*
// search bar code is here...

// Handle search query
$search = isset($_GET['search']) ? $_GET['search'] : '';
$query = "SELECT * FROM userdata";

if (!empty($search)) {
    $query .= " WHERE name LIKE '%$search%' OR user_id LIKE '%$search%'";
}

// Sorting logic (replace 'column_name' with your actual column name)
$sort = isset($_GET['sort']) ? $_GET['sort'] : 'name';
$query .= " ORDER BY $sort";

$result = $mysqli->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='data'>";
        echo "<h3>{$row['name']}</h3>";
        echo "<p>{$row['id']}</p>";
        // Add more fields as needed
        //echo "</div>";
    }
} else {
    echo "No data found.";
}

// Close the connection
$mysqli->close();

*/
?>

