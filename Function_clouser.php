


<!DOCTYPE html>
<html>
<body>

<p>A function can access variables defined outside the function:</p>

<button type="button" onclick="myFunction()">Click Me!</button>

<p id="demo"></p>

<script>
// var a =8;
// function myFunction() {
//     document.getElementById("demo").innerHTML = a * a;
// } 


var counter =0;

function add() {
    return counter ++;
}

function myFunction(){
    document.getElementById("demo").innerHTML = add();
}

// var add = (function () {
//     var counter = 0;
//     return function () {return counter += 1;}
// })();

// function myFunction(){
//     document.getElementById("demo").innerHTML = add();
// }
</script>

</body>
</html>