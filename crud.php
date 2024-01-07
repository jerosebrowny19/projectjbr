<?php
function deleteDataById($id)
{
    global $con; // Assuming $con is your database connection variable

    $sql = "DELETE FROM userdata WHERE id=$id";
    return $con->query($sql);
}
?>
