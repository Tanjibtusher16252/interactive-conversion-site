<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Page 1</title>
    <script type="text/javascript">

function convertUnit ()
{
// convert pound to kilogram
document.unitForm.toField.value = document.unitForm.fromField.value / 2.2;
// convert kilogram to pound
document.unitForm.toField.value = document.unitForm.fromField.value * 2.2;
// convert inch to centimeter
document.unitForm.toField.value = document.unitForm.fromField.value / 2.54;
// convert centimeter to inch
document.unitForm.toField.value = document.unitForm.fromField.value * 2.54;
}

</script>

</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-1"></div>
            
            <div class="col-10">
            
                <div class="box">
                
              
                <font color="red"><h1><b>Page 1 [Home]</b></h1></font>
                <?php
		$converterErr =  "";
		$converter = ""; 
		

         


		if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_POST['converter'])) {
				$converterErr = "Field can not be empty";
			}
			else {
				$converter = $_POST['converter'];
                
			}

			 
             

            $filepath = "data.txt"; 
            $f = fopen($filepath,'a');
            fwrite($f,"$converter  \n");
		
		}
        
	?>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                    <br>
                    <font color="red"><h2><b>Conversion Site</b></h1></font>

                    <button onclick="location.href='Home.php'" class="button"><b>1.Home</b></button>
                    
                   <button onclick="location.href='Conversion-rate.php'" class="button"><b>2.Conversion-rate</b></button>

                   <button onclick="location.href='History.php'" class="button"><b>3.History</b></button>
                   <br>
                    
                    
                   <font color="red"><h2><b>Converter:</b></h1></font>
                   <br>
			<select id="converter" name="converter">
			  <option value=" "> </option>
			  <select name="toList">
<option value="" selected="selected">Unit</option>
<option name="toKilogram" id="toKilogram" value="1.0">kg</option>
<option name="toPound" id="toPound" value="2.2">lb</option>
<option name="toCentimeter" id="toCentimeter" value="2.54">cm</option>
<option name="toInch" id="toInch" value="1.0">in</option>
</select>option>			  
			</select>
            <span style="color: red"><?php echo $ConverterErr; ?></span>
                    
                   
              
                    </a> 
                    <br>
                  
                    <b>value:</b><span><?php echo "$a";?></span><br>
<b>result:</b> <span><?php echo "$b";?></span><br>  

                    






                </div>




           
           </div>

            <div class="col-1"></div>
            
        </div>
        </div>
</body>
</html>