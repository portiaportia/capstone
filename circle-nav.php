<?php
function displayCircleNav($itemSelected) {
	$selectedClasses = array("", "", "");
	$selectedClasses[$itemSelected] = "selected";
	
	echo '<div class="circle-nav">';
	
	foreach($selectedClasses as $item)
	{
		echo "<div class='circle " . $item . "'></div>";
	}
	
	echo "</div>";
} 
?>