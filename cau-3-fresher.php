<?php
function sapXep($array) {
	
    $arrayLength = count($array);
    
    for($i= 0; $i < $arrayLength - 1; $i++) {
    	$min = $i;
    	for($j= $i + 1; $j < $arrayLength ; $j++) {
        	if($array[$j] < $array[$min]) {
            	$min = $j;
            }
        }
        
        $pos = $array[$i];
        $array[$i] = $array[$min];
        $array[$min] = $pos;
    }
    
    
    return $array;
}
	var_dump(sapXep([1,2,4,6,234,6]));
?>  