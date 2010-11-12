<?php

/**
 * Using the SplQueue from SPL
 * 
 * http://us3.php.net/manual/en/class.splqueue.php
 */

$queue = new SplQueue();

$queue[] = 'First';
$queue[] = 'Second';
$queue[] = 'Third';

$queue->setIteratorMode(SplQueue::IT_MODE_DELETE); //IT_MODE_KEEP

foreach($queue as $value){
	echo $value."\n";
}

var_dump($queue);

?>