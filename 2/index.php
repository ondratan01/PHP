<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
/*$prom = "ahoj lidi ";
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
*/


#print("<br><br><br><br><br><br><br><br><br><br>");
#print ok


?>

    
<form action="welcome.php" method="get">
    <!-- Text -->
    <label for="text">Text:</label>
    <input type="text" id="text" name="text">
    <br><br>

    <!-- Password -->
    <label for="password">Heslo:</label>
    <input type="password" id="password" name="password">
    <br><br>

    <!-- Email -->
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
    <br><br>

    <!-- URL -->
    <label for="url">URL:</label>
    <input type="url" id="url" name="url">
    <br><br>

    <!-- Number -->
    <label for="number">Číslo:</label>
    <input type="number" id="number" name="number" min="1" max="100">
    <br><br>

    <!-- Range -->
    <label for="range">Rozsah:</label>
    <input type="range" id="range" name="range" min="0" max="100" step="1">
    <br><br>

    <!-- Date -->
    <label for="date">Datum:</label>
    <input type="date" id="date" name="date">
    <br><br>

    <!-- Time -->
    <label for="time">Čas:</label>
    <input type="time" id="time" name="time">
    <br><br>

    <!-- Datetime-local -->
    <label for="datetime-local">Datum a čas (místní):</label>
    <input type="datetime-local" id="datetime-local" name="datetime-local">
    <br><br>

    <!-- Month -->
    <label for="month">Měsíc:</label>
    <input type="month" id="month" name="month">
    <br><br>

    <!-- Week -->
    <label for="week">Týden:</label>
    <input type="week" id="week" name="week">
    <br><br>

    <!-- Search -->
    <label for="search">Hledání:</label>
    <input type="search" id="search" name="search">
    <br><br>

    <!-- Tel -->
    <label for="tel">Telefon:</label>
    <input type="tel" id="tel" name="tel">
    <br><br>

    <!-- File -->
    <label for="file">Soubor:</label>
    <input type="file" id="file" name="file">
    <br><br>

    <!-- Hidden -->
    <input type="hidden" name="hidden" value="secret">

    <!-- Checkbox -->
    <label for="checkbox">Zaškrtněte, pokud souhlasíte:</label>
    <input type="checkbox" id="checkbox" name="checkbox" value="yes">
    <br><br>

    <!-- Radio -->
    <label for="radio1">Volba 1:</label>
    <input type="radio" id="radio1" name="radio" value="1">
    <label for="radio2">Volba 2:</label>
    <input type="radio" id="radio2" name="radio" value="2">
    <br><br>

    <!-- Submit Button -->
    <input type="submit" value="Odeslat">

</form>





</body>
</html>