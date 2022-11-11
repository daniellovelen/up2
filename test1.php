<?php
require_once("init.php");
require_once("check-login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST1</title>
    <style>
.div_st {
    height: 200px;
    width: 200px;
    background: #6b6bc5;
        }
    </style>
</head>
<body>
    <h1 style=" margin: 20px;
        background: #d3b2b2; 
        font-style: italick;">
        Заголовок</h1>
    <h4>This is beading 4</h4>
    <div class="div_st" onclick="alert('Hello World!')"> </div>
    <?php $sql = "SELECT id, concat(fam, ' ', name, ' ', otch) as name FROM students ORDER BY name";
$result = mysqli_query($db_handler,$sql) or die ("Невозможно выполнить SQL запрос в 'get-student.php'!".mysqli_error($db_handler));

$response ='<table>';
while($row = mysqli_fetch_array($result)) {
    $response .= '<tr>';
    $response .= '<td>'.$row['id'].'</td><td>' .$row['name'].'</td>';
    $response .= '</tr>';
}
$response .= '</table';

echo $response;
mysqli_close($db_handler);  

?>

</body>
</html>
<script>
    alert("After ALL");
</script>
