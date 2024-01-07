<?php
include('includes/header1.html');

// Include the database connection file
include('database.php');


// Retrieve data from the database
$stmt = $con->query("SELECT * FROM users");

// Handle delete operation
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $id = $_GET['id'];

    if (deleteDataById($con, 'users', $id)) {
        echo "Record deleted successfully";
        echo "<script>window.location.href='delete.php';</script>";
        exit(); // Add this to stop further execution
    } else {
        echo "Error deleting record";
    }
}

function deleteDataById($con, $table, $id) {
    // Implement your logic to delete data from the database
    // Make sure to handle errors and return true on success, false on failure
    $sql = "DELETE FROM $table WHERE id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        $stmt->close();
        return true;
    } else {
        $stmt->close();
        return false;
    }
}
?>

<html lang="en">
<head>
    <!-- ... your head content ... -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-REPLACE_WITH_YOUR_INTEGRITY_CHECK" crossorigin="anonymous" />
</head>

<body>
    <center><div class="container">
        <!-- ... your HTML content ... -->
        <table>
             <tr>
                <th>ID</th>

                <th>Username</th>
                
                <th>password</th>

                <th>Delete</th>
                
            </tr>

            <?php  while($row = $stmt->fetch_assoc()) { ?>
                <tr>
                <td class="id"><?= $row['id'] ?></td>
                    <td ><?= $row['username'] ?></td>
                    <td ><?= $row['password'] ?></td>
                    <td>
                    <center><img src=".\image\delete.png" width="40px"><br><br><a class="btn" href="delete.php?action=delete&id=<?= $row['id'] ?>" class="btn-delete" onclick="return confirm('Are you sure you want to delete this record?');"><i class="fas fa-trash"></i> Delete</a>
            </center></td>
                    </tr>
            <?php } ?>
        </table>
    </div></center>

    <?php
include('includes/footer.html');
?>

</body>

<style>

    body{
        background-color:#E8E8E8;
    }
   
    th,td{
    padding:40px;
    width: 150px; 
 
}

th{
    position: sticky;
            top: 0;
            background-color:white;
            padding:20px;
}

.b {
  word-wrap: break-word;
}

tr:nth-child(even)

{

background-color:#d6eeee;
}

.btn
{
    text-decoration:none;
    padding:10px;
    background-color:green;
    color:white;
    border-radius:10px;
}

.container{

padding:20;

}

table{
background-color:white;
backdrop-filter:blur;
padding:10px;
border:20px;
border-radius:5px;
box-shadow:2px 2px 10px 0;

}

</style>


</html>
