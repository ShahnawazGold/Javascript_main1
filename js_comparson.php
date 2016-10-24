



<!DOCTYPE html>
<html>
<body>

<p>Assign 5 to x, and display the value of the comparison (x == 8):</p>

<p id="demo"></p>

<script>
//var x = 5;
//document.getElementById("demo").innerHTML = (x == "5"); // true
//document.getElementById("demo").innerHTML = (x === 5); // true
//document.getElementById("demo").innerHTML = (x != 8);
//document.getElementById("demo").innerHTML = (x > 8); //fals
//document.getElementById("demo").innerHTML = (x !== 8);// true

//document.getElementById("demo").innerHTML = (x <= 8); // true


// var x = 6;
// var y = 3;

// document.getElementById("demo").innerHTML = 
// (x < 10 && y > 1) + "<br>" +  // true
// (x < 10 && y < 1);        // false

var x = 6;
var y = 3;

document.getElementById("demo").innerHTML = 
(x === 5 || y === 5) + "<br>" +  // false
(x === 6 || y === 5) + "<br>" + // true
(x === 6 || y === 3);           // true
</script>

</body>
</html>