var count = 0;
var char = ' ';
while (count < 7) {
	console.log(char +='#');
	count++;
}

var a = prompt('Введите число 1:');
var b = prompt('Введите число 2:');

function min(a, b){
    return Math.min(a, b);
}
console.log(min(a, b));