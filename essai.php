
<!DOCTYPE html>
<html>
<body>

<?php
$tab["a","b","c"];

ob_start();
echo "This content will not be sent to the browser.";
foreach($tab as $item) {
echo $item;
}

ob_end_clean();

echo "This content will be sent to the browser.";
?>

</body>
</html>
