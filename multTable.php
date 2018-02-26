<?php
error_reporting(E_ALL);
ini_set("display_errors",1);

echo "<tr>";
echo "<td>" . " " . "</td>";
for ($t = 1; $t <= 100; $t++){
  echo "<td>" . $t . "</td>";
}
echo "</tr>";

for ($i = 1; $i <= 100; $i++){
  echo "<tr>" . "<td>" . $i . "</td>";
    for ($j = 1; $j <=100; $j++){
        echo  "<td>" . $i * $j  . "</td>";
    }

   echo "</tr>";
}

?>
