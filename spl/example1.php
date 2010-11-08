<?php

// Using the SplFixedArray with SPL
$categoriesArray = new SplFixedArray(4);

$categoriesArray[3] = 'General';

try {
	$categoriesArray[4] = 'Programming'; // Will return "Out of Range"
}catch(RuntimeException $e){
	echo 'FAIL: '.$e->getMessage()."\n\n";
}
$categoriesArray->setSize(5);

$categoriesArray[4] = 'Programming'; // No more "Out of Range"

var_dump($categoriesArray);

?>