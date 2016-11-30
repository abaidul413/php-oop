<?php
  

  class Emoticon
  {
    $private $post;

 	public function __construct($object)
 	{
       $this->post = $object;
 	}

 	public function getContent()
    {
    	$post->filter();
    	$content = $this->parsEmoticon($post->getContent());
    	return $content;
    }

    private function parsEmoticon()
    {
       //procedure will go here...
    }
  }

?>