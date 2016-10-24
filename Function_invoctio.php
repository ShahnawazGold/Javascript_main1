

<!DOCTYPE html>
<html>
<body>

<p>myObject.fullName() will return John Doe:</p>

<p id="demo"></p>

<script>
// var myObject = {
//     firstName:"John",
//     lastName: "Doe",
//     fullName: function() {
//         return this.firstName + " " + this.lastName;
//     }
// }
// document.getElementById("demo").innerHTML = myObject.fullName(); 


// function myFunction(arg1, arg2) {
//     this.firstName = arg1;
//     this.lastName  = arg2;
// }

// var x = new  myFunction("shah","james");
// document.getElementById("demo").innerHTML = x.firstName;


// var myObject;
// function myFunction(a, b) {
//     return a * b;
// }
// myObject = myFunction.call(myObject, 10, 2);    // Will return 20 
// document.getElementById("demo").innerHTML = myObject; 

var myObject, myArray;
function myFunction(a, b) {
    return a * b;
}
myArray = [10, 2]
myObject = myFunction.apply(myObject, myArray);      // Will return 20 
document.getElementById("demo").innerHTML = myObject; 

</script>

</body>
</html>