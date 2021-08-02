<!DOCTYPE html>
<html>
	<head>
		<title>Profit and Loss</title>
		
	</head>
	<body>
		<form method="POST">
		<table border="0" >
			
			<tr>
				<th>Enter Cost Price</th>
				<th><input type="number" name="cp" value="" placeholder="COST PRICE"/></th>
			</tr> 
			<tr>
				<th>Enter Selling Price</th>
				<th><input type="number" name="sp" value="" placeholder="SELLING PRICE"/></th>
			</tr>
			<tr>
				
				<th colspan="2">
				<input type="submit" name="submit" value="submit"/>
				</th>
			</tr>
			
		</table>
		</form>
		<?php
			if(isset($_POST['submit']))
				{
					$cost = $_POST['cp'];
					$sell = $_POST['sp'];

					if($sell > $cost)
						{
							$profit = $sell - $cost;
							echo " PROFIT =  " .$profit;
						}
					else if($cost > $sell)
						{
							$loss = $cost - $sell;
							echo " LOSS =  " .$loss;
						}
					else
						{
						echo "No Profit No Loss";
						}

				}
		?>
	</body>
</html>