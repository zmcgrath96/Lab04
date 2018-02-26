<?php

echo "<link href = 'style.css' rel = 'stylesheet' type = 'text/css'/>";

error_reporting(E_ALL);
ini_set("display_errors",1);

$amount = array($_POST['sugaramt'],$_POST['spiceamt'],$_POST['everythingniceamt'],$_POST['chemxamt']);
$email = $_POST['email'];
$password = $_POST['password'];
$ship = $_POST['shipping'];
$chemx = rand(1,100);
$total = $amount[0]*2  + $amount[1]*5 + $amount[2]*40 + $amount[3]*$chemx + $ship;

echo "<h1> Welcome </h1>";
echo "<h3> Your password: " . $password . "</h3>";
echo "<table class='receipt'>";
echo "<th><h2> RECEIPT </h2></th>";
echo "<tr><td> </td> <td> Quantity </td><td> Cost Per Item </td><td>Sub Total </td></tr>";
echo "<tr><td> Sugar </td> <td>". $amount[0] . "</td><td> $2 </td> <td> " . $amount[0]*2 . "</td></tr>";
echo "<tr><td> Spice </td> <td>". $amount[1] . "</td><td> $5 </td> <td> " . $amount[1]*5 . "</td></tr>";
echo "<tr><td> Everything Nice </td> <td>". $amount[2] . "</td><td> $40 </td> <td> " . $amount[2]*40 . "</td></tr>";
echo "<tr><td> Chemical X </td> <td>". $amount[3] . "</td><td> $" . $chemx ." </td> <td> " . $amount[3]*$chemx . "</td></tr>";
echo "<tr><td> </td> <td> Total </td><td>  </td><td>". $total  ."</td></tr>";
echo "</table>";


?>
