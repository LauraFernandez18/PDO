<?php

$name=$_POST['name'];
$age=$_POST['age'];

require_once 'ver.php';
require_once 'conexion.php';

$sql="INSERT INTO `tbl_persona` (`name`, `age`) VALUES ('$name','$age')";
mysqli_query($pdo,$sql);

header("Location:vista.php");
echo $sql;