<?php

class Video{
    public $type;
    public $duration;
    public $published = false;
    public $title;

    public $author;

    public function play(){
        return $this->published ? "The video is playing" : "Is not available yet";
    }

    public function pause(){
        return $this->published ? "The video is paused" : "";
    }
}

header('Content-Type:text/plain', true);
$intro = new Video();
$intro->published = true;
$intro->author = 'Guilherme Alacoc';
echo $intro->play(), PHP_EOL, $intro->pause(), PHP_EOL, $intro->author, PHP_EOL;