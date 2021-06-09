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
    $this->register_blocks();

    add_action( 'enqueue_block_editor_assets', array( $this, 'enqueue_block_editor_assets' ), 9 );
  }

  public function register_blocks() {

  }

  public function enqueue_block_editor_assets() {
    $js_deps  = array( 'wp-block-editor', 'wp-blocks', 'wp-date', 'wp-i18n', 'wp-element', 'wp-edit-post', 'wp-compose', 'underscore', 'wp-hooks', 'wp-components', 'wp-keycodes', 'moment', 'jquery' );

    wp_enqueue_script(
      'ct-blocks-library-editor',
      CODETOT_BLOCKS_LIBRARY_PLUGIN_URI . '/build/index.js',
      filemtime( CODETOT_BLOCKS_LIBRARY_DIR . '/build/index.js' ),
      $js_deps,
      true
    );
  }
}

CT_Blocks_Library_Init::instance();
