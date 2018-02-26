<?php

$qa = array($_POST['q1a'],$_POST['q2a'],$_POST['q3a'],$_POST['q4a'],$_POST['q5a']);
$correctNum = 0;
echo $qa[0];

$qCa = array("13", "SpongeBob", "Baby don't hurt me", "Salamander", "Doge");

$q = array("What is 2*9-6+1?", "Who lives in a pineapple under the sea?", "What is love?", "What is Kansas' state reptile", "Much wow");

for($i = 1; $i <= 5; $i++){
  echo "Question " . $i . ": " .$q[$i-1] . "<br>";
  echo "<span> You answered: " . $qa[$i-1] . "</span><br>";
  echo "<span> Correct answer: " . $qCa[$i-1] . "</span><br><br>";
  if ($qa[$i-1] == $qCa[$i-1]){
    $correctNum++;
  }
}

echo "You scored " . ($correctNum/5)*100 . "%";



?>
