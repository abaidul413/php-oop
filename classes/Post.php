<?php

  class Post
  {
  	private $content;
  	private $title;
  	  
    public function filter()
    {
    	$this->content = $filter_content;
    	$this->title = $filter_title;
    }

    public function getContent()
    {
    	return $this->content;
    }
  }

?>