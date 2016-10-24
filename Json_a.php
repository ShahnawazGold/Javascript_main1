


<!DOCTYPE html>
<html>
<body>

<h2>JSON Object Creation in JavaScript</h2>

<p id="demo"></p>

<script>
// var text = '{
//     "name":"John Johnson",
//     "street":"Oslo West 16",
//     "phone":"555 1234567"
    
//     }';

// var obj = JSON.parse(text);

// document.getElementById("demo").innerHTML =
// obj.name + "<br>" +
// obj.street + "<br>" +
// obj.phone;


var employees =[
    {"firstName":"bean",
    "lastName":"Doe"},

    {"firstName":"shah",
    "lastName":"khan"},

    {"firstName":"tine",
    "lastName":"Doe"}];

document.getElementById("demo").innerHTML =

employees[2].firstName + " " + employees[0].lastName;
</script>

</body>
</html>