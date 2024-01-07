<?php
include('includes/header1.html');

// Include the database connection file
include('database.php');
include('crud.php');

// Retrieve data from the database
$stmt = $con->query("SELECT * FROM feedback1");

// Handle delete operation
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $id = $_GET['id'];

    if (deleteDataById($id)) {
        echo "Record deleted successfully";
        echo "<script>window.location.href='display.php';</script>";
    } else {
        echo "Error deleting record";
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

                <th>D.No</th>
                
                <th>Feedback</th>

                <th>Delete</th>
                
            </tr>

            <?php  while($row = $stmt->fetch_assoc()) { ?>
                <tr>
                <td class="id"><?= $row['feedback_id'] ?></td>
                    <td ><?= $row['feedname'] ?></td>
                    <td ><?= $row['feedback'] ?></td>
                    <td>
                    <center><img src=".\image\delete.png" width="40px"><br><br><a class="btn" href="display.php?action=delete&id=<?= $row['id'] ?>" class="btn-delete" onclick="return confirm('Are you sure you want to delete this record?');"><i class="fas fa-trash"></i> Delete</a>
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
