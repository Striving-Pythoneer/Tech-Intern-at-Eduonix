<?php
$word1 = 'Hello';
$word2 ='world';
#concatanating in php
echo $word1." ".$word2.'<br/>' ;
# "<br/>" for line break
echo 'I just want to say '.$word1." ".$word2.'<br/><br/>';
#Integer
$num1 = 3;
$num2 = 5;
echo $num1 + $num2. '<br/><br/>';
#Array in php
$cars = array('Honda','Toyota', 'Scorpio');
echo 'I would love to drive '.$cars[2].'<br/> <br/>';

#Loops
echo 'php is end ";" sensitive <br/>';
foreach($cars as $car){
    echo 'I am looping through foreach '.$car.'<br />';
}


#dictionary array in php
echo '<br/>';
$cartoon = array("name" => "Shinchan", "created In" => "Japan", "channel" => "Humgama");
echo $cartoon['name']. '<br/> <br/>';
#looping through
foreach ($cartoon as $key => $value){
    echo 'looping through dictionary '.ucwords($key).': '.$value.'<br/>';
    #ucwords capitalize 1st word of key
}
echo '<br/>';
#for loop in php
for($i=0; $i<=10; $i++){
    echo 'For loop Number '.$i. '<br/>';

}
echo '<br/>';
echo ' Here goes my while loop *.* <br/>';
#while loop
$i=0;
while($i <= 10){
    echo $i. ' a penny hot cross bun <br/>';
    $i++;
}

?>