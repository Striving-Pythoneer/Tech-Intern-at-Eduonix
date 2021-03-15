//FUNCTIONS

function addNumber(num1, num2){
    return num1 + num2;
}
addNumber.money = '1000';
console.log(addNumber.money);

//equivalent representation of same function
const addnum = (n1,n2) => {
    return n1+n2;
}
console.log(addnum(5,6));
//Implicit return
const addno = (n3,  n4) => n3 + n4;
console.log(addno(53,61));


//OBJECTS
const person = {
    fName: "Shifa",
    lName: "Shaikh",
    id: 2407,
    changeId: function(newId){
        this.id = newId;
    }
}
const property = 'id';
console.log(person.fName);
console.log(person['lName']);
console.log(person[property]);

person.changeId(1998);
console.log(person[property]);

//Arrow Function is used when we are not sure about scope
function whatColorIsTheSky(){
    this.color = 'Night Blue';

    [1,2,3].forEach((i) => console.log(i))

    setTimeout(() => {
        console.log(this.color)
    }, 500);
}

whatColorIsTheSky()

//DOCUMENT OBJECT MODEL - FIND IT IN HTML PAGE

//ASYNCHRONOUS JS CODE
let timer = new Promise((resolve, reject) => {
    setTimeout(() => {
        resolve('timer expired');
    }, 3000) //set timer to 3 sec
})

timer
    .then(res => {
        console.log(res)
    })




        


