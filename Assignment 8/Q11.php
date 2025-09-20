<?php
function array_change_value_case($input, $case) {
    return array_map(function($v) use ($case) {
        return ($case == CASE_UPPER) ? strtoupper($v) : strtolower($v);
    }, $input);
}

$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

echo "Values are in lower case.\n";
print_r(array_change_value_case($Color, CASE_LOWER));

echo "Values are in upper case.\n";
print_r(array_change_value_case($Color, CASE_UPPER));
?>
