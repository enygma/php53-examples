<?php

// Making a closure that uses outside variables via "use"
class Blog {
	
	public static function makePost($postTitle,$postContent)
	{
		$filterWords = array('hoopy','frood');
		
		$filter = function($filterArray) use (&$postContent)
		{
			str_replace($filterArray,'',$postContent);
		};
		$filter($filterWords);
		
		echo "Output:\n";
		echo $postContent."\n\n";
	}
}

$postTitle 		= 'This is my title...really';
$postContent 	= "This is just some sample content. You'd be a hoopy frood if you read it.";

Blog::makePost($postTitle,$postContent);

?>