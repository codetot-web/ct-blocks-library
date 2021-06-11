<?php

class CT_Blocks_Library_Patterns {
  /**
   * The single class instance.
   *
   * @var $instance
   */
  private static $instance;

  public final static function instance()
  {
    if (is_null(self::$instance)) {
      self::$instance = new self();
    }
    return self::$instance;
  }

  public function __construct()
  {
		register_block_pattern_category('ct-patterns', array(
			'label' => _x('CT Patterns', 'Block pattern category')
		));

		$this->load_patterns();
	}

	public function load_patterns() {
		require_once CODETOT_BLOCKS_LIBRARY_DIR . '/patterns/hero-title/block.php';
	}
}

CT_Blocks_Library_Patterns::instance();
