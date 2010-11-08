<?php

// Using the SplQueue from SPL

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