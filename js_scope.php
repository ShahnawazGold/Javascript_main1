

<!DOCTYPE html>
<html>
<body>

<p>A GLOBAL variable can be accessed from any script or function.</p>

<p id="demo"></p>

<script>
// var carName = "Volvo";
// myFunction();

// function myFunction() {
//     document.getElementById("demo").innerHTML =
//     "I can display " + carName;
// }


// golbal

myFunction();

// code here can use carName as a global variable
document.getElementById("demo").innerHTML = "I can display " + carName;

function myFunction() {
    carName = "Volvo";
}
</script>

</body>
</html>