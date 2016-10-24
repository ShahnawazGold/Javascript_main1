

<!DOCTYPE html>
<html>
<body>

<h1>JavaScript Loops</h1>

<p id="demo"></p>

<script>
// var cars = ["BMW", "Volvo", "Saab", "Ford", "Fiat", "Audi"];
// var text ="";
// var  i;
// for (i=0; i < cars.length; i++) { 
//     text+= cars[i]+"<br>";
// }

// document.getElementById("demo").innerHTML = text;


var txt = "";
var person = {fname:"shah", lname:"khan", age:25}; 
var x;
for (x in person) { 
    txt+=person[x]+ "";
}
document.getElementById("demo").innerHTML = txt;
</script>

</body>
</html>