<?php

// Using the SplPriorityQueue from SPL
class MyQueue extends SplPriorityQueue
{
	public function compare($valueOne,$valueTwo)
	{
		return true;
	}
}

$queue = new MyQueue();
$queue->insert(array('foo1','bar1'),2);
$queue->insert(array('foo2','bar2'),3);
$queue->insert(array('foo3','bar3'),1);

echo $queue->count()." items in the queue.\n\n";

$queue->setExtractFlags(MyQueue::EXTR_BOTH);

while($queue->valid()){
	var_dump($queue->current());
	$queue->next();
}

?>