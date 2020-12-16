<?php
function isBiten()
{
	$probability=rand(1,2);
	if ($probability=1) {
	$value="TRUE";
	}else {
		$value="FALSE";
			}

}
isBiten();
if ($value="TRUE") {
	echo "Charlie bit your finger!";
		}else
		{
			echo "Charlie did not bite your finger";
		}	
		
 ?>	 