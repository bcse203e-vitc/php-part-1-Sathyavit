<?php
$age = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

echo "a) Ascending order sort by value:\n";
asort($age);
print_r($age);

echo "b) Ascending order sort by key:\n";
ksort($age);
print_r($age);

echo "c) Descending order sort by value:\n";
arsort($age);
print_r($age);

echo "d) Descending order sort by key:\n";
krsort($age);
print_r($age);
?>
