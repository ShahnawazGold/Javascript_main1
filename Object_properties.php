

<!DOCTYPE html>
<html>
<body>

<p id="demo"></p>

<script>


/////////////////////////////// loop system here
// var txt = "";
// var person = {fname:"John", lname:"Doe", age:25}; 
// var x;
// for (x in person) {
//     txt += person[x] + " ";
// }
// document.getElementById("demo").innerHTML = txt;



var person = {
    firstname:"John",
    lastname:"Doe",
    age:50,
    eyecolor:"blue"
};

/////////////////////////delete property_exists
// delete person.age;

/////////////////add new property
person. nationality= "eng";
document.getElementById("demo").innerHTML =
person.firstname + " is " + person.nationality + ".";
</script>

</body>
</html>