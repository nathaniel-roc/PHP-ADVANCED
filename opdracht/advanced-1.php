<html>
    <head>
        <title>contact</title>
    </head>
    <body>
        <?php require "extra.php" ?>
        <forum action="advanced-2.php" method="POST">
            <?php kleuren(); ?>
            <p>Tabeldikte: <input type="text" name="tabelpx"></p>
            <input type="submit" name="submit" value="verstuur">
        </forum>
    </body>
</html>