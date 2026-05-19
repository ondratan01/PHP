<?php
session_start();

// Initialize variables
$bmi = '';
$weight = '';
$height = '';

if (isset($_GET['weight']) && isset($_GET['height'])) {
    $weight = $_GET['weight'];
    $height = $_GET['height'];

    $height_m = $height / 100; // convert cm to meters

    if ($height_m > 0) {
        $bmi = round($weight / ($height_m * $height_m), 2);
    } else {
        $bmi = 'Invalid height!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="get">
    <input type="text" name="weight" placeholder="kg">
    <br>
    <input type="text" name="height" placeholder="cm">
    <br><br>
    <input type="submit" value="Calculate BMI">
</form>
</body>
</html>


<?php
if ($bmi !== '') {
    echo "<h3>Your BMI is: $bmi</h3>";
}
?>