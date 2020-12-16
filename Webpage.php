<!DOCTYPE html>
<html>
	<body>
	  <form name="form" action="loops.php ?>" method="POST">
	 <input type="number" name="n"><br/>
	 <input type="Submit" name="button" value="Submit">
	 </form>
	</body>
</html>
<?php
 if (isset($_POST['button']))
	 {
	  $number=$_POST['n'];
$fourths = 0;

for($x=1; $x<=$number; $x++)
{
$fourths =$x*$x*$x*$x;
echo "x*x*x*x=$fourths";
}
}
?>