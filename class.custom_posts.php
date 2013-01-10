<?php

class CustomPosts{

	public $single = 'CPost';
	public $plural = 'Cposts';
	public $slug = 'cpost';
	public $menu_pos = 10;
	public $supports = array('title', 'excerpt', 'thumbnail', 'editor', 'custom-fields', 'revisions');
	public $capability_type = 'post';
	public $taxonomies = array('');
	public $hierarchical = false;
	
	public function CustomPosts(){
		add_action('init', array($this, 'init_custom_post'), 0);
		$this->init();
	}
	
	public function init(){
		return false;
	}
	
	public function init_custom_post(){
		$labels = array(
			'name' => $this->plural,
			'singular_name' => $this->single,
			'add_new' => 'Nuevo(a) '.$this->single,
			'add_new_item' =>  'Nuevo(a) '.$this->single,
			'edit_item' => 'Editar '.$this->single,
			'new_item' => 'Nueva '.$this->single,
			'view_item' => 'Ver '.$this->single,
			'search_items' => 'Buscar '.$this->plural.' &raquo;',
			'not_found' =>  'No hay '.$this->plural.'.',
			'not_found_in_trash' => 'No hay '.$this->plural.'.',
		);
		
		register_post_type($this->slug, array(
			'label' => __($this->plural),
			'labels' => $labels,
			'singular_label' => __($this->single),
			'description' => $this->plural,
			'menu_position' => $this->menu_pos,
			'public' => true,
			'show_ui' => true,
			'_builtin' => false,
			'exclude_from_search' => true,
			'_edit_link' => 'post.php?post=%d',
			'capability_type' => $this->capability_type,
			'hierarchical' => $this->hierarchical,
			'rewrite' => array("slug" => $this->slug, 'with_front' => false),
			'supports' => $this->supports,
			'taxonomies' => $this->taxonomies
		));
		
	}
	
}


?>