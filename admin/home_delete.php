<?php
include("dbx.php");
$id=$_GET['delete'];
$sql	=	"DELETE  FROM home WHERE id=$id";
if (mysqli_query($mysqli, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($mysqli);
}
header('Location: home_table.php');

?>