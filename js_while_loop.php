

<!DOCTYPE html>
<html>
<body>

<h1>JavaScript while</h1>

<p id="demo"></p>

<script>
// var text ="";
// var i = 0;
// while (i<10) {
//    text+="<br> the numn is"+i;
//    i++;
// }

// var text = "";
// var i;
// for (i = 0; i < 10; i++) {
//     if (i === 3) { break; }
//     text += "The number is " + i + "<br>";
// }



var text = "";
var i;
for (i = 0; i < 10; i++) {
    if (i === 3) { continue; }
    text += "The number is " + i + "<br>";
}
document.getElementById("demo").innerHTML = text;
</script>

</body>
</html>