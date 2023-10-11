<?php
    $option = $_POST["option"];

    switch ($option) {
        case "1":
            echo "Show contacts";
            break;
        case "2":
            echo "Add contacts";
            break;
        case "3":
            echo "Delete contacts";
            break;
        case "4":
            echo "Exit";
            break;
        default:
            echo "Select make a choice";
    }
?>