<?php
    // include statement for functions
    include "functions.php";

    // desired format for datetime objects. Example: Monday, January 1st, 2025.
    $format = "l, F S, Y";

    // date inputs as proper datetime objects
    $returnDate = strtotime($_GET['returnDate']);
    $dueDate = strtotime($_GET['dueDate']);
?>

<div class="displayArea">
    <h2>Book Checked!</h2>
    <br>

    <h3>Return Date</h3>
    <p>
        <?php
            echo(date($format, $returnDate));
        ?>
    </p>

    <h3>Due Date</h3>
    <p>
        <?php
            echo(date($format, $dueDate));
        ?>
    </p>
    <br>

    <h3>Result of Check</h3>
    <p>
        <?php
            echo(checkDate($returnDate, $dueDate));
        ?>
    </p>
    <p>
        <strong>Difference between Return and Due dates: </strong>
        <?php
            if (checkDate($returnDate, $dueDate) != "The checked book is due.") {
                echo(returnDTIAsFormatted($returnDate, $dueDate));
            } else {
                echo "None.";
            }
        ?>
    <p>
</div>