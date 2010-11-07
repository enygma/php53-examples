<?php

// A namespace to use in another file
namespace Blog\Article;

function makePost($postContent)
{
	echo __NAMESPACE__.' >> '.__METHOD__.': '.$postContent."\n";
}

?>