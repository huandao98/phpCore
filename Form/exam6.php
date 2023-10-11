<?php
    $array = array(360,310,310,330,313,375,456,111,256);
    $arrlength = count($array);
    echo "Ban đầu:<br>";
    for($x = 0; $x < $arrlength; $x++) {
      echo $array[$x];
      echo "<br>";
    };
    echo "Sắp xếp tăng dần:<br>";
    sort($array);
    for($x = 0; $x < $arrlength; $x++) {
      echo $array[$x];
      echo "<br>";
    }
?>