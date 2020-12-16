 <?php
	 if (isset($_POST['button']))
	 {
	  $n=$_POST['num'];
	 $conv = 0.855183;
	 $amountEur= $n*$conv;
	  echo "Your $n US dollars is equal to $amountEur EUROS";
	 }
 ?>	 