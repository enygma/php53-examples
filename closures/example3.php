<?php

// Using a closure as a callback in a function
$postContent = 'The answer to the ultimate question is 1234';

$postContent = preg_replace_callback(
	'/[0-9]{4}/',
	function($match){
		return '42';
	},
	$postContent
);

echo "Output:\n";
echo $postContent."\n\n";

?>