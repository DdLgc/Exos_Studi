<?php
require_once('models/Post.php');
$posts = new Posts();
$posts = $posts->getPosts();
require_once('views/posts-list.php');