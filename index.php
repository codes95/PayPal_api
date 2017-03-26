<html>
<head>
	<title>index</title>
	
	<style type="text/css">

	body{font-family: arial;color: #7A7A7A;margin:0px;padding:0px;}
	.procut_item {width: 550px;margin-right: auto;margin-left: auto;padding: 20px;background: #F1F1F1;margin-bottom: 1px;font-size: 12px;border-radius: 5px;text-shadow: 1px 1px 1px #FCFCFC;}
	.procut_item h4 {margin: 0px;padding: 0px;font-size: 20px;}

	input, textarea, select{
		
		margin-top:10px;
		min-width:300px;
		max-width:300px;
	}

	</style>

</head>
<body>

<h2 align="center">Test Products</h2>
<div class="product_wrapper">





<table class="procut_item" border="0" cellpadding="4">
  <tr>
    
    <td width="100%">
		<form method="post" action="process.php?paypal=checkout">
			
			Назва:<br> <input type="text" name="itemname" value="Canon EOS Rebel XS" /> <br>
			
			Код:<br> <input type="text" name="itemnumber" value="1" /> <br>
			
			Опис:<br> <textarea name="itemdesc" rows="5" cols="50" >
			   Capture all your special moments with the Canon EOS Rebel XS/1000D DSLR camera and cherish the memories over and over again.
			</textarea> <br>
			
			<input type="text" name="itemprice" value="225.00" /><br>
			
			Валюта :<br>  <select name="itemCorrency_code">
							<option value="USD">USD</option>
							<option value="RUB">RUB</option>
							<option value="UAH">UAH</option>
						</select> <br>
			
			Кількість :<br> <select name="itemQty">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select> <br>
			<input  type="submit" name="submitbutt" value="Оплатити" />
		</form>
    </td>
  </tr>
</table>




</div>
</body>
</html>
