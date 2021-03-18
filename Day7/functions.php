<?php
function writeMsg() {
  echo "Hello world! <br/>";
}

writeMsg(); // call the function

function sayIt($word) {
    echo $word;
}

sayIt("Its beautiful life! beautiful day!! <br/>");

function sayItagain($word1, $word2) {
    echo $word1.' '.$word2.'<br/>';
}

sayItagain("OST", "Goblin");
sayItagain("If you only put word1", "php will give you an error");

function add($num1, $num2) {
    return $num1 + $num2;
    #echo '<br/>';
}

add(24,7);
?>

