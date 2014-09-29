<html>
<body style="font-size: 28">

<form action="r.php" method="post">
    Number of Words: <input type="number" name="numwords" maxlength=1 size="1"><br>

   <input type="hidden" name="yesnumb" value="0">

    Include number? <input type="checkbox" name="yesnumb" value="1"> <br>

    <input type="hidden" name="yessymb" value="0">

    Include special character? <input type="checkbox" name="yessymb" value="1"> <br>

    <input type="hidden" name="yescap" value="0">

    Make all caps? <input type="checkbox" name="yescap" value="1"> <br>

    <input type="hidden" name="yesspace" value="0">

  Seperate with spaces instead of dashes? <input type="checkbox" name="yesspace" value="1"> <br>


    <input type="submit">
</form>


</body>
</html> 