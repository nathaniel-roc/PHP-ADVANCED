<DOCTYPE! html>
<html>
<head>
    <title>wat een prachtige titel is dit dan!</title>
</head>
<body>
<?php
$klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");
echo "<form>
<input list=" . "klassen" . ">
<datalist id=" . "klassen" . ">";
foreach($klassen as $nummers){
    echo "<option value=" . $nummers . ">";
}

echo "</datalist>
<input type=". "submit" . ">
</form>"
?>
</body>
</html>



<?php

if($dark == true){
    echo ""
}