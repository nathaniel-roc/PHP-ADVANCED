<html>
    <head>
        <title>contact</title>
        <style>
        body{
        <?php
        if("red" == $_POST["kleuren"]){
            echo "background-color: red;";
        } elseif("blue" == $_POST["kleuren"]){
            echo "background-color: blue;";
        } elseif("green" == $_POST["kleuren"]){
            echo "background-color: green;";
        } elseif("black" == $_POST["kleuren"]){
            echo "background-color: black;";
        } elseif("brown" == $_POST["kleuren"]){
            echo "background-color: brown;";
        } else{
            echo "background-color: yellow;";
        }?>
        }
        </style>
    </head>
    <body>
        
    </body>
</html>