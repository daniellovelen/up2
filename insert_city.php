<?php 
require_once("init.php");

$name=$_GET["name"];
$nsp=$_GET["nsp"];
$sql = "insert city(name,nsp)
        values ('$name','$nsp')";
$result = mysqli_query($db_handler,$sql) or die ("Невозможно выполнить SQL запрос!".mysqli_error($db_handler));
echo "<h1>Выполнено</h1>"

?>