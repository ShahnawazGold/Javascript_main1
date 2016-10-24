

<!DOCTYPE html>
<html>
<body>

<button onclick="myFunction()">Try it</button> 


<p id="demo"></p>

<script>
// var cars = new Array ("bmw","honda","farari");
// //var cars = ["bmw","honda","farari"];
// document.getElementById("demo").innerHTML = cars;


// /// LOOP ARRAT HERE//////////////
// var fruits, text, fLen, i;

// fruits = ["Banana", "Orange", "Apple", "Mango"];
// fLen = fruits.length;
// text = "<ul>";
// for (i = 0; i < fLen; i++) {
//     text += "<li>" + fruits[i] + "</li>";
// }
// text += "</ul>";
// document.getElementById("demo").innerHTML = text;

/// /// generic array here////
// var fruits = ["Banana", "Orange", "Apple", "Mango"];
// document.getElementById("demo").innerHTML = fruits;

// function myFunction(){
//     //fruits.push("lemon");
//      //document.getElementById("demo").innerHTML = fruits.pop(); // use all pop here
//     //fruits.pop();

    

//     document.getElementById("demo").innerHTML = fruits;

// }

var myGirls = ["Cecilie", "Lone"];
var myBoys = ["Emil", "Tobias", "Linus"];
var myChildren = myGirls.concat(myBoys);

document.getElementById("demo").innerHTML = myChildren;
</script>

</body>
</html>