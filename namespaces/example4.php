<?php

// Using our other namespace
include('example2.php');
include('example3.php');

$posttitle = 'This is my post title';
$postContent = 'This is my post content';

\Blog\Post\makePost($postContent)."\n";
\Blog\Article\makePost($postContent)."\n";

?>