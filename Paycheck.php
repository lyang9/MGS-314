<!DOCTYPE html>
<html>
<body>

<?php
    $hours = $_POST["hours"];
    $hwage = $_POST["hwage"];
    if ($hours<0 || $hwage<0) {
        echo "Error";
    } else if ($hours>40) {
        echo (40*$hwage + ($hours-40)*$hwage*1.5);
    } else {
        echo ($hours*$hwage);
    }
?>

</body>
</html>