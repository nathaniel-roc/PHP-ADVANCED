<?php
$student  = array(
    "voornaam"    => "Jan",
    "achternaam"  => "Janssen",
    "klas"        => "9A",
    "Leeftijd"    => 17,
    "Woonplaats"  => "Amstelveen (nou ja zeg)"
  );

  foreach($student as $lijst => $waarde){
      echo $lijst . ": " . $waarde . "<br>";
  }
?>