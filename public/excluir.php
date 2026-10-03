<?php 
include "../infra/connection.php";

$id = $_GET["id"];
$sql = "DELETE from Brinquedos WHERE id=$id";
mysqli_query($conn,$sql);
header("Location: ../index.php");


?>