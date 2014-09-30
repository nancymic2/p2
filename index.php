<!doctype html> 
 <html lang="en"> 

 <head> 
 <meta charset="utf-8"> 
 <title>Nancy Michell</title> 
 <link rel="stylesheet" type="text/css" href="css/css.css"> 
 </head> 
 <body> 

<div id="div1">

<h3>xkcd password boutique</h3>

</div>

<div id="div2">
Why should fabulous you do all the heavy lifting every time you need a password?
We'll create your passwords for you while you enjoy a little shopping and relaxation!

</div>

<img src="images/chandelier.gif" alt="light" id="light">
<img src="images/sofa.gif" alt="sofa" id="sofa">
<img src="images/rugP.gif" alt="rug" id="rug">
<img src="images/table.gif" alt="table" id="table">
<img src="images/sign.jpg" alt="sign" id="sign">
<img src="images/doorl.gif" alt="doorl" id="doorl">
<img src="images/doorr.gif" alt="doorl" id="doorr">
<div id="formdiv">
<form action="r.php" method="post">
    Number of Words: <input type="text" name="numwords" maxlength=1 size="1"><br>

   <input type="hidden" name="yesnumb" value="0">

    Include number? <input type="checkbox" name="yesnumb" value="1"> <br>

    <input type="hidden" name="yessymb" value="0">

    Include special character? <input type="checkbox" name="yessymb" value="1"> <br>

    <input type="hidden" name="yescap" value="0">

    Make all caps? <input type="checkbox" name="yescap" value="1"> <br>

    <input type="hidden" name="yesspace" value="0">

  Separate with spaces not dashes? <input type="checkbox" name="yesspace" value="1"> <br>
<br>

    <input type="submit">
</form>
<img src="images/arr.png" alt="arrow" id="arrow">
</div>
</body>
</html> 