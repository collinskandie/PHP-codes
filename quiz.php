<!DOCTYPE html>
<html>
	
	<body>
	 
	<form name="form" action="calculate.php" method="POST">
	 Enter the number of apartment units.
	 <input type="number" name="units"><br/>
	 Enter the amount of rent to occupy all the units.
	 <input type="number" name="rent"><br/>
	 Enter the amount of increase in rent in vacant units.
	 <input type="number" name="rentincrease"><br/>
	 Enter the amount to maintain a reneted unit.
	 <input type="number" name="maintainCost"><br/>
	 <input type="Submit" name="button" value="Submit">
	 
	 </form>
	  <?php
	 if (isset($_POST['button']))
	 {
	  $nUnits=$_POST['units'];
	  $Urent=$_POST['rent'];
	  $increase=$_POST['rentincrease'];
	  $cost=$_POST['maintainCost'];
	
if ($nUnits=50) {
		 echo "All the units are occupied";
		 echo "Rent is Ksh 6000";
		 	 }
		 	 elseif ($U) {
		 	 	 	# code...
		 	 	 }	  
	 }
 ?>	 
	</body>
</html>