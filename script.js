function rounding(n) {
    return parseFloat(n.toFixed(2));
}
console.log(rounding(3.14159)); // 3.14


function isNumber(n) {
    return typeof(n) == "number";
}
console.log(isNumber(123)); // true
console.log(isNumber("123")); // false


function lengthOfStringNumber(n) {
    return n.toString().length;
}
console.log(lengthOfStringNumber(12345)); // 5


function wholePart(n) {
    return Math.trunc(n);
}
console.log(wholePart(4.9)); // 4


function upperCase(n) {
    return n.toUpperCase();
}
console.log(upperCase("hello")); // "HELLO"


function hasWord(n, m) {
    return n.indexOf(m) != -1;
}
console.log(hasWord("hello world", "world")); // true


function replaceSpace(n) {
    return n.replaceAll(" ", "_");
}
console.log(replaceSpace("hello world test")); // "hello_world_test"


function slice3Letter(n) {
   if (n.length < 3) return n;
   return n.slice(0, 3).concat(n.slice(-3));
}
console.log(slice3Letter("javascript")); // "javipt"


function trimSpaces(n) {
    return n.trim();
}
console.log(trimSpaces("   hello   ")); // "hello"


function lengthOfString(n) {
    return n.length;
}
console.log(lengthOfString("hello")); // 5


function addItem(n, m) {
     n.push(m);
}
let arr1 = [1, 2];
addItem(arr1, 3);
console.log(arr1); // [1, 2, 3]


function removeItem(n) {
     n.pop();
}
removeItem(arr1);
console.log(arr1); // [1, 2]


function biggerThan10(n) {
    for (let i = 0; i < n.length; i++) {
        if (n[i] > 10) { 
            return i;
        }
    }
    return -1;
}
console.log(biggerThan10([5, 8, 12, 3])); // 2


function getEvenNumbers(arr) {
    let arr2 = [];
    for (let i = 0; i < arr.length; i++) {
        if (arr[i] % 2 === 0) {
            arr2.push(arr[i]);
        }
    }
    return arr2;
}
console.log(getEvenNumbers([1, 2, 3, 4, 5, 6])); // [2, 4, 6]


function multiplyBy2(arr) {
    for (let i = 0; i < arr.length; i++) {
        arr[i] *= 2;
    }
}
let arr2 = [1, 2, 3];
multiplyBy2(arr2);
console.log(arr2); // [2, 4, 6]


function sumOfArr(arr) {
    let sum = 0;
    for (let i = 0; i < arr.length; i++) {
        sum += arr[i];
    }
    return sum;
}
console.log(sumOfArr([1, 2, 3, 4])); // 10


function hasElement(arr, m) {
    return arr.includes(m);
}
console.log(hasElement([1, 2, 3], 2)); // true
console.log(hasElement([1, 2, 3], 5)); // false


function concatArrays(arr1, arr2) {
    return arr1.concat(arr2);
}
console.log(concatArrays([1, 2], [3, 4])); // [1, 2, 3, 4]


function sliceOfArr(arr) {
    return arr.slice(1, 4);
}
console.log(sliceOfArr([0, 1, 2, 3, 4])); // [1, 2, 3]


function sortToHigh(arr) {
    return arr.sort((a, b) => a - b);
}
console.log(sortToHigh([5, 2, 9, 1])); // [1, 2, 5, 9]


function getKeys(ob) {
    return Object.keys(ob);
}
console.log(getKeys({name: "Anna", age: 25})); // ["name", "age"]


function getValues(ob) {
    return Object.values(ob);
}
console.log(getValues({name: "Anna", age: 25})); // ["Anna", 25]


function hasKeyObj(ob, key) {
    return key in ob;
}
console.log(hasKeyObj({name: "Anna", age: 25}, "name")); // true
console.log(hasKeyObj({name: "Anna", age: 25}, "city")); // false


function combineObjects(ob1, ob2) {
    return Object.assign({}, ob1, ob2);
}
console.log(combineObjects({a: 1}, {b: 2, a: 3})); // {a: 3, b: 2}


function keyValue(ob) {
    let text = "";
    for (let [key, value] of Object.entries(ob)) {
        text += key + ": " + value + " " ;
    }
    return text;
}
console.log(keyValue({name: "Anna", age: 25}));

let l=document.getElementById("list")
let input=document.getElementById("input1")
let button=document.getElementById("button1")
button.onclick= function(){
    newLi = document.createElement("li")
    l.appendChild(newLi);
    newLi.innerHTML=input.value;
    input.value=""
};



function addfont(element) {
    element.style.color = "green";
}

function removeP(element) {
    element.remove()
}
