function createSandwich(bread, meat, vegetable) {

    const sandwichLog = meat + ' and '+ vegetable + ' sandwich on ' + bread  + ' bread ';

    let sandwich = []

    sandwich.push(bread);
    sandwich.push(meat);
    sandwich.push(vegetable);
    sandwich.push(bread);

    console.log('SANDWICH:', sandwich)
    console.log(sandwichLog)

}
createSandwich('White', 'chicken', 'tomato');

const Name = ' Nathanial Clearwater';
//Variables defined with const behave like let variables, except they cannot be reassigned
const greeting = 'Hello';
const exclamation = ' !';
const sentance = greeting + Name + exclamation;
console.log(sentance);
console.log(sentance[0]);// indexing
const sentiment = `Hey! ${Name} i am using Template literals ^@^`
console.log(sentiment)

//Array
const array = ['x','y','a','b','c','d','e','gooooooooooooo'];
console.log(array[0]);
console.log(array.length);
console.log(array.sort());

//Operators

// Abstract Equality Operator not really useful cuz it can create bug
"0" == 0;
1 == true;

// Strict Equality Operator
"0" === 0;
1 === true;

//Assignment
let variable;
variable = 1;
variable +=1;

// Increment and Decrement
variable ++;
variable --;

//Modulus get remainder
9 % 4;

variable>=10;
variable<=10; // & so on

//If statements and condition
const itIsDayTime = true;
let itIsNightTime;
if (itIsDayTime){
    itIsNightTime = false;
} else {
    itIsNightTime = true;
}
console.log(itIsNightTime)

const hourOfDay = new Date().getHours();
let partOfDay;
if (hourOfDay > 5 && hourOfDay<12){
    partOfDay = 'Morning'
}else if(hourOfDay>12 && hourOfDay <= 17){
    partOfDay = 'Afternoon'
}else if(hourOfDay>=17 && hourOfDay < 24){
    partOfDay = 'Evening'
}

if(hourOfDay === 12 || hourOfDay === 24){
    partOfDay = 'Noon or Midnight'
}

console.log(partOfDay)

//For and while Loop
const people = [
    "shifa shaikh",
    "marry spain",
    "what doanna"
];

for (i=0; i<people.length; i++){
    let [firstname, lastname] = people[i].split(" ");
    firstname = firstname[0].toUpperCase() + firstname.slice(1);
    // capatilizing 1st letter
    lastname = lastname[0].toUpperCase() + lastname.slice(1);
    people[i] = `${firstname} ${lastname}`;
}
console.log(people)

let j = 1;
while(j<=20){
    console.log(`this while loop has looped ${j} times`);
    j++;
}

// alternatives to loop
const people1 = [
    "shifa shaikh",
    "marry spain",
    "what doanna",
    "new terner"
];
let capitalizedPeople = people1.map((person) => {
    let [firstname, lastname] = person.split(" ");
    firstname = firstname[0].toUpperCase() + firstname.slice(1);
    // capatilizing 1st letter
    lastname = lastname[0].toUpperCase() + lastname.slice(1);
    return `${firstname} ${lastname}`; //we don't have to use the iterator variable
});
console.log(capitalizedPeople)

const numbers = [92,3,4,5,6,78,67,4,5];
const sum = numbers.reduce((accumulator, number) => {
    return accumulator + number
})  //adding number
const numberLessThanTen = numbers.filter((number) => {
    return (number<10)
}) //return no. less than 10
console.log(sum)
console.log(numberLessThanTen)

//Multidimensional array
const strings = [['a','s','d','f'], ['i','t','s'],['g','i','b','b','e','r','i','s','h']];
let sentence1 = '';

strings.forEach((val) => {
    val.forEach((letter) => {
        sentence1 =sentence1 + letter;
    })
    sentence1 = sentence1 + ' '
})
console.log(sentence1);
console.log("Below result is using for loop:");
let sentence2 = '';
for (i=0; i<strings.length; i++){
    for(j=0; j<strings[i].length; j++){
        sentence2 = sentence2 + strings[i][j];
    }
    sentence2 = sentence2 + " ";
    //console.log(sentence1);
}
console.log(sentence2);
