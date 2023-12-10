<?php
$db=mysqli_connect("localhost","root","amro1234","clinic");
mysqli_select_db($db,"clinic");

$NAME = $_POST['name'];
$EMAIL = $_POST['email'];
$PHONE = $_POST['numberPhone'];
$DATE = $_POST['date'];


mysqli_query($db,"INSERT INTO `reserve` (`name`, `email`, `numberPhone`, `date`) VALUES ('$NAME', '$EMAIL', '$PHONE', '$DATE');");
mysqli_close($db)
?>

<html>
    <p>Congrats</p> 
</html>