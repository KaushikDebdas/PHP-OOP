<?php

require_once('Post.php');

$p = new Post();

// Select
var_dump($p->getPosts());
var_dump($p->getPostById(2));

// Insert
$data = ['title' => 'This is next post', 'content' => 'Enjoying the PHP OOP'];
$p->addPost($data);
var_dump($p->getPosts());

// Update
$data = ['id' => 5,'title' => '[UPDATED] This is next post', 'content' => 'Enjoying the PHP OOP'];
$p->updatePost($data);
var_dump($p->getPosts());

// Delete
$p->deletePost(5);
var_dump($p->getPosts());