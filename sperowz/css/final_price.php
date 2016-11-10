<html>
<head>

<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
		
		</head>
<body>





<h1>TableToExcel</h1>
<!--<input type="button" value="Dowload file." onclick="generate_table(include(finalprice(1).php))"> -->

<!--<input type="button" value="Generate a table in Excel Format." onclick="generate_table(include(finalprice(1).php))"> -->

<p id="product"></p>



<button class="btn btn-success" id="butttton">Export</button>



</body>

<tr class="noExl">
  <th>#</th>
  <th>Product name</th>
  <th>Product Description</th>
  <th>Product Price</th>
</tr>


<script>
var text = "<table border='1' id='table2excel'>";
var size;		
var $price;
var $desc=" EP5 ";

	 
for (height=8; height<=30; height=height+0.25)
  {
		  var decimal = height.toFixed(2);
	var decimalArray = decimal.split("."); 
	var leftDecimalPart = decimalArray[0]; 
	var rightDecimalPart = decimalArray[1]; 
	
	var numerator = rightDecimalPart;
	var denominator = Math.pow(10, rightDecimalPart.length);
	var firstheight = '';
	var secondheight = '';
	var interval  = 25; 
	firstheight = leftDecimalPart;
		 secondheight = numerator/interval + "/" + denominator/interval;
		 var sizeNumeratorVal = numerator/interval;
		 if(sizeNumeratorVal == 0)
		 secondheight = "''";
	     var sizeNumeratorVal = numerator/interval;
		 if (sizeNumeratorVal ==1)
			 secondheight = "-1/4''";
	     if (sizeNumeratorVal ==2)
		  secondheight = "-1/2''";
         if (sizeNumeratorVal ==3)
          secondheight= "-3/4''";			 
		console.log(numerator);
		console.log(secondheight);
		
		
           	
    for (size=8.0; size<=54.0; size=size+0.25)
	  {
 		if (height<=30)	
	    { 
           if(size<=12)
		    { 
		     $price=64;
		 
	
	        }
	        else if(size>=12.25 && size<=18)
	            {
		          $price=86;
		
	            }
	        else if (size>=18.25 && size<=24)
	            {
		          $price=108;
	            }
	        else if (size>=24.25 && size<=30)
	            {
		          $price=129;
	            }
	        else if (size>=30.25 && size<=36)
	            {
		          $price=166;
	            }
	        else if (size>=36.25 && size<=42)
	            {
		          $price=174;
	            }
	        else if (size>=42.25 && size<=48)
	            {
		          $price=371;
	            }
	        else 
	            {
	              $price=414;	 
	            }
	    }
		
		
		
		if (height<=22)	
	    { 
            if(size<=12)
		    { 
		     $price=55;
		 
	
	        }
	        else if(size>=12.25 && size<=18)
	            {
		          $price=75;
		
	            }
	        else if (size>=18.25 && size<=24)
	            {
		          $price=94;
	            }
	        else if (size>=24.25 && size<=30)
	            {
		          $price=112;
	            }
	        else if (size>=30.25 && size<=36)
	            {
		          $price=133;
	            }
	        else if (size>=36.25 && size<=42)
	            {
		          $price=152;
	            }
	        else if (size>=42.25 && size<=48)
	            {
		          $price=310;
	            }
	        else 
	            {
	              $price=346;	 
	            }
	    }
		
		
		
		
		if (height<=18)	
	    { 
            if(size<=12)
		    { 
		     $price=45;
		 
	
	        }
	        else if(size>=12.25 && size<=18)
	            {
		          $price=64;
		
	            }
	        else if (size>=18.25 && size<=24)
	            {
		          $price=80;
	            }
	        else if (size>=24.25 && size<=30)
	            {
		          $price=96;
	            }
	        else if (size>=30.25 && size<=36)
	            {
		          $price=112;
	            }
	        else if (size>=36.25 && size<=42)
	            {
		          $price=131;
	            }
	        else if (size>=42.25 && size<=48)
	            {
		          $price=261;
	            }
	        else 
	            {
	              $price=291;	 
	            }
	    }

	
	var decimal = size.toFixed(2);
	var decimalArray = decimal.split("."); 
	var leftDecimalPart = decimalArray[0]; 
	var rightDecimalPart = decimalArray[1]; 
	
	var numerator = rightDecimalPart;
	var denominator = Math.pow(10, rightDecimalPart.length);
	var firstVal = '';
	var secondVal = '';
	var interval  = 25; 
	firstVal = leftDecimalPart;
		 secondVal = numerator/interval + "/" + denominator/interval;
		 var sizeNumeratorVal = numerator/interval;
		 if(sizeNumeratorVal == 0)
		 secondVal = "''";
	     var sizeNumeratorVal = numerator/interval;
		 if (sizeNumeratorVal ==1)
			 secondVal = "-1/4''";
	     if (sizeNumeratorVal ==2)
		  secondVal = "-1/2''";
         if (sizeNumeratorVal ==3)
          secondVal= "-3/4''";			 
		console.log(numerator);
		console.log(secondVal);
		
	    
	if(height<=12)
	{ 
       if (size<=12)	
	   { 
		 $price=33;
		 
	
	 }
	else if(size>=12.25 && size<=18)
	{
		$price=45;
		
	}
	else if (size>=18.25 && size<=24)
	{
		$price=59;
	}
	else if (size>=24.25 && size<=30)
	{
		$price=73;
	}
	else if (size>=30.25 && size<=36)
	{
		$price=85;
	}
	else if (size>=36.25 && size<=42)
	{
		$price=98;
	}
	else if (size>=42.25 && size<=48)
	{
		$price=199;
	}
	else 
	{
	  $price=222;	 
	 }
	}
	
	
	    
		
		
	
	
	Value = size-1.875;
	var decimal = Value.toFixed(3);
	var decimalArray = decimal.split("."); 
	var leftDecimalPart = decimalArray[0]; 
	var rightDecimalPart = decimalArray[1]; 
	
	var numerator = rightDecimalPart;
	var denominator = Math.pow(10, rightDecimalPart.length);
	var firstValue = '';
	var secondValue = '';
	var interval  = 125; 
	firstValue = leftDecimalPart;
		 secondValue = numerator/interval + "/" + denominator/interval;
		 var sizeNumeratorValue = numerator/interval;
		 if(sizeNumeratorValue == 1)
		 secondValue = "1/8''";
	     var sizeNumeratorValue = numerator/interval;
		 if (sizeNumeratorValue ==3)
			 secondValue = "3/8''";
	     if (sizeNumeratorValue ==5)
		  secondValue = "5/8''";
         if (sizeNumeratorValue ==7)
          secondValue= "7/8''";			 
		console.log(numerator);
		console.log(secondValue);
	
	
	    dia = height-1.5;
	var decimal = dia.toFixed(2);
	var decimalArray = decimal.split("."); 
	var leftDecimalPart = decimalArray[0]; 
	var rightDecimalPart = decimalArray[1]; 
	
	var numerator = rightDecimalPart;
	var denominator = Math.pow(10, rightDecimalPart.length);
	var firstdia = '';
	var seconddia = '';
	var interval  = 50; 
	firstdia = leftDecimalPart;
		 seconddia = numerator/interval + "/" + denominator/interval;
		 var sizeNumeratorValue = numerator/interval;
		 if(sizeNumeratorValue == 1)
		 seconddia = "1/2''";
	     var sizeNumeratorValue = numerator/interval;
		 if (sizeNumeratorValue ==1.5)
			 seconddia = "3/4''";
	     if (sizeNumeratorValue ==0)
		  seconddia= "''";
         if (sizeNumeratorValue ==0.5)
          seconddia= "1/4''";			 
		console.log(numerator);
		console.log(seconddia);
	      
		var Custom="custom product**";

if (((firstheight==12 || firstheight==18 || firstheight==22 || firstheight==26 ) && secondheight=="''") && ((firstVal==12 || firstVal==18 || firstVal==24 || firstVal==30 || firstVal==36 || firstVal==42) && secondVal=="''"))
{
console.log(firstheight);
console.log(secondheight);
console.log('');
Custom="";
}
	
		
			
		
	      
	
	
        text += "<tr><td><b>EP5 "+firstheight+secondheight + firstVal+ secondVal+"  Glass (Squared Corners) "+Custom+" </b></td><td> ";  

		text +="" +$desc+firstheight+secondheight+ firstVal  + secondVal+ " Glass (Squared Corners)</br> ";
		text +="Glass Kit Contains:</br> ";
		text +="Qty 1-  "+firstdia+"-"+seconddia +"x"+ firstValue+"-" +secondValue+" ";
		text +=" <b></td><td>$" +$price+ "</td></tr>";
	
	}	
	    
	
	  }

	
	
	
document.getElementById("product").innerHTML = text+"</table>";
//document.getElementById("product").innerHTML = text;
//document.getElementById("product").innerHTML = text;






</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="jquery.table2excel.js"></script>
<script>
$( document ).ready(function() {
$("#butttton").click(function(){
	
  $("#table2excel").table2excel({
    // exclude CSS class
    exclude: ".noExl",
    name: "WorksheetName",
    fileName:"sda"
    
  }); 
});
});
</script>

</html>