


<!DOCTYPE html>
<html>
<body>

<p>Creating and using an object method.</p>

<p>A method is actually a function definition stored as a property value.</p>

<p id="demo"></p>

<script>


///////////////// chnage name herr
// function person(firstName,lastName,age,eyeColor) {
//     this.firstName = firstName;
//     this.lastName = lastName;
//     this.age = age;
//     this.eyeColor = eyeColor;
//     this.changeName = function (name) {
//         this.lastName = name;
//     }
// }
// var myMother = new person("Sally","Rally",48,"green");
// myMother.changeName("Doe");
// document.getElementById("demo").innerHTML =
// "My mother's last name is " + myMother.lastName;

var person = {
    firstName: "John",
    lastName : "Doe",
    id       : 5566,
    fullName : function(){
        return this.firstName + " " + this.lastName;
    }
};

document.getElementById("demo").innerHTML = person.fullName();
</script>
</body>
</html>