<?php
function kleuren() {
$kleuren = array("red", "blue", "green", "black", "brown");
    foreach($kleuren as $kleur){
        echo "<input type='radio' name='kleuren' value='" . $kleur . "'>";
        echo  "<label for='" . $kleur . "'>" . $kleur . "</label>" . "<br>";
    }
}
?>