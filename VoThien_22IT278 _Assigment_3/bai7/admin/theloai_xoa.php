<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include("../connect/database.php");
if(isset($_GET["idTL"]))
{
$key=$_GET["idTL"];
}
$sl="delete from theloai where idTL=".$_GET["idTL"];
//if(mysql_query($sl))
if(mysqli_query($connect,$sl))
{
echo "<script language='javascript'>alert('Xoa thanh cong');";
echo "location.href='theloai.php';</script>";
}
?>
</body>
</html>