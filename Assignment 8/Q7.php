<?php
$x = array(1, 2, 3, 4, 5);

echo "Original array :\n";
echo implode(" ", $x) . "\n";

array_splice($x, 3, 0, '$');

echo "After inserting '\$' the array is :\n";
echo implode(" ", $x) . "\n";
?>
