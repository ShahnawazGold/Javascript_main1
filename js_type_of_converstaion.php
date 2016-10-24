

<!DOCTYPE html>
<html>
<body>

<p>The typeof operator returns the type of a variable, object, function or expression.</p>

<p id="demo"></p>

<script>
document.getElementById("demo").innerHTML = 
    typeof "john" + "<br>" +
    typeof 3.14 + "<br>" +
    typeof NaN + "<br>" +
    typeof false + "<br>" +
    typeof [1,2,3,4] + "<br>" +
    typeof {name:'john', age:34} + "<br>" +
    typeof new Date() + "<br>" +
    typeof function () {} + "<br>" +
    typeof myCar + "<br>" +
    typeof null;
</script>

</body>
</html>