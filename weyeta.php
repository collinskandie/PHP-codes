<!DOCTYPE html>
<html>
	
	<body>	 
	<form name="form" action="weyeta.php" method="POST">
	 Enter the number of copies to be printed.
	 <input type="number" name="numberOfcopies"><br/>	 
	 <input type="Submit" name="button" value="Submit">	 
	 </form>
<?php
	 if (isset($_POST['button']))
	 {
	  $copies=$_POST['numberOfcopies'];	  
	
if ($copies <=99) {
	$totalcost= $copies*0.30;
		 echo "Price per copy is Ksh 0.30";
		 echo "Total cost is: K.Shs $totalcost";
	 } elseif ($copies <500) {
	   $totalcost1= $copies*0.28;
		 echo "Price per copy is Ksh 0.28";
		 echo "Total cost is: K.Shs $totalcost1";
	 }
	 elseif ($copies <750) {
	   $totalcost2= $copies*0.27;
		 echo "Price per copy is Ksh 0.27";
		 echo "Total cost is: K.Shs $totalcost2";
	 }
	 elseif ($copies <=1000) {
	   $totalcost3= $copies*0.26;
		 echo "Price per copy is Ksh 0.26";
		 echo "Total cost is: K.Shs $totalcos3";
	 }
	 elseif ($copies >1000) {
	   $totalcost4= $copies*0.25;
		 echo "Price per copy is Ksh 0.25";
		 echo "Total cost is: K.Shs $totalcost4";
	 }
	}
 ?>	 
	</body>
</html>