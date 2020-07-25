<?php

class Post
{
  public $title;

  public $published;

  public function __construct($title, $published)
  {
    $this->title = $title;
    $this->published = $published;
  }

}

$posts = [
  new Post('My First Post', true),
  new Post('My Second Post', true),
  new Post('My Third Post', true),
  new Post('My Fourth Post', false)
];

/**
 * 
 * array_filter
 */

// filter through unpublished posts
$unpublishedPosts = array_filter($posts, function ($post) {
  return ! $post->published;
});

// filter through published posts
$publishedPosts = array_filter($posts, function ($post) {
  return $post->published;
});


/**
 * array_map
 * The array_map function works when you need to modify what get output
 * The array_map function also works like (foreach loop)
 */

//  foreach($posts as $post) {
//    $post->published = true;
//  }

 $modified = array_map(function ($post) {
   $post->published = true;
   return $post;
 }, $posts);


 /**
  * array_column
  */
  $titles = array_column($posts, 'title');

  
var_dump($titles);