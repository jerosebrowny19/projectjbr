
<?php
$con=new mysqli('localhost','root','','mydatabase');
if(!$con){
    die(mysqli_error($_con));
}

/*function getDataById($id) {
    global $con; // Use the global $con variable

    $id = $con->real_escape_string($id); // Sanitize the input to prevent SQL injection

    $result = $con->query("SELECT * FROM userdata WHERE id = $id");

    if ($result && $result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return null; // Return null if no data is found
    }
}*/

?>



