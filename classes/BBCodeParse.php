<?php

 class BBCodeParse
 {
 	$private $post;

 	public function __construct($object)
 	{
       $this->post = $object;
 	}

 	public function getContent()
    {
    	$post->filter();
    	$content = $this->parsBBCode($post->getContent());
    	return $content;
    }

    private function parsBBCode($content)
    {
       //procedure will go here...
    }
 }


?>