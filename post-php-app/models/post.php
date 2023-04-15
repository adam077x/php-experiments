<?php
class Post {
    public $id;
    public $title;
    public $content;

    function __construct($id, $title, $content) {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
    }
}