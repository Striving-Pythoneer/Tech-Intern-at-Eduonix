console.log("Bismillah!!"); // print output "; - end of command"
// alert("Good work today!!") //gives you a pop up

// Below is variables and arrays
var b = "Minion";
console.log(b);
var number = 24 ;
console.log(number);
document.getElementById('someText').innerHTML = 'Hello World';
var cars = ['Honda', 'Toyota', 'Frod'];
cars[3] = 'Audi';
document.write(cars.length); //write output to browser
document.write("<br/>"); // new line
document.write(cars.indexOf('Toyota'));
console.log(cars);
document.write("<br/>");

// Loops
document.write("for loop with variable declared inside" + "<br/>");
for (var i=0; i<10; i++){
    document.write('number ' +i + "<br/>");
}
document.write("<br/>");

document.write("while loop"+ "<br/>");
var i = 0;
while (i<10){
    document.write('sheep ' + i + "<br/>");
    i++;
}
document.write("<br/>");

document.write("for loop with variable declared outside/ already & with in function"+ "<br/>");
var people=['Harry', 'Jenny', 'Mark', 'Jenna'];
for(i in people){
    document.write(people[i] + "<br/>");
}
document.write("<br/>");

document.write("for loop with variable declared outside & with .length function"+ "<br/>");
var people= ['Harry', 'Jenny', 'Mark', 'Jenna', 'Tom', 'Jerry'];
for (i=0; i<people.length; i++){
    document.write(people[i] + "<br/>");
}
document.write("<br/>");

document.write("while loop with variable declared outside"+ "<br/>");
var people= ['Harry', 'Jenny', 'Mark', 'Jenna', 'Tom', 'Jerry', 'Marry'];
i=0;
while(i<people.length){
    document.write(people[i] + "<br/>");
    i++;
}
document.write("<br/>");

// Functions
function sayHi2(){
    document.write("Function result below")
    document.write("<br/>");
    document.write("Hi! Nice to meet you! ^_^");
    document.write("<br/>");
}
sayHi2();

function sayHi3(word){
    document.write("taking input to function")
    document.write("Hi! Nice to meet you! ^_^ " + word);
    document.write("<br/>");
}
sayHi3("Striving star");

function sayHi3(word1, word2){
    document.write("taking many input to function")
    // if 2 input are there and you give only one input an undefined error would come
    // giving word2 definate/ default value
    word2 = word2 || "Fighting!! Spirits up dear!";
    document.write("Hi! Nice to meet you! ^_^ " + word1 + " " + word2);
    document.write("<br/>");
}
sayHi3("Striving star!", "Good day to you");
sayHi3("Shifa");

function add(num1, num2){
    sum = num1 + num2;
    return sum
    //document.write("The sum is " + sum)
    document.write("<br/>");
}

document.write(add(18,6));
document.write("<br/>");
document.write(add('2','shakes'));
document.write("<br/>");

// If - else statements
var x=5;
if(x==5){
    document.write("var x is equal to 5"+ "<br/>");
    document.write("== operator" + "<br/>");
}
else{
    document.write("var x is not equal to 5"+ "<br/>");
    document.write("<br/>");
}
document.write("<br/>");

//&& and sign
// || or sign
// | not sign

var x=5;
if(x>5 && x<10){
    document.write("var x is equal to 5"+ "<br/>");
    document.write("&& operator" + "<br/>");
}
else{
    document.write("var x is not equal to 5"+ "<br/>");
    document.write("&& operator" + "<br/>");
}
document.write("<br/>");

var x=5;
if(x>5 || x<10){
    document.write("var x is equal to 5"+ "<br/>");
    document.write("|| operator" + "<br/>");
}
else{
    document.write("var x is not equal to 5"+ "<br/>");
    document.write("|| operator" + "<br/>");
}
document.write("<br/>");


var color='black';
if(color == 'red'){
    document.write("color is red");
}else if(color=='blue'){
    document.write("color is red");
}else{
    document.write("color is not red or blue")
}
document.write("<br/>");
document.write("<br/>");

//Switch statement
var x = 4;
switch(x){
    case 2:
        document.write("x is 2" + "<br/>");
        break;
    case 5:
        document.write("x is 5" + "<br/>");
        break;
    default:
        document.write("x is not 2 or 5" + "<br/>");
        break;
}
document.write("<br/>");
document.write("<br/>");

var day=new Date().getDay(); //get todays day
switch(day){
    case 0:
        x = "Today is Sunday";
        break;
    case 1:
        x = "Today is Monday";
        break;
    case 2:
        x = "Today is Tuesday";
        break;
    case 3:
        x = "Today is Wednesday";
        break;
    case 4:
        x = "Today is Thursday";
        break;
    case 5:
        x = "Today is Friday";
        break;
    case 6:
        x = "Today is Saturday";
        break;
}        
alert(x);
