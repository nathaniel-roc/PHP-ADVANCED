<?php
function opties() {
$kleuren = array("red", "blue", "green", "black", "brown");
$onof = array("on", "off");
    echo "<p>achtergrond</p>";
    foreach($kleuren as $achtergrond){
        echo "<input type='radio' name='achtergrond' value='" . $achtergrond . "'>";
        echo  "<label for='" . $achtergrond . "'>" . $achtergrond . "</label>" . "<br>";
    }
    sleep(0.1);
    echo "<p>tekstkleur</p>";
    foreach($kleuren as $tekstkleur){
        echo "<input type='radio' name='tekstkleur' value='" . $tekstkleur . "'>";
        echo  "<label for='" . $tekstkleur . "'>" . $tekstkleur . "</label>" . "<br>";
    }
    sleep(0.1);
    echo "<p>center</p>";
    foreach($onof as $optie){
        echo "<input type='radio' name='onoff' value='" . $optie . "'>";
        echo  "<label for='" . $optie . "'>" . $optie . "</label>" . "<br>";
    }
}
?>