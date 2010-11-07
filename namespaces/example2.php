<?php

// A namespace to use in another file
namespace Blog\Post;

function makePost($postContent)
{
	echo __NAMESPACE__.' >> '.__METHOD__.': '.$postContent."\n";
}

?>