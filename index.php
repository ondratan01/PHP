<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
$prom = "ahoj lidi ";
print $prom.'<br>';

echo $prom ," cau";

print("<br><br>");

$a = 5;
$b = 5.34;
$c = "25";



var_dump($a);
var_dump($b);
var_dump($c);

$b = (string) $b;
var_dump($b);



print("<br><br><br><br><br><br><br><br><br><br>");



?>
<form action="welcome.php" method="post">
    Name:<input type="text" name="name"><br>
    <input type="submit">
</form>
    
</body>
</html>