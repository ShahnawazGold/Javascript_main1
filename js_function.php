

<!DOCTYPE html>
<html>
<body>

<h1>JavaScript Functions</h1>

<p>This example calls a function which performs a calculation, and returns the result:</p>

<p id="demo"></p>

<script>
// function myFun( p1 ,p2){
 
//     return p1*p2;
// }
// document.getElementById("demo").innerHTML = myFun(3,4);



function toCelsius(f) {
    return (5/9) * (f-32);
}
document.getElementById("demo").innerHTML = toCelsius(77);
</script>

</body>
</html>