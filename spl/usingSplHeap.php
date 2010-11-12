<?php

// Using the SplHeap/SplMaxHeap/SplMinHeap from SPL
/**
 * SplMaxHeap is the same, but keeps the maximum on the top
 * SplMinHeap is the same, but keeps the minimum on the top
 *
 * http://us3.php.net/manual/en/class.splheap.php
 */
class MyHeap extends SplHeap
{
	// No methods defined
	public function compare($valueOne,$valueTwo)
	{
		return true;
	}
}

$heap = new MyHeap();
$heap->insert('value one');
$heap->insert('value two');
$heap->insert('value three');

var_dump($heap);

$extracted = $heap->extract();

var_dump($extracted);
var_dump($heap);

if(!$heap->isEmpty()){
	echo "NOTE: Heap is not empty!\n\n";
}

?>