<?php

/**
 * Using the SplStack from SPL
 * Values with come back out in the reverse order they were entered
 *
 * http://us3.php.net/manual/en/class.splstack.php
 */

$stack = new SplStack();

$stack[] = 'First';
$stack[] = 'Second';
$stack[] = 'Third';

foreach($stack as $value){
	echo $value."\n";
}

?>