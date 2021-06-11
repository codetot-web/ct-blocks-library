<?php

class CT_Blocks_Library_Init
{
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
		add_action( 'wp_enqueue_scripts', array($this, 'enqueue_frontend_assets') );
    add_action( 'enqueue_block_editor_assets', array( $this, 'enqueue_block_editor_assets' ), 9 );

		$this->load_dependencies();
  }

	public function load_dependencies() {
		require_once CODETOT_BLOCKS_LIBRARY_DIR . '/patterns/interface.php';
		require_once CODETOT_BLOCKS_LIBRARY_DIR . '/patterns/abstract.php';

		require_once CODETOT_BLOCKS_LIBRARY_DIR . '/includes/class-ct-blocks-library-patterns.php';
	}

  public function enqueue_frontend_assets() {
		wp_enqueue_style(
			'ct-blocks-library-frontend',
			CODETOT_BLOCKS_LIBRARY_PLUGIN_URI . '/build/frontend.css',
			array(),
			filemtime( CODETOT_BLOCKS_LIBRARY_DIR . '/build/frontend.css' )
		);
  }

  public function enqueue_block_editor_assets() {
    $js_deps  = array( 'wp-block-editor', 'wp-blocks', 'wp-date', 'wp-i18n', 'wp-element', 'wp-edit-post', 'wp-compose', 'underscore', 'wp-hooks', 'wp-components', 'wp-keycodes', 'moment', 'jquery' );

    wp_enqueue_script(
      'ct-blocks-library-editor',
      CODETOT_BLOCKS_LIBRARY_PLUGIN_URI . '/build/blocks.js',
      filemtime( CODETOT_BLOCKS_LIBRARY_DIR . '/build/blocks.js' ),
      $js_deps,
      true
    );

		wp_enqueue_style(
			'ct-blocks-library-editor',
			CODETOT_BLOCKS_LIBRARY_PLUGIN_URI . '/build/editor.css',
			array(),
			filemtime( CODETOT_BLOCKS_LIBRARY_DIR . '/build/editor.css' )
		);
  }
}

CT_Blocks_Library_Init::instance();
