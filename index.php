<!-- Made by Anna Hoerschgen - https://github.com/AnnaHoerschgen -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LBDC</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Library Book Due Checker - LBDC</h1>
    <br>
    <?php
        // require statement for the form file
        require "form.php";
    ?>
    <br>
    <?php
        if (isset($_GET['submit'])) {
            // include statement for the display
            include "display.php";
        } else {
            echo "This message should not appear. If it has, please check your inputs and try again.";
        }
    ?>
    <br>
    <footer>
        Made by <a href="https://github.com/AnnaHoerschgen">Anna Hoerschgen</a>
    </footer>
</body>
</html>