

<!DOCTYPE html>
<html>
<body>

<p>Finding the largest number.</p>
<p id="demo"></p>

<script>
function findMax() {
    var i;
    var max = -Infinity;
    for(i = 0; i < arguments.length; i++) {
        if (arguments[i] > max) {
            max = arguments[i];
        }
    }
    return max;
} 
document.getElementById("demo").innerHTML = findMax(4, 5, 6);
</script>

</body>
</html>