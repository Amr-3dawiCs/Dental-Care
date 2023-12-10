<?php
$db=mysqli_connect("localhost","root","amro1234","clinic");
mysqli_select_db($db,"clinic");

$EMAIL = $_POST['email'];

mysqli_query($db,"DELETE FROM `reserve` WHERE `reserve`.`email` = '$EMAIL';");
mysqli_close($db)
?>

<html>
    <p>Deleted</p> 
</html>