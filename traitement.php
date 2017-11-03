<?php
function numero($tables) { /* prototype = (fonction + nom + paramètre)*/
	$i=0;
	while($i <= 9) {
		$i = $i+1;
	/* Différentes manières
	$i++;
	$i *+= 1;
	*/
	echo ($i."*".$tables."=".$i*$tables."</br>");
	}
}

numero($_POST["tables"]);
?>