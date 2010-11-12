<?php

/**
 * Using __invoke
 * This new magic method allows a class to be called like a function
 *
 * http://www.php.net/manual/en/language.oop5.magic.php#language.oop5.magic.invoke
 */
class Blog
{
	public function __invoke($postTitle,$postContent)
	{
		echo $postTitle."\n".$postContent."\n\n";
	}
}

$postTitle = 'This is a post title';
$postContent = 'This is the post content';

$blogObject = new Blog();
$blogObject($postTitle,$postContent);

?>