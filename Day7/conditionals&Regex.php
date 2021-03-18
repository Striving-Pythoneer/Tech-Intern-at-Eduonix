<?php
$x=5;
if($x>2) {
    echo $x.' is greater than 2 ';
} else {
    echo $x.' is NOT greater than 2';
}

#&& ||
echo '<br/><br/>';
$y = 6;
if($y>2 && $y<10) {
    echo $y.' is greater than 2 and less than 10';
}


echo '<br/><br/>';
if($x == 10) {
    echo $x.' is 10';
} elseif($x == 5) {
    echo $x.' is 5';
} else {
    echo $x.' idhar kaise pohche and NO parantheses in ELSE ';
}

#Switch Case
echo '<br/><br/>';
$z=9;
switch($z){
    case 5:
        echo $z.' is 9';
        break;
    case 8:
        echo $z.' is 9';
        break;
    default:
        echo $z.' is not 5 or 6';
        break;
}


#REGULAR EXPRESSION
echo '<br/><br/>';
if (preg_match ("/ell/", "Hello World", $matches)) {
    # code... begining and end doesn't matter
    echo "Match was found <br/ >";
    echo $matches[0];
}
echo '<br/><br/>';
if (preg_match ("/^Hell/", "Hello World", $matches)) {
    # code... begining matter
    echo "Match was found <br/ >";
    echo $matches[0];
}
echo '<br/><br/>';
if (preg_match ("/World$/", "Hello World", $matches)) {
    # code... end matter
    echo "Match was found <br/ >";
    echo $matches[0];
}
echo '<br/><br/>';
if (preg_match ("/[hoc]/i", "Hello World", $matches)) {
    # code... letter occurance matter and in case sensitive use '/i'
    echo "Match was found <br/ >";
    echo $matches[0];
}
echo '<br/><br/>';
if (preg_match ("/[0-9\.\-]/i", "Hello3 World", $matches)) {
    # code... match no. 0-9 or . or -
    echo "Match was found <br/ >";
    echo $matches[0];
}
?>