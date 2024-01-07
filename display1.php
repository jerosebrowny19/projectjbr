<?php
include('includes/header.html');

// Include the database connection file
include('database.php');
include('crud.php');

// Retrieve data from the database
$stmt = $con->query("SELECT * FROM userdata");

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
                <th>Title</th>
                <th class="file">File</th>
                <th>Download</th>
                <th>Delete</th>
            </tr>

            <?php  while($row = $stmt->fetch_assoc()) { ?>
                <!-- ... (previous code) ... -->

<tr>
    <td class="id"><?= $row['id'] ?></td>
    <td class="b"><?= $row['name'] ?></td>
    <td class="file">
        <center>
            <img src="./image/pdf.png" width="50px"><br><br>
            <a href="<?= $row['file_path'] ?>" class="btn" download>Download</a>
        </center>
    </td>
    <td>
        <a href="display.php?action=delete&id=<?= $row['id'] ?>" class="btn" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>
    </td>
</tr>

<!-- ... (remaining code) ... -->

            <?php } ?>
        </table>
    </div></center>

    <?php
include('includes/footer1.html');
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
