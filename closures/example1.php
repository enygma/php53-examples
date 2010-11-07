<?php

// Assigning as anonymous function to a variable
$blog = function($postContent) {
	
	$findTags 		= array('[b]','[/b]');
	$replaceWith 	= array('<b>','</b>');
	
	echo "Output:\n";
	echo str_replace($findTags,$replaceWith,$postContent)."\n\n";
	
};

// Let's run it!
$blog('my [b]test[/b]');

?>