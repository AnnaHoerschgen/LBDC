<?php

    // Functions
    function checkDate($returnDate, $dueDate) {
        $difference = date_diff($returnDate, $dueDate);

        if ($difference > 0) {
            return "The checked book is overdue.";
        }
        else if ($difference < 0) {
            return "The checked book is not yet due.";
        }
        else {
            return "The checked book is due today.";
        }
    }

    function returnDTIAsFormatted($first, $second) {
        $difference = abs($first - $second);

        $years  = floor($difference / (365*24*60*60));
        $months = floor(($difference % (365*24*60*60)) / (30*24*60*60));
        $days   = floor(($difference % (30*24*60*60)) / (24*60*60));

        return "$years Years, $months Months, $days Days";
    }
?>