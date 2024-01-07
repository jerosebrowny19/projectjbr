<?php
// Include the database connection file
include('database.php');

if (isset($_POST['submit'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $user_id = $_POST['user_id'];

    // File upload handling
   $file_path = 'file/' . basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], $file_path);

    /* Image upload handling
    $image_path = 'image/' . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $image_path);*/
    
    // Insert data into the database
    $sql = "INSERT INTO userdata (name,user_id, file_path, image_path) VALUES ('$name', '$user_id', '$file_path', '$image_path')";
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

