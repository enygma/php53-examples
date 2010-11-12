<?php

/**
 * Using our other namespace
 * Pulls in two other files with different namespaces and calls each
 *
 * http://us3.php.net/manual/en/language.namespaces.php
 */
include('namespaceToIncludePost.php');
include('namespaceToIncludeArticle.php');

$posttitle = 'This is my post title';
$postContent = 'This is my post content';

\Blog\Post\makePost($postContent)."\n";
\Blog\Article\makePost($postContent)."\n";

?>
