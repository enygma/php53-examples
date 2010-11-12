<?php

/**
 * A few things in this example
 * - making a simple namespace
 * - overriding a basic PHP function
 */
namespace Blog
{
	class Post
	{
		public function makePost($postContent){
			echo 'content: '.$postContent."\n";
		}
	}
	
	function strlen($string)
	{
		echo 'length: '.\strlen($string);
	}
}

/**
 * We can't have global things and a namespace in the same
 * file, so we put these into the global namespace
 */
namespace {
	$string = 'some sample content';
	echo Blog\Post::makePost($string)."\n";
	echo Blog\strlen($string)."\n";
	echo \strlen($string)."\n\n";
}

?>
