

<!DOCTYPE html>
<html>
<body>

<h1>JavaScript Functions</h1>

<p>This example calls a function which performs a calculation and returns the result:</p>

<p id="demo"></p>

 <script>
 
// function myFun(a,b){
//  return a*b;
// }
//document.getElementById("demo").innerHTML =myFun(5,4) ;

var x= function (a,b){
 return a*b;
}
document.getElementById("demo").innerHTML =x(5,7) ;


function myFunction(a, b) {
    return a * b;
}
var x = myFunction(3,5)*5;
document.getElementById("demo").innerHTML = x;
</script>


</body>
</html>