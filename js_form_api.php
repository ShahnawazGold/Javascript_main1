



<!DOCTYPE html>
<html>
<head>
<script>

 function myFunction( ){

var inpObj=document.getElementById("id1");

    if(inpObj.checkValidity()==false ){
        document.getElementById("demo").innerHTML = inpObj.validationMessage;
    }
 }

</script>
<input  id="id1" type="number" max="300" min ="100" required >
<button onclick="myFunction()">ok </button >

<p id="demo"></p>

</body>
</html>