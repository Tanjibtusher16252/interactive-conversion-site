<html>
<head><title>Page 2 </title>  </head>
<body>
<div class="container">
        <div class="row">
            <div class="col-1"></div>
            
            <div class="col-10">
            
                <div class="box">
                
              
                <font color="red"><h1><b>Page 2 [Conversion Rate]</b></h1></font>
                    <br>
                    <font color="red"><h2><b>Conversion Site</b></h1></font>

                    <button onclick="location.href='Home.php'" class="button"><b>1.Home</b></button>
                    
                   <button onclick="location.href='Conversion-rate.php'" class="button"><b>2.Conversion-rate</b></button>

                   <button onclick="location.href='History.php'" class="button"><b>3.History</b></button>
 <br>
 
 <font color="red"><h2>Conversion Rate</h1></font>
 <input type="text" name="fromField" onfocus="this.form.fromField.value=''; style.background='lightyellow';" onblur="style.background='white';" />

<select name="fromList" >
<option value="" selected="selected">Unit</option>
<option id="fromPound" value="2.2">lb</option>
<option id="fromKilogram" value="1.0">kg</option>
<option id="fromInch" value="1.0">in</option>
<option id="fromCentimeter" value="2.54">cm</option>
</select>

<input type="button" value="Convert" onclick="convertUnit()" />

<input type="text" name="toField" readonly="readonly" />

<select name="toList">
<option value="" selected="selected">Unit</option>
<option name="toKilogram" id="toKilogram" value="1.0">kg</option>
<option name="toPound" id="toPound" value="2.2">lb</option>
<option name="toCentimeter" id="toCentimeter" value="2.54">cm</option>
<option name="toInch" id="toInch" value="1.0">in</option>
</select>

<input type="reset" value="Reset" />

 

 </body>