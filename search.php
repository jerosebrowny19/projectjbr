<?php
include('database.php');

if (isset($_POST['show'])) {
    $name = $_POST['name'];

    $sql = "SELECT * FROM userdata WHERE name LIKE '%$name%'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        while ($DataRows = mysqli_fetch_assoc($result)) {
            $Id = $DataRows['id'];
            $name = $DataRows['name'];
            $file_path = $DataRows['file_path'];

            echo "
            <br><br><center><h1>Got It Or Not ...</h1></center>
            <br><br><center><table>
            <tr>
                    <td>$name</td> 
                    <td>
                    <a href='$file_path' download>Download</a>
                    </td>
                  </tr>
                  </table></center> ";
                  
        }
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>

<html>
<style>


.sbtn{
    position: relative;
    left:-28%;
    top:3px;
    padding:10px;
    background-color:#0aa9f2;
}

.sbtn:hover{
    position: relative;
    left:-28%;
    top:3px;
    padding:10px;
    background-color:#02fa27;
}

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

.cont{
    background-color:red;
}

</style>
    <body>
</body>
</html>
