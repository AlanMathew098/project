<?php
include("dbx.php");
$id=$_GET['sa'];

$sql	=	"DELETE  FROM food WHERE id=$id";
if (mysqli_query($mysqli, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($mysqli);
}
header('Location: food_table.php');

?>