<!DOCTYPE html>
<html>
	<head>
		<title>Currency Calculator</title>
	</head>
	<body>
		Enter the amount in US dollars.
	<form name="form" action="calculate.php" method="POST">
	 <input type="number" name="num" size="30"><br/>
	 <input type="Submit" name="button" value="Submit">
	 </form>
	  <?php
	 if (isset($_POST['button']))
	 {
	  $n=$_POST['num'];
	 $conv = 0.855183;
	 $amountEur= $n*$conv;
	  echo "Your $n US dollars is equal to $amountEur EUROS";
	 }
 ?>	 
	</body>
</html>