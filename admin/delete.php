<?php
$id = $_GET['id'];

include_once('../includes/connect.php');

// sql to delete a record
$sql = "DELETE FROM article WHERE id = $id"; 

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: view.php'); 
    exit;
} else {
    echo "Error deleting record";
}

?>