<?php

class  Faq extends CustomPosts{
	var $plural = 'Faqs';
	var $single = "faq";
	var $slug = "faq";
	public $supports = array('title', 'thumbnail', 'editor', 'custom-fields', 'revisions', 'excerpt');
}

?>