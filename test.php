<?php
// Database connection
include('database.php');


// Create operation
if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Read operation
$sql = "SELECT * FROM mydatabase";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['phone']}</td>
                <td>
                    <a href='update.php?id={$row['id']}'>Update</a>
                    <a href='delete.php?id={$row['id']}'>Delete</a>
                </td>
              </tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
