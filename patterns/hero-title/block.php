<?php

class CT_Blocks_Library_Hero_Title_Pattern implements CT_Blocks_Library_Pattern_Interface {
	public function __construct()
	{
		$this->slug = 'hero-title';
		$this->title = __('Hero Title', 'block pattern title');
		$this->category = 'grid';

		ob_start(); ?>
		<!-- wp:group {"className":"ct-hero-title hero-section"} -->
		<div class="wp-block-group ct-hero-title hero-section"><div class="wp-block-group__inner-container">
		<!-- wp:group {"className":"section-container ct-hero-title__content"} -->
		<div class="wp-block-group section-container ct-hero-title__content"><div class="wp-block-group__inner-container"><!-- wp:heading {"level":1,"className":"ct-hero-title__title","fontSize":"huge"} -->
		<h1 class="ct-hero-title__title has-huge-font-size">Hero Title</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"ct-hero-title__description"} -->
		<p class="ct-hero-title__description">Hero Title Description</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"className":"ct-hero-title__footer"} -->
		<div class="wp-block-buttons ct-hero-title__footer"><!-- wp:button {"borderRadius":18,"backgroundColor":"luminous-vivid-amber","textColor":"black"} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-black-color has-luminous-vivid-amber-background-color has-text-color has-background" href="#about" style="border-radius:18px">Find out more</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div></div>
		<!-- /wp:group --></div></div>
		<!-- /wp:group -->
		<?php
		$this->content = ob_get_clean();

		add_action('init', array($this, 'register'));
	}

	public function register() {
		register_block_pattern(
			"$this->prefix/$this->slug", array(
				'title' => $this->title,
				'category' => $this->category,
				'content' => "$this->content"
			)
		);
	}
}

new CT_Blocks_Library_Hero_Title_Pattern();
