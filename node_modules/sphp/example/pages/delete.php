<?php
require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM courses WHERE id=$id"; 
$result = mysqli_query($con,$query);

echo("<meta http-equiv='refresh' content='1'>");
?>