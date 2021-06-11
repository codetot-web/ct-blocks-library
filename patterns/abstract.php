<?php

abstract class CT_Blocks_Library_Pattern_Abstract {
	private static $prefix = 'ct-blocks-library';
	var $slug;
	var $title;
	var $category;
	var $content;

	public function init() {
		add_action('init', $this->register_pattern);
	}

	public function register_pattern() {
		register_block_pattern(
			"$this->prefix/$this->slug", array(
				'title' => $this->title,
				'category' => $this->category,
				'content' => addslashes($this->content)
			)
		);
	}
}
