<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/jquery-3.6.0.js"></script>
    <style>
        .myclass{
            background: #b69a9a; 
        }
    </style>
</head>
<body>
    <script>
        $(document).ready(function(){
  $("#2").hover(function(){
    $("div").css("background","red");
  });
});

$(document).ready(function(){
  $("#1").hover(function(){
    $("div").css("background","blue");
  });
});
    </script>
<div id = "1" class="myclass" style="height: 200px; width: 200px"></div>

<br>
<div id= "2" class="myclass" style="height: 200px; width: 200px"></div>
</body>
</html>