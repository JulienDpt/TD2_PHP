<?php
    class Book
    {
        private $title;
        private $author;
        private $editor;
        private $pageNb;

        public function __construct($title, $author, $editor, $pageNb)
        {
            $this->title = $title;
            $this->author = $author;
            $this->editor = $editor;
            $this->pageNb = $pageNb;
        }



    }
?>