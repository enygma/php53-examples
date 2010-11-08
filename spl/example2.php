<?php

// Using the SplStack from SPL

$stack = new SplStack();

$stack[] = 'First';
$stack[] = 'Second';
$stack[] = 'Third';

foreach($stack as $value){
	echo $value."\n";
}

?>