<?php
$border = 2;
echo"<table border=$border>";
for ($i = 0; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 10; $j++) {
    
        echo "<td>$i.$j</td>";
       
    }
    echo "</tr>";
}
echo "</table>";

?>