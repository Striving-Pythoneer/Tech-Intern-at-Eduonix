<?php
# to call function php we have 3 methods: include, require, require_once
include 'functions.php';
echo "I have called functions.php from another php<br/>";
echo  add(64,75);

#phrase replacement in php
echo '<br/><br/><br/>';
echo "Here comes Phrase Replacement in php <br/>";
$phrase = "I like to eat apples<br/>";
echo $phrase;
$phrase = str_replace("apples", "oranges", $phrase);
echo $phrase;

echo '<br/><br/>';
$name_array = array("Brad", "Bob", "Mike", "Sarah", "Michelle");
print_r($name_array);
echo '<br/><br/>';
#never echo an array cuz it shows no result
$name_string = implode('<br/>', $name_array); #array to string
echo $name_string;
echo '<br/><br/>';
#string to array
$food = "Pizza, Burger, Shwarma, Icescream, Cheese, Chicken";
$food_array = explode(",", $food);
echo $food;
echo '<br/><br/>';
print_r($food_array);
echo '<br/><br/>';

echo ucwords("make all 1st letter capital");
echo '<br/>';
echo ucfirst("only 1st letter of sentence becomes capital");
echo '<br/>';
echo strtolower("MAKE THE STRING IN LOWER LETTER");
echo '<br/> length of array is from count: ';
echo count($food_array);
echo '<br/> sorted array in alphabetical order';
sort($food_array);
print_r ($food_array);
?>