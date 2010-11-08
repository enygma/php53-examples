<?php

// Using __invoke
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