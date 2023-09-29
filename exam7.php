<form action="#" method="post">
    <input type="button" name="show" value="Show contacts">
    <input type="button" name="add" value="Add contacts">
    <input type="button" name="delete" value="Delete contacts">
    <input type="button" name="exit" value="Exit">
</form>

<?php
    $option = $_POST["show"];

    switch ($option) {
        case "show":
            echo "Show contacts";
            break;
        case "add":
            echo "Add contacts";
            break;
        case "delete":
            echo "Delete contacts";
            break;
        case "exit":
            echo "Exit";
        default:
            echo "Select";
    }
?>