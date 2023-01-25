<?php

use function PHPSTORM_META\map;

class Post {
    public $title;

    public $published;

    public function __construct($title, $published) {
        $this->title = $title;
        $this->published = $published;
    }
}

$posts = [
    new Post('My first post', true),
    new Post('My second post', true),
    new Post('My third post', true),
    new Post('My fourth post', false)
];

// $unpublishedPosts = array_filter($posts, function ($post) {
//     return !$post->published;
// });

// $publishedPosts = array_filter($posts, function ($post) {
//     return $post->published;
// });

// $modified = array_map(function ($post) {
//     return ['title'=> $post->title];
// }, $posts);

$titles = array_column($posts, 'title');

var_dump($titles);
