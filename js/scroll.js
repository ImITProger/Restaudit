function scrollTo0(element) {
window.scroll({
    left: 0, 
    top: 1000, 
    behavior: 'smooth'
})
}

var btnStartToTest = document.querySelector('#btnStartToTest');
var details1 = document.querySelector('#details1');

btnStartToTest.addEventListener('click', () => {
scrollTo0(details1);
})
    

function scrollTo1(element) {
window.scroll({
    left: 0, 
    top: 2050, 
    behavior: 'smooth'
})
}

var btnFamily = document.querySelector('#btnFamily');
var details2 = document.querySelector('#details2');

btnFamily.addEventListener('click', () => {
scrollTo1(details2);
})

function scrollTo2(element) {
window.scroll({
    left: 0, 
    top: 3150, 
    behavior: 'smooth'
})
}

var btnName = document.querySelector('#btnName');
var details3 = document.querySelector('#details3');

btnName.addEventListener('click', () => {
scrollTo2(details3);
})

function scrollTo3(element) {
window.scroll({
    left: 0, 
    top: 4150, 
    behavior: 'smooth'
})
}

var btn3 = document.querySelector('#btn3');
var details4 = document.querySelector('#details4');

btn3.addEventListener('click', () => {
scrollTo3(details4);
})

function scrollTo4(element) {
window.scroll({
    left: 0, 
    top: 5250, 
    behavior: 'smooth'
})
}

var btn4 = document.querySelector('#btn4');
var details5 = document.querySelector('#details5');

btn4.addEventListener('click', () => {
scrollTo4(details5);
})


function scrollTo5(element) {
window.scroll({
    left: 0, 
    top: 6300, 
    behavior: 'smooth'
})
}

var btn5 = document.querySelector('#btn5');
var details6 = document.querySelector('#details6');

btn5.addEventListener('click', () => {
scrollTo5(details6);
})

function scrollTo6(element) {
window.scroll({
    left: 0, 
    top: 7350, 
    behavior: 'smooth'
})
}

var btn6 = document.querySelector('#btn6');
var details7 = document.querySelector('#details7');

btn6.addEventListener('click', () => {
scrollTo6(details7);
})

function scrollTo7(element) {
window.scroll({
    left: 0, 
    top: 8350, 
    behavior: 'smooth'
})
}

var btn7 = document.querySelector('#btn7');
var details8 = document.querySelector('#details8');

btn7.addEventListener('click', () => {
scrollTo7(details8);
})

function scrollTo8(element) {
window.scroll({
    left: 0, 
    top: 9450, 
    behavior: 'smooth'
})
}

var btn8 = document.querySelector('#btn8');
var details9 = document.querySelector('#details9');

btn8.addEventListener('click', () => {
scrollTo8(details9);
})

function scrollTo9(element) {
window.scroll({
    left: 0, 
    top: 11300, 
    behavior: 'smooth'
})
}

var btn9 = document.querySelector('#btn9');
var details10 = document.querySelector('#details10');

btn9.addEventListener('click', () => {
scrollTo9(details10);
})

function scrollTo10(element) {
window.scroll({
    left: 0, 
    top: 0, 
    behavior: 'smooth'
})
}

function myFun() {
    var ob = document.getElementById("btnStartToTest");
    ob.classList.add("hidden");
}

var btn10 = document.querySelector('#btn10');
var intro = document.querySelector('#intro');

btn10.addEventListener('click', () => {
    myFun(btnStartToTest);
    scrollTo10(intro);
})

