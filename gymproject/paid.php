<?php
include_once 'connection.php';
$sql = "DELETE FROM payment WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "<div><center><h1 style='color:green;'>✓</h1></center>
     <center><h1 style='color:green; font-size:40px; '>successfully</h1></center></div>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>