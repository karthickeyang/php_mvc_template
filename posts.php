<?php

class Posts {
    
    public $title;
    public $published;

    public function __construct($title, $published){
        $this->title = $title;
        $this->published = $published;
    }

}

$posts =  [ 
        new Posts( 'PHP5.1' , true),
        new Posts( 'PHP5.2' , false),
        new Posts( 'PHP5.3' , true),
        new Posts( 'PHP5.4' , false),
        new Posts( 'PHP5.5' , true),
        new Posts( 'PHP7.1' , false)
    ];

// $unPublishedPosts = array_filter($posts, function ($post) {
//     return ! $post->published;
// });

// die(var_dump($unPublishedPosts));


// $PublishedPosts = array_filter($posts, function ($post) {
//     return $post->published;
// });

// die(var_dump($PublishedPosts));

$titles = array_column($posts, 'title');
die(var_dump($titles));
