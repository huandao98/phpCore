<?php
$array = [
    ["nguyễn văn A", "ABC@gmail.com", "012"],
    ["nguyễn văn B", "DEF@gmail.com", "345"],
];

array_push($array, ["nguyễn văn C", "GHI@gmail.com", "678"]);

foreach ($array as list($a, $b, $c)) {
    echo "Họ & Tên: $a\n<br>";
}
?>